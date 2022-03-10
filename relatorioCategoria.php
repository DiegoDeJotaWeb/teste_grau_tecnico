<?php 
session_start();
if(!isset($_SESSION["user_painel"])){   
    header('Location:login.php');
}



$home ="";$rCategoria =""?>
<?php
include './vendor/conecta.php';
$con = PdoConexao::getInstancia();

$sql = "SELECT * FROM categoria";
$buscarCategoria = $con->query($sql);
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/lib/fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Hello, world!</title>
</head>

<body>
  <?php include_once "menu.php" ?>

  <div class="container mt-4">
    <?php include_once "breadcrumb.php" ?>
    <h1>Relatorio de Clientes</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Categoria</th>
          <th scope="col" colspan="2">Menu</th>

        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $buscarCategoria->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<th scope="row">' . $row['idCategoria'] . '</th>';
          echo '<td>' . $row['nomeCategoria'] . '</td>';
         
         
          echo '<td class="text-center"><a href="formularioAlterarCategoria.php?nomeCategoria=' . $row['nomeCategoria'] . '&idCategoria=' . $row['idCategoria'] . ' "class="btn btn-success text-white"><i class="fas fa-edit  text-white "></i></a></td>';



          echo '<td class="text-center"><a href="./vendor/deletar.php?idCategoria='. $row['idCategoria'].'" class="btn btn-danger text-white" data-confirm="del"><i class="fas fa-trash  text-white "></i></a></td>';

          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
  <?php include_once "rodape.php" ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/modalConfDeletar.js"></script>

</body>

</html>