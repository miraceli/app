<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Cadastro Usuário</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />

  <script type="text/javascript">

  function enviar(){
     var user = form.user.value;
     var senha = form.senha.value;

     if(user == ""){
       alert("Campo usuário obrigatório!");
       form.user.focus();
       return false;
     }

     if(senha == ""){
       alert("Campo senha obrigatório!");
       form.senha.focus();
       return false;
     }

  }
  </script>


</head>

<body>
  <div class="container">
    <nav>
      <ul class="menu">
        <li><a href="index.php">Voltar ao site</a></li>
      </ul>
    </nav>

    <section>
      <h1>Usuários</h1><br><hr><br>

      <form method="post" action="salvar_usuario.php" name="form">
        <fieldset>
          <legend>Preencha todos os campos</legend>

          <label for="user">Usuário</label><br />
          <input class="campos" type="text" id="user" maxlength="20" name="user" placeholder="Usuário" required autofocus><br><br>

          <label for="senha">Senha</label><br />
          <input class="campos" type="text" id="senha" maxlength="8" name="senha" placeholder="Senha" required><br><br>

        </fieldset>

        <br>
        <input type="submit" class="btn salvar" value="Salvar" onclick="return enviar()">
        <input type="reset" class="btn limpar" value="Limpar">

      </form>

    </section>



  </div>

</body>

</html>