<?php 
 session_start();
 if(!isset($_SESSION["user_painel"])  ){   
     header('Location:login.php');
 }

 if($_SESSION["user_perfil"] == "v"){
  header('Location:index.php');
 }

$home ="";$cCliente =""?>
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
  <?php include_once "menu.php" ?>
  <div class="container">

    <div class="col-12 mt-4">
      <?php include_once "breadcrumb.php" ?>

      <h1>Cadastro de cliente</h1>
      <form action="./vendor/cadastroCliente.php" method="GET">
        <div class="form-group">
          <label for="nomeCliente">Nome do cliente</label>
          <input type="text" class="form-control" id="nomeCliente" placeholder="Digite o nome completo do cliente" name="nomeCliente">
        </div>
        <div class="form-group">
          <label for="perfilCliente">Perfil</label>
          <select class="form-control" id="perfilCliente" name="perfilCliente">
            <option>...</option>
            <option>Cliente</option>
          </select>
        </div>
        <div class="form-group">
          <label for="categoriaCliente">Categoria</label>
          <select class="form-control" id="categoriaCliente" name="categoriaCliente">
          
          <?php
            include './vendor/conecta.php';
            $con = PdoConexao::getInstancia();

            $sql = "SELECT * FROM categoria";
            
            $buscarCategoria = $con->query($sql);

            while ($row = $buscarCategoria->fetch(PDO::FETCH_ASSOC)) {

              echo '<option value="' . $row['idCategoria'] . '">' . $row['nomeCategoria']. '</option>';
            }
            ?>

          </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Salvar Registro</button>
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