<?php
require_once('conexao.php');
    $pdo = Conectar();
    $sql = "SELECT * FROM pessoas";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    sleep(1);

    echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));
