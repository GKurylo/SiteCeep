<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>

    <?php require('app-menus.php') ?>

    <h1>Adicione Sua Curso!</h1>

    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="cursos-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3 ">
        <form action="cursos-adicionar.php" method="post" class="row">
            <input type="hidden" name="txtId">

            <div class="offset-2 col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="txtNome">
            </div>

            <div class="offset-2 col-8">
                <label for="descricao" class="form-label">Descricao:</label>
                <input type="text" class="form-control" id="descricao" name="txtDescricao">
            </div>

            <div class="offset-2 col-8">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="text" class="form-control" id="imagem" name="txtImagem">
            </div>

            <div class="offset-2 col-8">
                <label for="tipo" class="form-label">Tipo:</label>
                <select type="text" class="form-control" id="tipo" name="txtTipo">
                    <option value="1" selected>Subsequente</option>
                    <option value="0">Integrado</option>
                </select>
            </div>

            <div class="offset-2 col-8">
                <label for="status" class="form-label">Status:</label>
                <select type="text" class="form-control" id="status" name="txtStatus">
                    <option value="1" selected>Ativo</option>
                    <option value="0">Bloqueado</option>
                </select>
            </div>

            <div class="col-12 text-center">
                <input value="Gravar" type="submit" class="btn btn-success mt-3">
            </div>
        </form>
    </div> <br> <hr>

    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2>Formulario de Cursos!</h2>
            </div>
        </div> <br>
        <div class="row">
            <div class="col-6 text-center"><a href="cursos-sub-pesquisar.php" class="btn btn-primary">Subsequentes</a></div>
            <div class="col-6 text-center"><a href="cursos-int-pesquisar.php" class="btn btn-primary">Integrados</a></div>
        </div>
    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>