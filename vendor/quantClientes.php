<?php
include 'conecta.php';
$con = PdoConexao::getInstancia();


    $sql = 'SELECT count(nomeCategoria)
    FROM  categoria AS CT
    JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 1';

    $acesso = $con->query($sql);
    $countGratis = $acesso->fetchColumn();
    
    // echo $countGratis;

    $sql = 'SELECT count(nomeCategoria)
    FROM  categoria AS CT
    JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 2';

    $acesso = $con->query($sql);
    $countNormal = $acesso->fetchColumn();
    
    // echo $countNormal;

    $sql = 'SELECT count(nomeCategoria)
    FROM  categoria AS CT
    JOIN cliente AS C ON CT.idCategoria = C.idCategoria where C.idCategoria = 3';

    $acesso = $con->query($sql);
    $countPremio = $acesso->fetchColumn();
    
    // echo $countPremio;

    echo '<input type="hidden" id="countGratis" value="'.$countGratis.'">';
    echo '<input type="hidden" id="countNormal" value="'.$countNormal.'">';
    echo '<input type="hidden" id="countPremio" value="'.$countPremio.'">';














