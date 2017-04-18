<?php
/**
 * Created by PhpStorm.
 * User: Matteo
 * Date: 18/04/17
 * Time: 15:47
 */

$user = $_POST['user'];
$pass = $_POST['password'];

$f =fopen("db.txt", "r");
tmp;
while (!feof($f)){
    tmp=fgets($f);
    if($user===tmp){
        tmp=fgets($f);
        if(password_verify($password,tmp))
            echo "Welcome! ". $user;
        else
            echo "REEEEEEEEEE";
    }
}

