

<?php
class Etudiant {
    public $cne = "";
    public $firstName = "";
    public $lastName = "";
    public $birthDate = "";
}

$etudiant1 = new Etudiant();
$etudiant2 = new Etudiant();
$etudiant3 = new Etudiant();

$etudiant1->cne = "Dummy1";
$etudiant1->firstName = "Dummy1";
$etudiant1->lastName = "Dummy1";
$etudiant1->birthDate = "30/01/1990";

$etudiant2->cne = "Dummy1";
$etudiant2->firstName = "Dummy1";
$etudiant2->lastName = "Dummy1";
$etudiant2->birthDate = "30/01/1990";

$etudiant3->cne = "Dummy3";
$etudiant3->firstName = "Dummy3";
$etudiant3->lastName = "Dummy3";
$etudiant3->birthDate = "30/01/2010";

//echo $etudiant2;
//echo $etudiant3;
?>

<html>
<head>
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <table>
        <tr>
            <th>CNE</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Data de naissance</th>
        </tr>
        <tr>
            <td><?php echo $etudiant1->cne ?></td>
            <td><?php echo $etudiant1->firstName ?></td>
            <td><?php echo $etudiant1->lastName ?></td>
            <td><?php echo $etudiant1->birthDate ?></td>
        </tr>
        <tr>
            <td><?php echo $etudiant2->cne ?></td>
            <td><?php echo $etudiant2->firstName ?></td>
            <td><?php echo $etudiant2->lastName ?></td>
            <td><?php echo $etudiant2->birthDate ?></td>
        </tr>
        <td><?php echo $etudiant3->cne ?></td>
        <td><?php echo $etudiant3->firstName ?></td>
        <td><?php echo $etudiant3->lastName ?></td>
        <td><?php echo $etudiant3->birthDate ?></td>
    </table>

    <div>
        <?php
            if($etudiant1 == $etudiant2) {
                echo "Les 2 étudiants 1 et 2 sont similaires<br>";
            } else {
                echo "les 2 étudiants 1 et 2 ne sont pas similaires<br>";
            }

            if($etudiant1 === $etudiant2) {
                echo "Les 2 étudiants 1 et 2 sont identiques<br>";
            } else {
                echo "Les 2 étudiants 1 et 2 ne sont pas identiques<br>";
            }

            $etudiant5 = $etudiant1;

            if($etudiant1 === $etudiant5) {
                echo "Les 2 étudiants 1 et 5 sont identiques<br>";
            } else {
                echo "Les 2 étudiants 1 et 5 ne sont pas identiques<br>";
            }

            $x = 6;

            while($x <= 5) {
                echo "while: $x<br>";
            }

            do {
                echo "do while: $x<br>";
            } while($x <= 5);

        ?>
    </div>
</body>
</html>