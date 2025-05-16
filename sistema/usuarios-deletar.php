<?php include('conexao-sistema.php');

$id=$_GET['id']; 

$sql=$conn->prepare("
delete from usuarios where id='$id';
");

$sql->execute();
header('location:usuarios-pesquisar.php');

?>