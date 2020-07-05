<?php
header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos


require_once('conexao.php');
//$data = (array)$_POST;
$arr = json_decode($_POST, true);

//echo  '<pre>';

echo $arr;
//    $pdo = Conectar();
//    $sql = "SELECT * FROM pessoas";
//    $stm = $pdo->prepare($sql);
//    $stm->execute();
//    sleep(1);
//
//    echo json_encode($stm->fetchAll(PDO::FETCH_ASSOC));
