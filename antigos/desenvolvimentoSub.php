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
                <h1 class="titulosBorda">Desenvolvimento De Sistemas</h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/imgDev.jpg" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgDevCarousel1.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgDevCarousel2.jpg" class="d-block w-100 imgBorda" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/imgDevCarousel3.jpg" class="d-block w-100 imgBorda" alt="...">
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
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Um curso de Desenvolvimento de Sistemas visa capacitar os alunos para projetar, desenvolver e manter sistemas de software eficientes e inovadores. O conteúdo do curso abrange diversas áreas, como programação, análise de sistemas, bancos de dados, engenharia de software, além de boas práticas de desenvolvimento e testes. Os estudantes aprendem a trabalhar com diferentes linguagens de programação, ferramentas de desenvolvimento e metodologias ágeis, além de terem a oportunidade de desenvolver projetos práticos, preparando-os para atuar no mercado de tecnologia em empresas de diversos setores. O curso também explora temas como segurança da informação, interfaces de usuário e integração de sistemas.</p>
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