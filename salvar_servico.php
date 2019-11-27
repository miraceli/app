<?php

include_once("conexao.php");
$id_servico = $_POST['id_servico'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$tempomedio = $_POST['tempomedio'];

if ($id_servico != "0") {
  $sql = "update servicos set nome_servico = '$servico', descricao_servico = '$descricao', preco_servico = '$preco', tempomedio_servico = '$tempomedio' where id_servico = '$id_servico'";
} else {
  $sql = "insert into servicos (nome_servico, descricao_servico, preco_servico, tempomedio_servico) values ('$servico','$descricao','$preco','$tempomedio')";
}
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Cadastro de serviços</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />
</head>

<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li><a href="cadastro_servico.php">Cadastro de serviço</a></li>
      </ul>
    </nav>

    <section>
      <h1>Confirmação de Cadastro</h1><br><hr><br>

      <?php

      if($linhas==1){
          echo "Serviço cadastrado com sucesso!";
      }
      else{
          echo "Serviço NÃO cadastrado.";
      }
      ?>

      <br>
      <br>
      <input class="btn" type="button" value="Home" onclick="javascript: location.href='index.php';" />
      <br>
      <br>   
      <input class="btn" type="button" value="Novo serviço" onclick="javascript: location.href='cadastro_servico.php';" />


    </section>

  </div>

</body>

</html>