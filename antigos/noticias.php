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
                <div class="col-6">
                    <div class="text-center">
                        <h4 class="titulosBorda" class="titulosBorda">Formados</h4>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <img src="img/noticia1.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-7">
                            <p>A formatura dos alunos dos cursos técnicos foi marcada por emoção e celebração, simbolizando o fim de uma etapa e o início de novas oportunidades profissionais.</p>
                            <div>
                                <a href="noticiaResumo1.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-6">
                    <div class="text-center">
                        <h4 class="titulosBorda" class="titulosBorda">Inscrições Abertas</h4>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <img src="img/noticia2.png" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-7">
                            <p>As matrículas para os cursos técnicos estão abertas, oferecendo novas oportunidades para quem deseja iniciar ou aprimorar sua carreira profissional em diversas áreas.</p>
                            <a href="noticiaResumo2.php"><button class="btn btn-secondary">Ver Mais</button></a>
                        </div>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-6">
                    <div class="text-center">
                        <h4 class="titulosBorda" class="titulosBorda">Jogos Escolares</h4>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <img src="img/noticia3.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-7">
                            <p>Os Jogos Escolares estão com inscrições abertas, oferecendo aos estudantes a oportunidade de competir em diversas modalidades esportivas e representar suas escolas.</p>
                            <div>
                                <a href="noticiaResumo3.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-6">
                    <div class="text-center">
                        <h4 class="titulosBorda" class="titulosBorda">Novas Carteiras</h4>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <img src="img/noticia4.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-7">
                            <p>As novas carteiras estudantis estão disponíveis, oferecendo benefícios exclusivos para os estudantes em transporte, eventos culturais e descontos em diversos estabelecimentos.</p>
                            <a href="noticiaResumo4.php"><button class="btn btn-secondary">Ver Mais</button></a>
                        </div>
                    </div>
                </div>
            </div> <br><br><br>

        </div>


        <!-- Noticias para celular -->
        <div class="d-block d-sm-none">


            <div class="row">

                <div class="col-12 mt-3">

                    <div class="row">
                        <div class="text-center">
                            <h4 class="titulosBorda" class="titulosBorda">formados</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="img/noticia1.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-md-8 fundoResumoCursos">
                            <div class="text-center">
                                <p>A formatura dos alunos dos cursos técnicos foi marcada...</p>
                                <a href="noticiaResumo1.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <h4 class="titulosBorda">Incrições Abertas</h4>

                        </div>
                        <div class="col-md-4">
                            <img src="img/noticia2.png" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-md-8">

                            <div class="text-center">
                                <p>As matrículas para os cursos técnicos estão abertas...</p>
                                <a href="noticiaResumo2.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div><br>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div>
                    <h1 class="text-center titulosBorda">Noticias</h1>
                </div><br>
                <div class="col-12 mt-3">

                    <div class="row">
                        <div class="text-center">
                            <h4 class="titulosBorda" class="titulosBorda">formados</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="img/noticia3.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-md-8 fundoResumoCursos">
                            <div class="text-center">
                                <p>Os Jogos Escolares estão com inscrições abertas...</p>
                                <a href="noticiaResumo3.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <h4 class="titulosBorda">Incrições Abertas</h4>

                        </div>
                        <div class="col-md-4">
                            <img src="img/noticia4.jpg" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-md-8">

                            <div class="text-center">
                                <p>As novas carteiras estudantis estão disponíveis...</p>
                                <a href="noticiaResumo4.php"><button class="btn btn-secondary">Ver Mais</button></a>
                            </div><br>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include("footer.php"); ?>
    </footer>


</body>

</html>