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

    <div class="container">

        <?php

        $sql = $conn->prepare("SELECT * from cursos where id='$id';");
        $sql->execute();
        while ($dados = $sql->fetch()) {
        ?>

            <div class="row">
                <div class="text-center">
                    <h1 class="titulosBorda"> <?php echo $dados['nome']; ?>
                    </h1>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div>
                            <?php 
                                echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">';
                            ?>
                        </div>
                        
                    </div>

                </div>
                <div class="col-md-6 mt-2">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $dados['descricao'] ?></p>
                </div>
            </div> <?php } ?>
        <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>
    <?php include("footer.php"); ?>
</footer>

</html>