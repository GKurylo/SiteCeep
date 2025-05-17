<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>

    <?php require('app-menus.php') ?>

        <h1>Bem-vindo ao Painel</h1>
        <div class="container">

        <div class="row">
            <table class="table">
                <tr class="table-dark">
                    <th>ID:</th>
                    <th></th>
                    <th>CURSO:</th>
                    <th>TIPO:</th>
                    <th>OPÇÕES:</th>
                </tr>

                <?php
                $sql = $conn->prepare(" SELECT * from cursos where tipo = 0;
                  ");
                $sql->execute();
                while ($dados = $sql->fetch()) {
                ?>

                    <tr class="table-striped">
                        <td style="width: 50px;">
                            <?php echo $dados['id']; ?>
                        </td>
                        <td style="width: 150px;">
                            <?php  echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">'; ?>
                        </td>
                        <td>
                            <h4 class="text-home">
                                <?php echo $dados['nome']; ?>
                            </h4>
                        </td>
                        <td>
                            <p>teste</p>
                        </td>
                        <td>
                            <a href="noticias-editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="cursos-deletar.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                <?php } ?>

            </table>
        </div>

    </div>

    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>