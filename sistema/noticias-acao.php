<?php include('conexao.php');

$id = $_POST["txtId"];
$titulo = $_POST["txtTitulo"]; 
$resumo = $_POST["txtResumo"];
$descricao = $_POST["txtDescricao"];
$imagem = $_POST["txtImagem"];
$status = $_POST["txtStatus"];

if(!$id){
    //inserir
    $sql=$conn->prepare("
    insert into noticias set titulo='$titulo',
                             resumo='$resumo',
                             descricao='$descricao',
                             imagem='$imagem',
                             status='$status'           
    ");
    $sql->execute();
}else{
    //atualizar
    $sql=$conn->prepare("
    update noticias set titulo='$titulo',
                        resumo='$resumo',
                        descricao='$descricao',
                        imagem='$imagem',
                        status='$status' where id='$id'
    ");
    $sql->execute();
}
header("location: noticias-cadastro.php");

?>