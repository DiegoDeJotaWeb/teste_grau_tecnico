<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();

$sql = "SELECT COUNT(*) FROM clientes";
    $acesso = $con->query($sql);
    $count = $acesso->fetchColumn();
    
   
  print $count;
$json_str = '{"gratis":38,"normal":35,"premio":26}';

//transforma a string em um array associativo
$json_arr = json_decode($json_str, true);

//exibe o array associativo
var_dump($json_arr);
