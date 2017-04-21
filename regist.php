<?php

//funzione che controlla la 'bontà' dei dati ricevuti in input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nome = test_input($_POST['nome']);
$cognome = test_input($_POST['cognome']);
$gender = test_input($_POST['gender']);
$email = test_input($_POST['email']);
$pass = test_input($_POST['password']);

$pass_hash = password_hash($pass, PASSWORD_BCRYPT);


$f = fopen("db.txt", 'a');
if(!$f) die ("Errore nella operazione con il file");

fwrite($f, $email."*<br>");
fwrite($f, $pass_hash.":*<br>");
fwrite($f, $nome."*<br>");
fwrite($f, $cognome."*<br>");
fwrite($f, $gender."*<br>");



fclose($f);
/*
$f =fopen("db.txt", "r");
while (!feof($f))
        echo fgets($f);
*/

fclose($f);
echo "<br>Utente registrato <a href='index.php'> Log in </a>";

?>