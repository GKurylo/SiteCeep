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
                <h1 class="titulosBorda">Edificações</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imgEdificacoes.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgEdificacoesCarousel1.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgEdificacoesCarousel2.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgEdificacoesCarousel3.jpg" class="d-block w-100 imgBorda" alt="...">
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
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O curso técnico em Edificações forma profissionais capacitados para atuar na construção civil, com foco em projetos, execução e fiscalização de obras de edificações. Durante a formação, os alunos aprendem sobre materiais de construção, projetos arquitetônicos e estruturais, orçamento e planejamento de obras, técnicas de segurança, normas regulamentadoras e uso de softwares específicos para a área. O curso também aborda conhecimentos em hidráulica, elétrica, e sustentabilidade nas construções. O técnico em Edificações está preparado para atuar como auxiliar de projetos, supervisor de obras e até mesmo em áreas relacionadas ao controle de qualidade e manutenção de edificações. Esse profissional pode trabalhar em empresas de construção, escritórios de projetos, órgãos públicos e privados, contribuindo para o desenvolvimento e a segurança das construções.</p>
            </div>
        </div>
    <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer>
    <?php include("footer.php"); ?>
</footer>

</html>