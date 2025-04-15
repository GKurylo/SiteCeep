<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="geral.css">
</head>

<body>
  <header>
    <?php include("topo.php") ?>
  </header>
  
    <div class="text-center">
    <h1 class="titulosBorda">Primeiro Dia de Aula</h1>
    </div>

    <div class="row">
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula.JPG" alt="" class="img-fluid">
        </a>
      </div>
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula2.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula2.JPG" alt="" class="img-fluid">
        </a>
      </div>
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula3.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula3.JPG" alt="" class="img-fluid">
        </a>
      </div>
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula4.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula4.JPG" alt="" class="img-fluid">
        </a>
      </div>
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula1.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula1.JPG" alt="" class="img-fluid">
        </a>
      </div>
      <div class="col-md-2">
        <a href="img/1DiaAula/img_1DiadeAula7.JPG" data-fancybox="imagem">
          <img src="img/1DiaAula/img_1DiadeAula7.JPG" alt="" class="img-fluid">
        </a>
      </div>
    </div>
  </div><br>

  <footer>
    <?php include("footer.php") ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script>
    Fancybox.bind("[data-fancybox='imagem']", {});
  </script>
</body>

</html>