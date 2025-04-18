<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ceep</title>
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
      <div id="carouselExampleFade" class="col-12 col-md-9 carousel slide carousel-fade rounded-circle" data-bs-ride="carousel">
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

      <div class="col-12 col-md-3">
        <div class="row p-3 p-sm-0">
          <div>
            <img src="img/imgHorario.jpg" class="img-fluid imgBorda" alt="">
          </div>
        </div><br>
        <div class="row">
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d450.5148412411197!2d-52.420643!3d-25.400836!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94efcb1205ab6b87%3A0x4c6769f192dbec61!2sCEEP%20Prof%C2%AA.%20Naiana%20Bavaresco%20Souza%20-%20Escola%20T%C3%A9cnica%20de%20Laranjeiras%20do%20Sul%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1744325633500!5m2!1spt-BR!2sbr"
              width="100%"     class="mapaCelular" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
        </div>
      </div>
    </div> 

    <div class="row">
      <div class="col-md-3 col-6 mt-3">
        <a href="historico.php"><img src="img/imgHistorico.jpg" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-md-3 col-6 mt-3">
        <a href="objetivos.php"><img src="img/imgObjetivos.jpg" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-md-3 col-6 mt-3">
        <a href="reitoria.php"><img src="img/imgReitoria.jpg" class="img-fluid imgBorda" alt=""></a>
      </div>
      <div class="col-md-3 col-6 mt-3">
        <a href="galeriaFotos.php"><img src="img/imgGaleriaDeFotos.jpg" class="img-fluid imgBorda" alt=""></a>
      </div>
    </div><br>
  </div>

  <footer>
    <?php include("footer.php"); ?>
  </footer>


</body>

</html>