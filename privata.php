<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 20/04/2017
 * Time: 11:06
 */
session_start();

if(!isset($_SESSION["user"])){
    header('Location: index.php');
}
else{
     echo "Ciao ". $_SESSION["user"]. " questa pagina é riservata agli utenti registrati";
}