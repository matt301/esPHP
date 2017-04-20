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
$remeber = isset($_POST['autologin']) ? $_POST['autologin'] : 'n'; // = y se selezionato, altrimente é = n
$loginOK = false;

$f = fopen("db.txt", "r");

while (!feof($f)){

    if($user==fgets($f)){

        if(password_verify($pass,fgets($f))){
            $loginOK=true;
            break;
        }
    }
}



if($loginOK){
    $_SESSION['user']= $user;
    $_SESSION['pass']= $pass;

    //se autologin é selezionato
    if($remeber=='y'){
        $cookie_name='user';
        $cookie_value = $user;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }

    header('Location:privata.php');
}
else{
    echo "Impossibile accedere all'area riservata. Controlla le tue credenziali";
}
