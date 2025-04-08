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


    <!-- Noticias para pc -->
    <div class="container">
        <div class="d-none d-sm-block">
            <div class="row">
                <div>
                    <h1 class="text-center titulosBorda">Notícias</h1>
                </div><br>
                <div class="col-12 mt-3">

                    <div class="row">
                        <div class="col-2">
                            <img src="https://antigo.pi.gov.br/wp-content/uploads/2023/02/colacao.jpg" class="img-fluid imgBorda">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Formados</h4>
                            </div>
                            <div class="text-center">
                                <p>Foto dos alunos formados no 3...</p>
                            </div>
                        </div>

                        <div class="col-2">
                            <img src="https://campoabertofm.com.br/upload/noticias/1726880676phpey1jfv.jpeg" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Incrições Abertas</h4>
                            </div>
                            <div class="text-center">
                                <p>Incrições Abertas no Colégio Ceep...</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="https://www.acheisudoeste.com.br/hd-imagens/noticias/6907-achei-sudoeste-manifestacao-alunos-ceep-em-brumado.webp" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Manisfetação</h4>
                            </div>
                            <div class="text-center">
                                <p>Manifestação de alunos da Escola Ceep após...</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-2">
                            <img src="https://cdn.arede.info/img/cover/530000/CEEP2_00538972_0_202409171204.jpg?xid=1844228" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Ceep Demolido</h4>
                            </div>
                            <div class="text-center">
                                <p>Demolição de Prédio da escola Ceep...</p>
                            </div>
                        </div>

                        <div class="col-2">
                            <img src="https://cdn.arede.info/img/cover/530000/CEEP2_00538972_0_202409171204.jpg?xid=1844228" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Ceep Demolido</h4>
                            </div>
                            <div class="text-center">
                                <p>Demolição de Prédio da escola Ceep...</p>
                            </div>
                        </div>

                        <div class="col-2">
                            <img src="https://cdn.arede.info/img/cover/530000/CEEP2_00538972_0_202409171204.jpg?xid=1844228" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                <h4 class="titulosBorda">Ceep Demolido</h4>
                            </div>
                            <div class="text-center">
                                <p>Demolição de Prédio da escola Ceep...</p>
                            </div>
                        </div>

                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Noticias para celular -->
       <div class="d-block d-sm-none">
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
                            <img src="https://antigo.pi.gov.br/wp-content/uploads/2023/02/colacao.jpg" class="img-fluid imgBorda " height="50px">
                        </div>
                        <div class="col-md-8 fundoResumoCursos">
                            <div class="text-center">
                                <p>Foto dos alunos formados no 3...</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center">
                            <h4 class="titulosBorda">Incrições Abertas</h4>
                        </div>
                        <div class="col-md-4">
                            <img src="https://campoabertofm.com.br/upload/noticias/1726880676phpey1jfv.jpeg" class="img-fluid imgBorda" height="50px">
                        </div>
                        <div class="col-md-8">

                            <div class="text-center">
                                <p>Incrições Abertas no Colégio Ceep...</p>
                            </div>
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