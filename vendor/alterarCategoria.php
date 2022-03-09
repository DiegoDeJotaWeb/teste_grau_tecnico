<?php
include './conecta.php';
$con = PdoConexao::getInstancia();

$nomeCategoria = $_GET['nomeCategoria'];
$idCategoria = $_GET['idCategoria'];


$sqlA = "UPDATE categoria SET nomeCategoria = '{$nomeCategoria}'  where idCategoria = {$idCategoria};";
echo $sqlA;
$con->query($sqlA);

header('Location:../relatorioCategoria.php');

?>