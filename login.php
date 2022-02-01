<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="stylesheet" href=" style.css">

  <title>Login com Bootstrap</title>
</head>

<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
  <div class="container col-sm-8">
    <form action="logar.php" method="POST" class="align-items-center">
      <div class="mb-4">
        <h3>Acessar</h3>
        <p>Digite as informações a seguir para entrar no sistema.</p>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>

      </div>
      <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" required>
      </div class>

      <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between">
        <a class="btn btn-link" style="padding: 0; margin: 0;" href="cadastro.php">Cadastrar</a>
        <a class="btn btn-link" href="index.html">Página da Web</a>
        <button style="width: 150px;" class="btn btn-success" type="submit">Entrar</button>

      </div>
    </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>