<?php include('conexao.php');
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
    <title>Document</title>
</head>

<body>

    <?php include("topo.php"); ?>


    <?php
                $sql = $conn->prepare(" SELECT * from noticias where id='$id';
                  ");
                $sql->execute();
                while ($dados = $sql->fetch()) {
                ?>

    <div class="row">
        <h1 class="text-center"><?php echo $dados['titulo']?></h1>
    </div>
    <div class="container">
        <div class="text-center">
            <?php echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">'; ?>
        </div><br>
        <div>
            <p>
                <?php echo $dados['descricao']?>
            </p>
        </div>

    </div> <br>

    <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>
    <?php include("footer.php"); ?>
</footer>

</html>