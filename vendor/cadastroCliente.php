
<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();

$nomeCliente = $_GET["nomeCliente"];
$perfilCliente = $_GET["perfilCliente"];
$categoriaCliente = $_GET["categoriaCliente"];
// echo $idCliente;
// $idCategoria = $_GET["idCategoria"];

// $sqlS = 'select * from categoria';


$sql = "INSERT INTO cliente (nomeCliente, perfilCliente,idCategoria)VALUES('{$nomeCliente}', '{$perfilCliente}','{$categoriaCliente}')";
//echo $sql;

$con->query($sql);




header('Location:../relatorioCliente.php');