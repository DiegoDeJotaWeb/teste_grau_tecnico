<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();

if(isset($_GET['idUsuario'])  == true){
$idUsuario = $_GET['idUsuario'];
$sqlD = "DELETE FROM usuario WHERE idUsuario = {$idUsuario};";
echo $sqlD;
$con->query($sqlD);

header('Location: ../relatorioUsuarios.php');
}

if(isset($_GET['idCliente'])  == true){
    $idCliente = $_GET['idCliente']; 
    $sqlD = "DELETE FROM cliente WHERE idCliente = {$idCliente};";
    echo $sqlD;
    $con->query($sqlD);
    
    header('Location: ../relatorioCliente.php');
    }
