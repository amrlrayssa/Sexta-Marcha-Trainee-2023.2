<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table,  $parameters){
        $sql = sprintf(
        'INSERT INFO %s (%s) value (%s)', 
        $table, implode(', ', array_keys($parameters)),
         ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id){
        $sql = sprintf(
            'DELETE FROM  %s WHERE %s value', 
            $table, 
            'id = id'
            );
            try {
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(compact('id'));
    
    
            } catch (Exception $e) {
                die($e->getMessage());
            }
        
    }

    public function edit($table, $id, $parameters){
        $sql = sprintf(  
            'UPDATE %s SET  WHERE %s',
            $table,
            implode(', ', array_map(function ($parameters){
               
              return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );
        $parameters['$id'] = $id;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);


        } catch (Exception $e) {
            die($e->getMessage());
        }
    
    }

    function login($table, $email, $password)
    {
        $sql = sprintf('SELECT * FROM %s WHERE email = :email', $table);
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && $password == $user['password']) {
            return true;
        } else {
            return false;
        }
    }
}