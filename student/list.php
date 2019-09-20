<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>
<body>
<?php
    class Etudiant {
        public $cne;
        public $firstName;
        public $lastName;
        public $birthDate;
        public $tel;
        public $email;
    }

    $etudiants = array();

    for($i=0;$i<100;$i++) {
        $etudiant = new Etudiant();
        $etudiant->cne = "2020209290".$i;
        $etudiant->firstName = "dummy".$i;
        $etudiant->lastName = "dummy".$i;
        $etudiant->birthDate = "01/01/1990";
        $etudiant->tel = "+2126000221".$i;
        $etudiant->email = "dummy$i@gmail.com";

        $etudiants[$i] = $etudiant;
    }

    for($i=0;$i<100;$i++) {
        $etudiant = $etudiants[$i];

        switch (floor($i/10)) {
            case 0:
                $color = "red";
                break;
            case 1:
                $color = "cyan";
                break;
            case  2:
                $color = "blue";
                break;
            case 3:
                $color = "green";
                break;
            case 4:
                $color = "gray";
                break;
            default:
                $color = "yellow";
        }
        echo "<div style='width:200px;height:100px;margin:5px;border: 1px solid black; border-collapse: collapse;background-color: ".$color."'>CNE: $etudiant->cne<br>Nom: $etudiant->firstName<br>Prénom: $etudiant->lastName<br>Tél: $etudiant->tel<br>Email: $etudiant->email</div>";
    }

?>

</body>
</html>