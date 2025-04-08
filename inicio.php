<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="geral.css">

</head>

<body>

  <header>
    <?php include("topo.php"); ?>
  </header>

  <div class="container">
    <div class="row mt-3">
      <div class="text-center">
        <h1 class="arredondado titulosBorda">CEEP</h1>
      </div>
    </div>

    <div class="row">
      <div id="carouselExampleFade" class="col-9 carousel slide carousel-fade rounded-circle" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/imgCeepCarousel1.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel2.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel3.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel4.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel5.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel6.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel7.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel8.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/imgCeepCarousel9.jpg" class="d-block w-100 imgBorda" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="col-3">
        <div class="row">
          <div>
            <img src="img/imgHorario.png" class="img-fluid imgBorda" alt="">
          </div>
        </div>
      </div>
    </div> <br>

    <div class="row">
      <div class="col-3">
        <a href="historico.php"><img src="img/imgHistorico.png" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-3">
        <a href="objetivos.php"><img src="img/imgObjetivos.png" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-3">
        <a href="leitoria.php"><img src="img/imgLeitoria.png" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-3">
        <a href="galeriaFotos.php"><img src="img/imgGaleriaDeFotos.png" class="img-fluid imgBorda" alt=""></a>
      </div>
    </div><br>
  </div>

  <!-- Botão Voltar ao Topo -->
  <button id="btnTopo" onclick="voltarAoTopo()" title="Voltar ao topo">Voltar ao Topo
    <i class="bi bi-arrow-up-circle"></i>
  </button>

  <!-- Script personalizado -->
  <script src="botoes.js"></script>

  <footer>
    <?php include("footer.php"); ?>
  </footer>


</body>

</html>