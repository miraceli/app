<?php
    $id = $_GET['id'];
    include_once("conexao.php");
    $sql = "delete from servicos where id_servico=".$id;
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
   header('Location: /app/servicos.php'); 
?>