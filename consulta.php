<?php

include_once("conexao.php");




$pesquisar = isset($_GET['pesquisar'])?$_GET['pesquisar']:"";

$sql = "select * from pedidos where id like '%$pesquisar%' order by id";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Consulta de Pedidos</title>
  <link rel="stylesheet" href="_css/style_consulta.css" />
</head>

<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li><a href="pedidos.php">Cadastro de Pedidos</a></li>
        <li><a href="consulta.php">Consulta</a></li>
        <li><a href="sair.php">Sair</a></li>
      </ul>
    </nav>

    <section>
      <h1>Consulta</h1><br><hr><br>

      <form method="get" action="">
        
        Filtrar por pedido: <input type="text" name="pesquisar" placeholder="Digite um pedido" class="campos" required autofocus>
        <input type="submit" value="Pesquisar" class="btn pesquisar">

      </form>

      <?php

      if($pesquisar != null){

      print "Resultado da pesquisa para o pedido <strong>$pesquisar</strong>.<br><br>";

      }

      print "<br>$registros registros encontrados.";
      print "<br><br>";

      while($exibirRegistros = mysqli_fetch_array($consulta)){
        
        $qtd_itens = $exibirRegistros[1];
        $produtos = $exibirRegistros[2];
        $valor_total = $exibirRegistros[3];

        print "<article>";

        print "Quantidade de itens: $qtd_itens<br>";
        print "Produtos: $produtos<br>";
        print "Valor total: $valor_total";

        print "</article>";
      }
    

      mysqli_close($conexao);

      ?>


    </section>



  </div>

</body>

</html>