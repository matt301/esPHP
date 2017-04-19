<?php
/**
 * Created by PhpStorm.
 * User: Matteo
 * Date: 18/04/17
 * Time: 15:47
 */

$user = $_POST['user'];
$pass = $_POST['password'];

$f = fopen("db.txt", "r");

while (!feof($f)){
    echo fgets($f)." while";
    if($user==fgets($f)){
        echo fgets($f)." user";
        if(password_verify($pass,fgets($f))){
            echo "Welcome! ". $user;
            break;
        }

        else
            echo "REEEEEEEEEE";
    }
}

