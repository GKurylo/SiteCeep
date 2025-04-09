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
                <h1 class="titulosBorda">Agronegócio</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imgAgronegocios.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAgronegociosCarousel1.JPG" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAgronegociosCarousel2.JPG" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgAgronegociosCarousel3.JPG" class="d-block w-100 imgBorda" alt="...">
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
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O curso técnico em Agronegócios prepara profissionais para atuar na gestão e administração do setor agropecuário, abrangendo desde a produção até a comercialização de produtos agrícolas. Os alunos aprendem sobre logística, marketing, finanças, comércio exterior, sustentabilidade e inovação no setor agroindustrial. O técnico em Agronegócios é capacitado para otimizar processos de produção, gestão de equipes e implementar estratégias de negócios no setor agropecuário, contribuindo para o desenvolvimento e crescimento do agronegócio nacional e internacional.</p>
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