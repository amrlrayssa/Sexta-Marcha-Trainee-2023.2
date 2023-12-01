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