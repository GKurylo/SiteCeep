<?php include('conexao-sistema.php');

$id=$_GET['id']; 

$sql=$conn->prepare("
delete from agendas where id='$id';
");

$sql->execute();
header('location:agendas-pesquisar.php');

?>