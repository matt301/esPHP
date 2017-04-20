<?php
/**
 * Created by PhpStorm.
 * User: Matteo
 * Date: 18/04/17
 * Time: 15:47
 */
session_start();
ini_set("auto_detect_line_endings", true);


$user = $_POST['user'];
$pass = $_POST['password'];
$loginOK = false;

$f = fopen("db.txt", "r");

while (!feof($f)){

    if($user==fgets($f)){

        if(password_verify($pass,fgets($f))){
            echo "Welcome! ". $user;
            break;
        }

        else
            echo "REEEEEEEEEE";
    }
}



if($loginOK){
    $_SESSION['user']= $user;
    $_SESSION['pass']= $pass;
}
else{
    echo "Impossibile accedere all'area riservata. Controlla le tue credenziali";
}
