<?php include('conexao.php') ?>;

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
</head>

<body id="topo">

    <?php
    include("topo.php");
    ?>
<div class="container">
<div class="row">
    <div class="text-center mb-3 "><h1 class="titulosBorda">Cursos Integrados</h1></div>
</div>
<div class="row">
            <?php
            $sql = $conn->prepare(" SELECT * from cursos where tipo='0';
                  ");
            $sql->execute();
            while ($dados = $sql->fetch()) {
            ?>
                <div class="col-6">
                    <a href="cursosExpandido.php?id=<?php echo $dados['id'] ?>">
                        <div>
                            <h2 class="text-center titulosBorda">
                                <?php 
                                    echo $dados['nome'];
                                 ?>
                            </h2>
                        </div>
                        <div>
                            <?php 
                                echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">';
                             ?>
                        </div>
                    </a>
                </div> 
            <?php } ?>
        </div><br>
</div>

    <footer>
        <?php include("footer.php"); ?>
    </footer>


</body>

</html>