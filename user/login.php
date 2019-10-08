<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $conn = new PDO("", $username, $password);
        $conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING);
        $sql = "SELECT email, password FROM user WHERE email = ".$email;
        $results = $conn->query($sql);

        $row = $results->fetch_assoc();

        if ($results->num_rows == 0) {
            echo "Utilisateur non existant";    
        }

        if ($row['password'] == $password) {
            // redirect user to students page
            header("Location: http://localhost/user/list.php");
            $_SESSION['username'] = $username;
            $_SESSION['token'] = $password;
        } else {
            // afficher message d'erreur
            echo "Utilsateur/Mot de passe non corrects.";
        }
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <label for="email">Email</label>
            <input type="email" name="email"><br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password"><br>
            <input type="submit" value="Se connecter">
    </form>
</body>

</html>