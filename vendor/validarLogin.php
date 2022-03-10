<?
    session_start();
    if(!isset($_SESSION["user_painel"])){   
        header('Location:login.php');
    }

?>