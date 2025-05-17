<?php 
include('conexao.php');

$id = isset($_GET["id"]) ? $_GET["id"] : "";
 
if ($id) {
    $sql = $conn->prepare("
    select * from NOTICIAS where id='$id';
    ");

    $sql->execute();
    $dados = $sql->fetch();
}
?>;

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>

    <?php require('app-menus.php') ?>

    <h1>Adicione Sua Notícia!</h1>

    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="noticias-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3 ">
        <form action="noticias-acao.php" method="post" class="row">
            <input type="hidden" name="txtId" value="<?php if($id){
                                                         echo $dados['id'];
                                                     };?>">

            <div class="offset-2 col-8">
                <label for="titulo" class="form-label">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="txtTitulo" value="<?php if($id){
                                                                                                 echo $dados['titulo'];
                                                                                              };?>">
            </div>

            <div class="offset-2 col-8">
                <label for="subtitulo" class="form-label">Resumo:</label>
                <input type="text" class="form-control" id="resumo" name="txtResumo" value="<?php if($id){
                                                                                                 echo $dados['resumo'];
                                                                                              };?>">
            </div>

            <div class="offset-2 col-8">
                <label for="texto" class="form-label">Texto:</label>
                <input type="text" class="form-control" id="descricao" name="txtDescricao" value="<?php if($id){
                                                                                                 echo $dados['descricao'];
                                                                                              };?>">
            </div>

            <div class="offset-2 col-8">
                <label for="imagem" class="form-label">Imagem:</label>
                <input type="text" class="form-control" id="imagem" name="txtImagem" value="<?php if($id){
                                                                                                 echo $dados['imagem'];
                                                                                              };?>">
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
            </div> <br>
        </form>
    </div>

    <div class="container">

        <div class="row">
            <table class="table">
                <tr class="table-dark">
                    <th>ID:</th>
                    <th></th>
                    <th>NOTICIA:</th>
                    <th>CONTEUDO:</th>
                    <th>OPÇÕES:</th>
                </tr>

                <?php
                $sql = $conn->prepare(" SELECT * from noticias;
                  ");
                $sql->execute();
                while ($dados = $sql->fetch()) {
                ?>

                    <tr class="table-striped">
                        <td style="width: 50px;">
                            <?php echo $dados['id']; ?>
                        </td>
                        <td style="width: 150px;">
                            <?php echo '<img src="' . ($dados['imagem'] ?? '') . '" class="imgBorda" height="120px">'; ?>
                        </td>
                        <td>
                            <h4 class="text-home"><?php echo $dados['titulo']; ?></h4>
                        </td>
                        <td>
                            <p><?php echo $dados['resumo'] ?></p>
                        </td>
                        <td>
                            <a href="noticias-editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="noticias-deletar.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                <?php } ?>

            </table>
        </div>

    </div>

    <?php require('app-scripts.php') ?>
    <script> 
    $("#status").val("<?php echo $dados["status"];?>"); 
    </script>

</body>

</html>