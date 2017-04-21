<?php

session_start();

if(!isset($_SESSION["user"])){
    header('Location: index.php');
}
else{
     echo "Ciao ". $_SESSION["name"]. " questa pagina é riservata agli utenti registrati <br><br>";
     echo "<a href='logout.php'> Log out </a>";
}