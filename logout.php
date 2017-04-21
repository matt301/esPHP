<?php
include 'login.php';
session_start();

if(isset($_SESSION["user"])){
    setcookie('user',"", time() - 1, "/");
    $_SESSION[]=array();
    session_destroy();
    header('Location: index.php');
}
