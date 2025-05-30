<?php include("conexao-sistema.php");

    $email = $_POST["txtEmail"];
    $senha = $_POST["txtSenha"];


    $sql = $conn->prepare("
    SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'
    ");
    $sql->execute();

    if($sql->rowCount() > 0) {
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['whatsapp'] = $dados['whatsapp'];

        header("location: index_sistema.php");

    } else {

        header("location: login.php");
    }
?>
