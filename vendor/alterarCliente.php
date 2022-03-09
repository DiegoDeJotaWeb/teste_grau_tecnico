<?php
include './conecta.php';
$con = PdoConexao::getInstancia();

$nomeCliente = $_GET['nomeCliente'];
$perfilCliente = $_GET['perfilCliente'];
$categoriaCliente = $_GET['categoriaCliente'];

$perfilUsuario = $_GET['perfilUsuario'];
$idUsuario = $_GET['idUsuario'];


$sqlA = "UPDATE cliente SET nomeUsuario = '{$nomeUsuario}', loginUsuario = '{$loginUsuario}',  senhaUsuario = '{$senhaUsuario}',perfilUsuario = '{$perfilUsuario}'  where idUsuario = {$idUsuario};";

$con->query($sqlA);

header('Location:../relatorioUsuarios.php');

?>