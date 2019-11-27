<?php

include_once("conexao.php");

$user = $_POST['user'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (user, senha) values ('$user','$senha')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Cadastro de usuários</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />
</head>

<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li><a href="cadastro_usuario.php">Cadastro de usuários</a></li>
        <li><a href="index.php">Voltar ao site</a></li>
      </ul>
    </nav>

    <section>
      <h1>Confirmação de Cadastro</h1><br><hr><br>

      <?php

      if($linhas==1){
          echo "Usuário cadastrado com sucesso!";
      }
      else{
          echo "Usuário NÃO cadastrado.";
      }
      ?>

      <br>
      <br>
      <input class="btn" type="button" value="Login" onclick="javascript: location.href='login.php';" />
      <br>
      <br>   
      <input class="btn" type="button" value="Novo cadastro" onclick="javascript: location.href='cadastro_usuario.php';" />


    </section>

  </div>

</body>

</html>