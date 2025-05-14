<?php include('conexao.php');

$titulo = $_POST["txtTitulo"]; 
$resumo = $_POST["txtResumo"];
$descricao = $_POST["txtDescricao"];
$imagem = $_POST["txtImagem"];
$status = $_POST["txtStatus"];

$sql=$conn->prepare("
    insert into noticias set titulo='$titulo',
                             resumo='$resumo',
                             descricao='$descricao',
                             imagem='$imagem',
                             status='$status'
");
$sql->execute();

header("location: adicionarNoticias.php");

?>