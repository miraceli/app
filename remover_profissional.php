<?php
    $id = $_GET['id'];
    include_once("conexao.php");
    $sql = "delete from profissionais where id_profissional=".$id;
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
   header('Location: /app/profissionais.php'); 
?>