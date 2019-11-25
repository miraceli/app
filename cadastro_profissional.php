<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <title>Cadastro Profissional</title>
  <link rel="stylesheet" href="_css/style_pedidos.css" />

  <script type="text/javascript">

  function enviar(){
     var nome = form.nome.value;
     var email = form.email.value;
     var telefone = form.telefone.value;

     if(nome == ""){
       alert("Campo nome obrigatório!");
       form.nome.focus();
       return false;
     }

     if(email == ""){
       alert("Campo email obrigatório!");
       form.email.focus();
       return false;
     }

     if(telefone == ""){
       alert("Campo telefone obrigatório!");
       form.telefone.focus();
       return false;
     }

  }
  </script>


</head>

<body>
  <div class="container">

  <nav>
      <ul class="menu">
        <li><a href="cadastro_profissional.php">Cadastrar Profissional</a></li>
      </ul>
    </nav>

    <section>
      <h1>Profissional</h1><br><hr><br>

      <form method="post" action="salvar_profissional.php" name="form"> <!-- Mudar action -->
        <fieldset>
          <legend>Preencha todos os campos</legend>

          <label for="nome">Nome Profissional</label><br />
          <input class="campos" type="text" id="nome" maxlength="60" name="nome" placeholder="Nome Completo" required autofocus><br><br>

          <label for="email">E-mail</label><br />
          <input class="campos" type="text" id="email" maxlength="80" name="email" placeholder="E-mail" required><br><br>
         
          <label for="telefone">Telefone</label><br />
          <input class="campos" type="text" id="telefone" maxlength="15" name="telefone" placeholder="xxyyyyyyyyy" required><br><br>
          
    
        </fieldset>

        <br>
        <input type="submit" class="btn salvar" value="Salvar" onclick="return enviar()">
        <input type="reset" class="btn limpar" value="Limpar">

      </form>

    </section>



  </div>

</body>

</html>