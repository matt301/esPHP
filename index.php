
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Log IN</title>

</head>
<body>
<?php
session_start();
if(isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
    header('Location:privata.php');
}
else{
echo '<h2>Ciao</h2><br>
<form action="login.php" method="post" enctype="multipart/form-data" name="formlog">
    <table >

        <tr>
            <td><label>User: </label></td>
            <td><input type="email" name="user" placeholder="Email" required/></td>
        </tr>
        <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="password" placeholder="Password" required/></td>
        </tr>
        <tr>
            <td><input type="checkbox" name="autologin" /> ricordami</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2"><a href="form_reg.html">Non hai un account? Registrati qui</a></td>
            <td></td>
        </tr>

        <tr>
            <td><input type="submit" value="Invia" /><input type="reset" value="Cancella" /></td>
            <td></td>
        </tr>
    </table>

</form>

</body>
</html>';



}
?>

