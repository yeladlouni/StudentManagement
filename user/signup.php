<?php
    $firstNameError = $lastNameError = $emailError = $birthDateError = $passwordError = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {

        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];
        $birthDate = $_POST['birthdate'];

        if(empty($firstName)) {
            $firstName = "Le nom est obligatoire";
        }

        if(empty($lastName)) {
            $lastNameError = "Le prénom est obligatoire";
        }

        if(empty($email)) {
            $emailError = "L'email est obligatoire";
        }

        if($password != $password_confirmation) {
            $passwordError = "Les mots de passe saisis ne sont pas conformes.";
        }

        if($birthDate - date() > 18*365) {
            $birthDateError = "L'âge doit être supérieur à 18ans.";
        }

        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=students", $username, $password);

            $sql = "INSERT INTO user VALUES(" . $firstName . ", " . $lastName .  ")";

            $conn->exec($sql);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email"><br>
        <span class="error"><?php echo $emailError;?></span><br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password"><br>
        <label for="password_confirmation">Confirmation du mot de passe</label>
        <span class="error"><?php echo $passwordError;?></span><br>
        <input type="password" name="password_confirmation"><br>
        <label for="first_name">Nom</label>
        <span class="error"><?php echo $firstNameError;?></span><br>
        <input type="text" name="first_name"><br>
        <label for="last_name">Prénom</label>
        <span class="error"><?php echo $lastNameError;?></span><br>
        <input type="text" name="last_name"><br>
        <label for="address">Adresse</label>
        <input type="text" name="address"><br>
        <label for="city">Ville</label>
        <select name="city">
            <option value="RBA">Rabat</option>
            <option value="CAS">Casablanca</option>
            <option value="FES">Fès</option>
            <option value="TAN">Tanger</option>
        </select><br>
        <label for="country">Pays</label>
        <select name="country">
            <option value="MAR">Maroc</option>
            <option value="TUN">Tunisie</option>
            <option value="FRA">France</option>
        </select><br>
        <label for="birthdate">Date de naissance</label>
        <input type="date" name="birthdate"><br>
        <label for="fav_color">Couleur favorite</label>
        <input type="color" name="fav_color"><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>