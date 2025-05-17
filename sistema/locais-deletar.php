<?php include('conexao-sistema.php');

$id=$_GET['id']; 

$sql=$conn->prepare("
delete from locais where id='$id';
");

$sql->execute();
header('location:locais-pesquisar.php');

?>