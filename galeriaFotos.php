<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de fotos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="geral.css">
</head>

<body>
    <header>
        <?php include("topo.php") ?>
    </header>

    <div class="container">
        <div class="text-center">
            <h1 class="titulosBorda">Galeria de Fotos</h1>
        </div>

        <div class="row">
            <div class="col-md-3 text-center">
                <a href="PrimeiroDia.php">
                    <img src="img/imgCapaPrimeiroDiaAula.jpg" alt="" class="img-fluid imgBorda">
                </a>    
                    <h5>Primeiro dia de aula</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="Oficinas.php">
                <img src="img/imgOficinas.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Oficinas</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="DiadaMulher.php">
                <img src="img/imgDiaDaMulher.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Dia da mulher</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="Drone.php">    
                <img src="img/imgDrone.jpg" alt="" class="img-fluid imgBorda">
                </a>   
                <h5>Drone</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="JusticaTrabalho.php">
                <img src="img/imgAntonioJusticaDoTrabalho.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Antonio justiça do trabalho</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="Eleitoral.php">
                <img src="img/imgEleitoral.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Eleitoral</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="Dengue.php">
                <img src="img/imgDengue.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Dengue</h5>
            </div>

            <div class="col-md-3 text-center">
                <a href="ConexaoCeep.php">
                <img src="img/imgConexaoCeepEmpregabilidade.jpg" alt="" class="img-fluid imgBorda">
                </a>
                <h5>Conexão Ceep Empregabilidade</h5>
            </div>
        </div>
    </div> <br>


    <footer>
        <?php include("footer.php") ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>