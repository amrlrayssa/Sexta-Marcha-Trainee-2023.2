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

    public function selectAll($table, $start_limit = null, $rows_amount = null)
    {
        $sql = "select * from {$table}";

        if ($start_limit >=0 && $rows_amount > 0) {
            $sql .= " LIMIT {$start_limit}, {$rows_amount}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
    
    public function insert($table, $parameters,){
        $sql = sprintf(
        'INSERT INTO %s (%s) VALUES (%s)', 
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

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM  %s WHERE %s', 
            $table, 
            'id = :id'
            );
            try {
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute(compact('id'));
    
    
            } catch (Exception $e) {
                die($e->getMessage());
            }
        
    }

    public function edit($table, $id,$parameters){
        $sql = sprintf(  
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($parameters){
                return "{$parameters} = :{$parameters}";
            }, array_keys($parameters))),
            'id = :id'
        );
        $parameters['id'] = $id;
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);


        } catch (Exception $e) {
            die($e->getMessage());
        }
    
        header('Location: /admin/ldp');
    }

        function login($table, $email, $senha)
        {
            $sql = sprintf('SELECT * FROM %s WHERE email = :email', $table);
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();
            if ($user && is_array($user) && $senha == $user['senha']) { 
                return true;
            } else {
                return false;
            }
        }
    


    public function countAll($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";
       
        try {
            $statment = $this->pdo->prepare($sql);
            $statment->execute();
            return intval($statment->fetch(PDO::FETCH_NUM)[0]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function searchPost($titulo){
        // Seleciona todas as colunas da tabela posts com correspondências parciais
        $sql = "SELECT * FROM posts WHERE titulo LIKE '%$titulo%'";
        // Prepara a consulta e executa 
            try {
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
        // Captura excecao e lanca erro 
                return $stmt->fetchAll(PDO::FETCH_CLASS);
            } catch (Exception $e) {
                die($e->getMEssage());
            }
        }
}