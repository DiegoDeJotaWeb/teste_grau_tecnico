
<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();

$nomeCategoria = $_GET["nomeCategoria"];

$sql = "INSERT INTO categoria (nomeCategoria)VALUES('{$nomeCategoria}')";
echo $sql;

$con->query($sql);


header('Location:../relatorioCategoria.php');