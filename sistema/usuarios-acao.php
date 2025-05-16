<?php include('conexao-sistema.php');

$id = $_POST["txtId"];
$nome = $_POST["txtNome"]; 
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$whatsapp = $_POST["txtWhatsapp"];
$cargo = $_POST["txtCargo"];
$status = $_POST["txtStatus"];

if(!$id){
    //inserir
    $sql=$conn->prepare("
    insert into usuarios set nome='$nome',
                             email='$email',
                             senha='$senha',
                             telefone='$whatsapp',
                             status='$status',
                             cargo='$cargo'
    ");
    $sql->execute();
}else{
    //atualizar
    $sql=$conn->prepare("
    update usuarios set nome='$nome',
                        email='$email',
                        senha='$senha',
                        telefone='$whatsapp',
                        status='$status',
                        cargo='$cargo' where id='$id'
    ");
    $sql->execute();
}
header("location:usuarios-pesquisar.php");

?>

    