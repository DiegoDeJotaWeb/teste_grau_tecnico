<?php
session_start();
    unset($_SESSION['user_painel']);
    header('Location:../login.php');
?>