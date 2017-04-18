<?php
/**
 * Created by PhpStorm.
 * User: matteo
 * Date: 06/04/2017
 * Time: 10:18
 */
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pass = $_POST['password'];


$f = fopen("db.txt", 'a');
if(!$f) die ("Errore nella operazione con il file");

fwrite($f, $email.'<br>');
fwrite($f, $pass.'<br>');
fwrite($f, $nome.'<br>');
fwrite($f, $cognome.'<br>');
fwrite($f, $gender.'<br>');
fwrite($f, ":<br>");


fclose($f);

$f =fopen("db.txt", "r");
while (!feof($f))
        echo fgets($f);

fclose($f);

?>