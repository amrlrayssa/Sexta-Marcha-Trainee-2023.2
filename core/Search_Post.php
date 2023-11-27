<?php

// Puxa a String
$titulo = $_GET['search'];
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

?>
