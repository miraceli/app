<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "salao";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    print "Erro ao conectar com o banco de dados.";
}

?>