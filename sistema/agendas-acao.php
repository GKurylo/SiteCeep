<?php include('conexao-sistema.php');

$id = $_POST["txtId"];
$local = $_POST["txtLocal"]; 
$data_inicio = $_POST["txtData-inicio"];
$data_final = $_POST["txtData-final"];
$observacao = $_POST["txtObservacao"];

if(!$id){
    //inserir
    $sql=$conn->prepare("
    insert into agendas set local_id='$local',
                            data_inicio='$data_inicio',
                            data_fim='$data_final',
                            observacao='$observacao'
    ");
    $sql->execute();
}else{
    //atualizar
    $sql=$conn->prepare("
    update agendas set local_id='$local',
                      data_inicio='$data_inicio',
                      data_fim='$data_final',
                      observacao='$observacao' where id='$id'
    ");
    $sql->execute();
}
header("location:agendas-cadastro.php");

?>

    