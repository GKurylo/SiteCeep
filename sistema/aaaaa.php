<?php include('conexao-sistema.php');

$id = isset($_GET["id"]) ? $_GET["id"] : "";
 
if ($id) {
    $sql = $conn->prepare("
    select * from AGENDAS where id='$id';
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

        <h1>Agendamentos</h1>
        <h2><?php echo $dados['id']; ?></h2>
        <div class="row mt-3">
        <form action="agendas-acao.php" method="post" class="row">
            <input type="hidden" name="txtId" class="form-control">
              
            <div class="col-12 col-md-4">
                <label class="form-label">LOCAL:</label>
                 
                <select type="text" class="form-control" id="local" name="txtLocal">
                    <option value="0">selecione</option>
 
                <?php
                   $sqlLocal=$conn->prepare("select * from LOCAIS where status=1");
                   $sqlLocal->execute();
                   while($dadosLocal=$sqlLocal->fetch()){ 
                ?>
                   <option value="<?php echo $dadosLocal['id']; ?>"><?php echo $dadosLocal['nome']; ?></option>

                <?php } ?>
                </select>
            </div>

            <div class="col-12 col-md-4">
                <label class="form-label">DATA INICIO</label>
                <input type="datetime-local" class="form-control" id="data_incio" name="txtData-inicio" value="<?php if($id){
                                                                                                                  echo $dados['data_inicio'];
                                                                                                               };?>">
            </div>

            <div class="col-12 col-md-4">
                <label class="form-label">DATA FINAL</label>
                <input type="datetime-local" class="form-control" id="data_final" name="txtData-final" value="<?php if($id){
                                                                                                                  echo $dados['data_fim'];
                                                                                                               };?>">
            </div>

            <div class="col-12">
                <label class="form-label">OBSERVAÇÃO</label>
                <textarea class="form-control" id="observacao" name="txtObservacao" rows="15"><?php if($id){echo $dados['observacao'];
     };?></textarea>
            </div>

            <div class="col-12 text-center">
                <input value="Gravar" type="submit" class="btn btn-success mt-3">
            </div>
        </form>
    </div>

    </div>

    <?php require('app-scripts.php') ?>
    <script> 
    $("#local").val("<?php echo $dados["local_id"];?>");
    </script>

</body>

</html>