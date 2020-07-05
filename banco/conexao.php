<?php
function Conectar(){
    try {
        $conexao = new PDO("mysql:dbname=crudpdo;host=localhost:3306","root","root");
        return $conexao;

    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        return null;
    }
}

//fonte
//https://www.devmedia.com.br/populando-selects-dinamicamente-com-ajax-json-e-php/27658

//chamadas ajax com axios
//https://github.com/axios/axios

//criando um forEach no javascript
//https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach