<?php
include './conecta.php';
$con = PdoConexao::getInstancia();

$nomeCliente = $_GET['nomeCliente'];
echo $nomeCliente . '<br>';

$perfilCliente = $_GET['perfilCliente'];
echo $perfilCliente. '<br>';

$categoriaCliente = $_GET['categoriaCliente'];
echo $categoriaCliente. '<br>';

$idUsuario = $_GET['idCliente'];
echo $idUsuario. '<br>';

$sqlC = "select * from categoria where  idCategoria = '{$categoriaCliente}'";
echo $sqlC;
$con->query($sqlC);



// $perfilUsuario = $_GET['perfilUsuario'];


// $sqlA = "UPDATE cliente SET nomeUsuario = '{$nomeUsuario}', loginUsuario = '{$loginUsuario}',  senhaUsuario = '{$senhaUsuario}',perfilUsuario = '{$perfilUsuario}'  where idUsuario = {$idUsuario};";
// echo $sqlA;
// $con->query($sqlA);

header('Location:../relatorioUsuarios.php');

?>