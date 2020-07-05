<?php
require_once('conexao.php');
    $pdo = Conectar();
    $sql = "DELETE FROM `crudpdo`.`pessoas` WHERE `id`='2';";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    sleep(1);

    echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));


