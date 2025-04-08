<!-- contato.php -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="geral.css" />
</head>

<body>
  <?php include("topo.php"); ?>

  <div class="container my-5">
    <h1 class="text-center mb-4">Fale Conosco</h1>

    <div class="row">
      <!-- Formulário -->
      <div class="col-md-6 mb-4">
        <form action="#" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required />
          </div>
          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem"
              required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
      </div>

      <!-- Mapa -->
      <div class="col-md-6">
        <div class="ratio ratio-4x3 shadow rounded">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.1198739497586!2d-52.4206859!3d-25.400797700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94efcb1205ab6b87%3A0x4c6769f192dbec61!2sCEEP%20Prof%C2%AA.%20Naiana%20Bavaresco%20Souza%20-%20Escola%20T%C3%A9cnica%20de%20Laranjeiras%20do%20Sul%20-%20PR!5e0!3m2!1spt-BR!2sbr!4v1741825452125!5m2!1spt-BR!2sbr"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
</body>

</html>
