<?php
    include_once("conexao.php");

    $sql = "select * from profissionais;";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    $conexao->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profissionais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/57c22daf1a.js" crossorigin="anonymous" async defer></script>
</head>
<body>
    <script>
        function confirmarRemocao(id){
            if ( confirm('Deseja realmente excluir este profissional?') ) {
                location.assign('/app/remover_profissional.php?id='+id);
            }
        }
    </script>
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
        <li class="nav-item active">
            <a class="nav-link" href="#">Profissionais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/app/servicos.php">Serviços</a>
        </li>
        <li class="nav-item dropdown right">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Configurações
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/app/perfil.php">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sair</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>

    <main class="container container-fluid mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <input class="btn btn-primary" type="button" value="Novo" onclick="javascript: location.href='cadastro_profissional.php';" />
                    </div>
                    <!-- <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Buscar por nome...">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary">Pesquisar</button>
                    </div> -->
                </div>
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Editar/Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($consulta)) {
                                echo '<tr>'
                                .'<td>'.$row['nome_profissional'].'</td>'
                                    .'<td>'.$row['email_profissional'].'</td>'
                                    .'<td>'.$row['telefone_profissional'].'</td>'
                                    .'<td>'
                                        .'<a title="Editar" href="/app/cadastro_profissional.php?id='.$row['id_profissional'].'"><i class="fas fa-pen"></i></a> '    
                                        .'<a title="Remover" href="#" onclick="confirmarRemocao('.$row['id_profissional'].')"><i class="fas fa-trash-alt"></i></a>'
                                    .'</td>'
                                .'<tr>';
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <td><?php echo $registros.' registro(s) encontrado(s)' ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>