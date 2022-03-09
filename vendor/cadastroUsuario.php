
<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();

$nomeUsuario = $_GET["nomeUsuario"];
$loginUsuario = $_GET["loginUsuario"];
$senhaUsuario = $_GET["senhaUsuario"];
$perfilUsuario = $_GET["perfilUsuario"];

$sql = "INSERT INTO usuario (nomeUsuario, loginUsuario,senhaUsuario, perfilUsuario)VALUES('{$nomeUsuario}', '{$loginUsuario}','{$senhaUsuario}','{$perfilUsuario}')";
echo $sql;
$con->query($sql);


header('Location:../relatorioUsuarios.php');