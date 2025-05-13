<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>

    <?php require('app-menus.php') ?>

    <h1>Formulário de Usuários</h1>

    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="usuarios-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3 ">
        <form action="noticia-adicionar.php" method="post" class="row">
            <input type="hidden" name="txtId">

            <div class="offset-2 col-8">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="txtTitulo">
            </div>

            <div class="offset-2 col-8">
                <label for="subtitulo" class="form-label">Resumo:</label>
                <input type="text" class="form-control" id="resumo" name="txtResumo">
            </div>

            <div class="offset-2 col-8">
                <label for="texto" class="form-label">Texto:</label>
                <input type="text" class="form-control" id="descricao" name="txtDescricao">
            </div>

            <div class="offset-2 col-8">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="text" class="form-control" id="imagem" name="txtImagem">
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
    </div>

    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>