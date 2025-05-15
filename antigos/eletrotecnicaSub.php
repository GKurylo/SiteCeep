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
                <h1 class="titulosBorda">Eletrotécnica</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imgEletrotecnica.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgEletrotecnicaCarousel1.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgEletrotecnicaCarousel2.jpg" class="d-block w-100 imgBorda" alt="...">
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
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O curso técnico em Eletrotécnica capacita os alunos a atuar no desenvolvimento, instalação, manutenção e operação de sistemas elétricos e eletrônicos. Durante a formação, os estudantes aprendem sobre circuitos elétricos, máquinas e equipamentos, automação, controle de sistemas elétricos, instalações industriais e prediais, além de segurança elétrica e normas técnicas. O curso combina teoria e prática, preparando os alunos para atuar em áreas como geração, transmissão e distribuição de energia elétrica, além de automação industrial e manutenção de sistemas elétricos. O técnico em Eletrotécnica pode trabalhar em indústrias, empresas de energia, construtoras, ou prestar serviços de manutenção e consultoria. O profissional dessa área é essencial para garantir a eficiência, segurança e funcionamento adequado dos sistemas elétricos em diversos setores.</p>
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