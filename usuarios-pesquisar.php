<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>

    <?php require('app-menus.php') ?>

    <h1>Listagem de Usuários</h1>
    <p>Verifique todos que tem acesso ao sistema</p>
    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="usuarios-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3">
        <table class="table">
            <tr class="table-dark">
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>WHATSAPP</th>
                <th>OPÇÕES</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Gabriel Kurylo</td>
                <td>teste1@teste1@gmail.com</td>
                <td>(42) 4002-8922</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Miguel</td>
                <td>teste2@teste2@gmail.com</td>
                <td>(42) 1234-4321</td>
                <td></td>
            </tr>

        </table>
    </div>

    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>