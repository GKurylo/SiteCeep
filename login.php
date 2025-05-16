<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>

<!-- Login para PC -->
  <div class="row loginPc d-none d-sm-block">
    <div class="row offset-1 col-10 mt-3">
      <label for="usuario" class="form-label">USUÁRIO:</label>
      <input type="text" class="form-control" id="usuario" name="txtUsuario">
    </div>

    <div class="row offset-1 col-10 mt-3">
      <label for="senha" class="form-label">SENHA:</label>
      <input type="password" class="form-control" id="senha" name="txtSenha">
    </div>

    <div class="mt-3 text-center">
      <a href="sistema/index_sistema.php"><input value="Gravar" type="submit" class="btn btn-success col-8 mt-3"></a>
    </div>
  </div>

  <!-- Login para celular -->
  <div class="loginCelular d-block d-sm-none">
    <div class="row offset-1 col-10 mt-3">
      <label for="usuario" class="form-label">USUÁRIO:</label>
      <input type="text" class="form-control" id="usuario" name="txtUsuario">
    </div>

    <div class="row offset-1 col-10 mt-3">
      <label for="senha" class="form-label">SENHA:</label>
      <input type="password" class="form-control" id="senha" name="txtSenha">
    </div>

    <div class="mt-3 text-center">
      <a href="sistema/index_sistema.php"><input value="Gravar" type="submit" class="btn btn-success col-8 mt-3"></a>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>