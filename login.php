<?php

session_start();
$home = "";
$cCategoria = "";
include './vendor/conecta.php';
$con = PdoConexao::getInstancia();

if (isset($_POST['login'])) {
  $usuario = $_POST['login'];
  $senha = $_POST['senha'];

  $login = "select * from usuario where loginUsuario = '{$usuario}' and senhaUsuario = '{$senha}'";
  
  $acesso = $con->query($login);
  // $acesso->execut();
  $row = $acesso->fetch(PDO::FETCH_ASSOC);
  
  if (empty($row)) {
    $mensagem = "Login sem sucesso";
  } else {
    $_SESSION["user_painel"] = $row['idUsuario'];
    $_SESSION["user_perfil"] = $row['perfilUsuario'];
    $_SESSION["user_nome"] = $row['nomeUsuario'];
    header('Location:index.php');
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container  logo-login">

    <h2 class="text-center ">
      CRM
      <small class="text-muted">Força do Hábito</small>
    </h2>


  </div>
  <div class="container col-md-4 mt-5">
    <h2 class="text-center ">
      LOGIN
    </h2>
    <form action="./login.php" method="post">
      <div class="form-group">

        <input type="text" class="form-control" placeholder="Login" name="login">

      </div>
      <div class="form-group">

        <input type="text" class="form-control" placeholder="Senha" name="senha">

      </div>


      <div class="form-group text-center">
        <div class="row text-center">
          <button type="submit" class="btn btn-primary col-5 " style="margin-right: auto;margin-left: auto;width:100%">Entrar</button>

        </div>
      </div>

      <?php if (isset($mensagem)) {
        echo '<p class="text-center text-danger">Falha ao conectar</p>';
      } ?>
    </form>
  </div>

  <?php include_once "rodape.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>