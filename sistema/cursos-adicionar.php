<?php include('conexao.php');

$nome = $_POST["txtNome"];
$descricao = $_POST["txtDescricao"];
$imagem = $_POST["txtImagem"];
$tipo = $_POST["txtTipo"];
$status = $_POST["txtStatus"];

$sql=$conn->prepare("
    insert into cursos set nome='$nome',
                           descricao='$descricao',
                           imagem='$imagem',
                           tipo='$tipo',
                           status='$status'
");
$sql->execute();

header("location: adicionarCursos.php");

?>