<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log IN</title>

</head>
<body>
<h2>Ciao</h2><br>
<form action="login.php" method="post" enctype="multipart/form-data" name="formlog">
    <table >

        <tr>
            <td><label>User: </label></td>
            <td><input type="email" name="email" placeholder="Email" required/></td>
        </tr>
        <tr>
            <td><label>Password: </label></td>
            <td><input type="password" name="password" placeholder="Password" required/></td>
        </tr>

        <tr>
            <td><input type="submit" value="Invia" /></td>
            <td><input type="reset" value="Cancella" /></td>
        </tr>
    </table>

</form>

</body>
</html>