<?php
/**
 * Created by PhpStorm.
 * User: Matteo
 * Date: 18/04/17
 * Time: 15:47
 */
ini_set("auto_detect_line_endings", true);


$user = $_POST['user'];
$pass = $_POST['password'];

$f = fopen("db.txt", "r");
$tmp[]=fgets($f);
echo $tmp[0];
/*
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

*/