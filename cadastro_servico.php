<?php
  $id = "0";
  $nome = "";
  $descricao = "";
  $preco = "";
  $tempomedio = "";
  if ( isset($_GET['id']) ) {
    include_once("conexao.php");
    $id = $_GET['id'];
    $sql = "select * from servicos where id_servico = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",intval($_GET['id']));
    $stmt->execute();
    $res = $stmt->get_result();
    while( $row = $res->fetch_assoc() ) {
      $nome = $row['nome_servico'];
      $descricao = $row['descricao_servico'];
      $preco = $row['preco_servico'];
      $tempomedio = $row['tempomedio_servico'];
    }
    $conexao->close();
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Cadastro Servico</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />

  <script type="text/javascript">

  function enviar(){
     var servico = form.servico.value;
     var descricao = form.descricao.value;
     var preco = form.preco.value;
     var tempomedio = form.tempomedio.value;

     if(servico == ""){
       alert("Campo serviço obrigatório!");
       form.servico.focus();
       return false;
     }

     if(descricao == ""){
       alert("Campo descrição obrigatório!");
       form.descricao.focus();
       return false;
     }

     if(preco == ""){
       alert("Campo preço obrigatório!");
       form.preco.focus();
       return false;
     }

     if(tempomedio == ""){
       alert("Campo tempo médio obrigatório!");
       form.tempomedio.focus();
       return false;
     }

  }
  </script>


</head>

<body>
  <div class="container">

  <nav>
      <ul class="menu">
        <li><a href="cadastro_servico.php">Cadastrar Serviço</a></li>
      </ul>
    </nav>

    <section>
      <h1>Servico</h1><br><hr><br>

      <form method="post" action="salvar_servico.php" name="form"> <!-- Mudar action -->
        <fieldset>
          <legend>Preencha todos os campos</legend>
          <input type="hidden" name="id_servico" value="<?php echo $id;?>"/>
          <label for="servico">Nome Servico</label><br />
          <input class="campos" type="text" id="servico" maxlength="30" name="servico" placeholder="Serviço" value="<?php echo $nome; ?>" required autofocus><br><br>

          <label for="descricao">Descrição</label><br />
          <input class="campos" type="text" id="descricao" maxlength="100" name="descricao" placeholder="Descrição" value="<?php echo $descricao; ?>" required><br><br>
         
          <label for="preco">Preço</label><br />
          <input class="campos" type="text" id="preco" maxlength="10" name="preco" placeholder="R$ 00,00" value="<?php echo $preco; ?>" required><br><br>
          
          <label for="tempomedio">Tempo Médio</label><br />
          <input class="campos" type="text" id="tempomedio" maxlength="10" name="tempomedio" placeholder="00h00" value="<?php echo $tempomedio; ?>" required><br><br>

        </fieldset>

        <br>
        <input type="submit" class="btn salvar" value="Salvar" onclick="return enviar()">
        <input type="reset" class="btn limpar" value="Limpar">

      </form>

    </section>



  </div>

</body>

</html>