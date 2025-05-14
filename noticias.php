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
        <div>
            <h1 class="text-center titulosBorda">Noticias</h1>
        </div><br>

        <!-- Noticias para pc -->
        <div class="d-none d-sm-block">
            <div class="row">
                <?php
                $sql = $conn->prepare(" SELECT * from noticias;
                  ");
                $sql->execute();
                while ($dados = $sql->fetch()) {
                ?>

                    <div class="col-6">
                        <div class="text-center">
                            <h4 class="titulosBorda"><?php echo $dados['titulo']; ?></h4>
                        </div>
                        <div class="row">
                            <div class="col-5"> <?php echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">'; ?> </div>
                            <div class="col-7">
                                <p><?php echo $dados['resumo'] ?></p>
                                <div>
                                    <a href="noticiaResumo1.php"><button class="btn btn-secondary">Ver Mais</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> <br>


        </div>


        <!-- Noticias para celular -->
        <div class="d-block d-sm-none">

            <div class="row">
                <?php
                $sql = $conn->prepare(" SELECT * from noticias;
                  ");
                $sql->execute();
                while ($dados = $sql->fetch()) {
                ?>
                    <div class="col-12 mt-3">

                        <div class="row">
                            <div class="text-center">
                                <h4 class="titulosBorda" class="titulosBorda"><?php echo $dados['titulo']; ?></h4>
                            </div>
                            <div class="col-md-4">
                                <?php echo '<img src="' . ($dados['imagem'] ?? '') . '" class="img-fluid imgBorda" height="50px">'; ?>
                            </div>
                            <div class="col-md-8 fundoResumoCursos">
                                <div class="text-center">
                                    <p><?php echo $dados['resumo'] ?></p>
                                    <a href="noticiaResumo1.php"><button class="btn btn-secondary">Ver Mais</button></a>
                                </div><br>
                            </div>
                        </div>
                        <hr>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <?php include("footer.php"); ?>
    </footer>


</body>

</html>