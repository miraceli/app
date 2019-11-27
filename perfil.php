<?php
    include_once("conexao.php");

    $sql1 = "select * from salao";
    $consulta1 = mysqli_query($conexao, $sql1);
    $registros1 = mysqli_num_rows($consulta1);

    $sql2 = "select * from administrador";
    $consulta2 = mysqli_query($conexao, $sql2);
    $registros2 = mysqli_num_rows($consulta2);

    $conexao->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <script src="https://kit.fontawesome.com/57c22daf1a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LiLo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/app/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/profissionais.php">Profissionais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/servicos.php">Serviços</a>
                </li>
                <li class="nav-item dropdown right active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configurações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="#">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/app/cadastro_usuario.php">Cadastrar usuário</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container container-fluid mt-3">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="card col-4">
                <div class="card-body">
                    <strong>Dados do Salão</strong>
                    <form method="post" action="salvar_salao.php" name="form">

                        <div class="mt-2">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="consultar nome do salão!">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar nome do salao">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="CPF/CNPJ do salão">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar CPF/CNPJ do salao">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Endereço do salão">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar endereço do salão">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Telefone do salão">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar telefone do salão">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="E-mail do salão">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar e-mail do salão">
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary mb-2" value="Salvar">Salvar alterações</button>
                        </div>

                    </form>


                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-4">
                <div class="card-body">
                <strong>Dados do Administrador</strong>
                    <form method="post" action="salvar_adm.php" name="form">

                    <div class="mt-2">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="consultar nome do administrador!">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar nome do administrador">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="CPF/CNPJ do administrador">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar CPF/CNPJ do administrador">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Telefone do administrador">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar telefone do administrador">
                        </div>

                        <div>
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="E-mail do administrador">
                        </div>
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" id="inputPassword2" placeholder="Alterar e-mail do administrador">
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary mb-2" value="Salvar">Salvar alterações</button>
                        </div>

                    </form>


                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>