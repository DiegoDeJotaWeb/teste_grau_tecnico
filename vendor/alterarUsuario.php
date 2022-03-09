<?php
include './conecta.php';
$con = PdoConexao::getInstancia();

$nomeUsuario = $_GET['nomeUsuario'];
$loginUsuario = $_GET['loginUsuario'];
$senhaUsuario = $_GET['senhaUsuario'];

$perfilUsuario = $_GET['perfilUsuario'];
$idUsuario = $_GET['idUsuario'];


$sqlA = "UPDATE usuario SET nomeUsuario = '{$nomeUsuario}', loginUsuario = '{$loginUsuario}',  senhaUsuario = '{$senhaUsuario}',perfilUsuario = '{$perfilUsuario}'  where idUsuario = {$idUsuario};";

$con->query($sqlA);

header('Location:../relatorioUsuarios.php');

?>