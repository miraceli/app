<?php #att

include_once("conexao.php");
$id_profissional = $_POST['id_profissional'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
if ( $id_profissional != "0" ) {
  $sql = "update profissionais set nome_profissional = '$nome', email_profissional = '$email', telefone_profissional = '$telefone' where id_profissional='$id_profissional'";
} else {
  $sql = "insert into profissionais (nome_profissional, email_profissional, telefone_profissional) values ('$nome','$email','$telefone')";
}
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Administrador</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />
</head>

<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li><a href="perfil.php">Configurações</a></li>
      </ul>
    </nav>

    <section>
      <h1>Confirmação</h1><br><hr><br>

      <?php

      if($linhas==1){
          echo "Administrador atualizado com sucesso!";
      }
      else{
          echo "Administrador NÃO atualizado.";
      }
      ?>

      <br>
      <br>
      <input class="btn" type="button" value="Perfil" onclick="javascript: location.href='perfil.php';" />
      <br>
      <br>   
      

    </section>

  </div>

</body>

</html>