<?php include('conexao-sistema.php');

$id = $_POST["txtId"];
$nome = $_POST["txtNome"]; 
$status = $_POST["txtStatus"];

if(!$id){
    //inserir
    $sql=$conn->prepare("
    insert into locais set nome='$nome',
                           status='$status'
    ");
    $sql->execute();
}else{
    //atualizar
    $sql=$conn->prepare("
    update locais set nome='$nome',
                      status='$status' where id='$id'
    ");
    $sql->execute();
}
header("location:locais-pesquisar.php");

?>

    