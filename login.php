<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Entrar</title>
    <link rel="stylesheet" href="_css/style_login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- https://bootsnipp.com/snippets/dldxB -->
  </head>

  <body>
    
  <div class="wrapper fadeInDown">
  <div id="formContent">



  <div class="fadeIn first">
      <img src="img\logopreta.png" id="icon" alt="logo" />
    </div>


    <form method="post" action="validacao.php">
      <input type="text" id="user" class="fadeIn second" name="user" placeholder="Usuário">
      <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" id="entrar" class="fadeIn fourth" value="Entrar">
    </form>


    <div id="formFooter">
      <a class="underlineHover" href="home.php">Voltar ao site</a>
    </div>

  </div>
</div>




  </body>
</html>