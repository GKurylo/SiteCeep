<?php
include('conexao-sistema.php');

$id = isset($_GET["id"]) ? $_GET["id"] : "";
 
if ($id) {
    $sql = $conn->prepare("
    select * from USUARIOS where id='$id';
    ");

    $sql->execute();
    $dados = $sql->fetch();
}
?>

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

    <div class="row mt-3">
        <form action="usuarios-acao.php" method="post" class="row">
            <input type="hidden" name="txtId" value="<?php if($id){
                                                         echo $dados['id'];
                                                     };?>">
                                                     
            <div class="col-12 col-md-4">
                <label for="nome" class="form-label">NOME</label>
                <input type="text" class="form-control" id="nome" name="txtNome" value="<?php if($id){
                                                                                           echo $dados['nome'];
                                                                                        };?>">
            </div>

            <div class="col-12 col-md-4">
                <label for="email" class="form-label">EMAIL</label>
                <input type="text" class="form-control" id="email" name="txtEmail" value="<?php if($id){
                                                                                             echo $dados['email'];
                                                                                          };?>">
            </div>

            <div class="col-12 col-md-4">
                <label for="senha" class="form-label">SENHA</label>
                <input type="password" class="form-control" id="senha" name="txtSenha" value="<?php if($id){
                                                                                                 echo $dados['senha'];
                                                                                              };?>">
            </div>

            <div class="col-12 col-md-4">
                <label for="whatsapp" class="form-label">WHATSAPP</label>
                <input type="text" class="form-control" id="whatsapp" name="txtWhatsapp" value="<?php if($id){
                                                                                                   echo $dados['telefone'];
                                                                                                };?>">
            </div>

            <div class="col-12 col-md-4">
                <label for="status" class="form-label">CARGO</label>
                <select type="text" class="form-control" id="cargo" name="txtCargo">
                    <option value="1" selected>Admin</option>
                    <option value="0">Professor</option>
                </select>
            </div>

            <div class="col-12 col-md-4">
                <label for="status" class="form-label">STATUS</label>
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
    <script> 
    $("#status").val("<?php echo $dados["status"];?>"); 
    $("#cargo").val("<?php echo $dados["cargo"];?>");
    </script>

</body>

</html>