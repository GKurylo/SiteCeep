<?php include('conexao.php');

$id = $_POST["txtId"];
$nome = $_POST["txtNome"];
$descricao = $_POST["txtDescricao"];
$imagem = $_POST["txtImagem"];
$tipo = $_POST["txtTipo"];
$status = $_POST["txtStatus"];


if(!$id){
$sql=$conn->prepare("
    insert into cursos set nome='$nome',
                           descricao='$descricao',
                           imagem='$imagem',
                           tipo='$tipo',
                           status='$status'
 ");
    $sql->execute();
}else{
    //atualizar
    $sql=$conn->prepare("
    update cursos set nome='$nome',
                           descricao='$descricao',
                           imagem='$imagem',
                           tipo='$tipo',
                           status='$status' where id='$id'
  ");
$sql->execute();
}

header("location: cursos-cadastro.php");

?>