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
        <div class="row">
            <div class="text-center">
                <h1 class="titulosBorda">Administração</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imgAdm.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAdmCarousel1.JPG" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAdmCarousel2.JPG" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAdmCarousel3.JPG" class="d-block w-100 imgBorda" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-md-6 mt-2">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O curso técnico em Administração forma profissionais que podem atuar em diversas áreas empresariais, como gestão de recursos humanos, finanças, marketing e logística. Durante o curso, os alunos aprendem sobre organização e gestão de empresas, atendimento ao cliente, planejamento estratégico, contabilidade básica e comunicação empresarial. O técnico em Administração é essencial para auxiliar no funcionamento eficiente das organizações, contribuindo para a tomada de decisões, organização de processos administrativos e melhoria no desempenho das empresas em diversos setores.</p>
            </div>
        </div>
    <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


<footer><br>
    <?php include("footer.php"); ?>
</footer>

</html>