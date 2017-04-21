<?php

session_start();
//ini_set("auto_detect_line_endings", true);

//funzione che controlla la 'bontà' dei dati ricevuti in input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$user = test_input($_POST['user']);
$pass = test_input($_POST['password']);
$remeber = test_input(isset($_POST['autologin']) ? $_POST['autologin'] : 'n'); // = y se selezionato, altrimente é = n
$loginOK = false;

$f = fopen("db.txt", "r");

$tmp = explode(" ",fgets($f));
echo $tmp[0];


/*
while (!feof($f)){

    if($user==fgets($f)){

        if(password_verify($pass,fgets($f))){
            $loginOK=true;
            break;
        }
    }
}

*/

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
