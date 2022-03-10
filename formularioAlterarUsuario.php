<?php
 session_start();
 if(!isset($_SESSION["user_painel"])  ){   
     header('Location:login.php');
 }

 if($_SESSION["user_perfil"] == "v"){
  header('Location:index.php');
 }

 $home ="";$rAUsuario ="";

?>

<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Formulario para alterar usuário</title>
</head>

<body>
  <?php include_once "menu.php" ?>
  <div class="container">

    <div class="col-12 mt-4 mb-4">
      <?php include_once "breadcrumb.php" ?>


      <?php
      $nomeUsuario = $_GET['nomeUsuario'];
      $loginUsuario = $_GET['loginUsuario'];
      $senhaUsuario = $_GET['senhaUsuario'];
      $perfilUsuario = $_GET['perfilUsuario'];
      $idUsuario = $_GET['idUsuario'];


      ?>
      <h1>Cadastro de usuário</h1>
      <form action="./vendor/alterarUsuario.php" method="$_GET">
        <div class="form-group">
          <label for="nomeUsuario">Nome completo</label>
          <input type="text" class="form-control" id="nomeUsuario" placeholder="Digite o nome completo do usuário" value="<?php echo $nomeUsuario ?>" name="nomeUsuario">
        </div>
        <div class="form-group">
          <label for="loginUsuario">Login</label>
          <input type="text" class="form-control" id="loginUsuario" placeholder="Digite o login do usuário" name="loginUsuario" value="<?php echo $loginUsuario ?>">
        </div>
        <div class="form-group">
          <label for="senhaUsuario">Senha</label>
          <input type="text" class="form-control" id="senhaUsuario" placeholder="Digite a senha do usuário" name="senhaUsuario" value="<?php echo $senhaUsuario ?>">
          <input type="hidden" name="idUsuario" value="<?php echo $idUsuario ?>">
        </div>

        <div class="form-group">
          <label for="perfilUsuario">Perfil</label>
          <select class="form-control" id="perfilUsuario" name="perfilUsuario">
            <option>...</option>
            <?php
            if ($perfilUsuario == 'v') {
              echo  '<option value="v" selected>Visualizador</option>';
              echo  '<option value="a">Administrador</option>';
            } elseif ($perfilUsuario == 'a') {
              echo  '<option value="v" >Visualizador</option>';
              echo  '<option value="a" selected>Administrador</option>';
            }
            ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Alterar Registro</button>
      </form>
    </div>
  </div>
  <?php include_once "rodape.php" ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>