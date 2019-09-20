<?php
    if(isset($_POST['email'])) {
        echo $_POST['email'].'<br>';
        echo $_POST['password'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
</head>
<body>
    <form action="login.php" method="post">
        <fieldset>
            <label for="email">Email</label>
            <input type="email" name="email"><br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" pattern="*[@_/]*"><br>
            <input type="button" value="Se connecter">
        </fieldset>
    </form>
</body>

</html>