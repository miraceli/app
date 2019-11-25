<?php 

include_once("conexao.php");

$user = $_POST['user'];
$senha = $_POST['senha'];
$entrar = isset($_GET['entrar'])?$_GET['entrar']:"";

$sql = "select * from usuarios where user = '$user' and senha = '$senha'";
$consulta = mysqli_query($conexao, $sql);

if (isset($entrar)) {
           
    $verifica = mysqli_query($conexao, $sql) or die("Erro ao buscar dados");

    if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("user",$user);
        header("Location:index.php");
      }
  }

?>