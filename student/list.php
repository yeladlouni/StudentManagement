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

    for($i=0;$i<count($etudiants);$i++) {
        $etudiant = $etudiants[$i];

        if ($i >=0 && $i <10) {
            $color = "red";
        } elseif($i >=10 && $i <20) {
            $color = "cyan";
        } else {
            $color = "yellow";
        }

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
        //echo "<div style='width:200px;height:100px;margin:5px;border: 1px solid black; border-collapse: collapse;background-color: ".$color."'>CNE: $etudiant->cne<br>Nom: $etudiant->firstName<br>Prénom: $etudiant->lastName<br>Tél: $etudiant->tel<br>Email: $etudiant->email</div>";
    }


    $students = array('Ben' => $etudiants[5], 'Alice' => $etudiants[11]);

    $countries = array('MA' => 'Maroc', 'AL' => 'Algérie', 'US' => 'USA');

    echo $countries['MA'];

    $etudiant = $students['Alice'];
    echo "<div style='width:200px;height:100px;margin:5px;border: 1px solid black; border-collapse: collapse;background-color: ".$color."'>CNE: $etudiant->cne<br>Nom: $etudiant->firstName<br>Prénom: $etudiant->lastName<br>Tél: $etudiant->tel<br>Email: $etudiant->email</div>";

    $numbers = array(100, 22, 34, 53, 200);
    $sortedNumbers = sort($numbers);

    $names = array("Bob", "Alice", "Grace", "Yoshua", "Xin");
    $sortedNames = sort($names);

    foreach($sortedNames as $name) {
        echo "$name<br>";
    }

    foreach($numbers as $number) {
        echo "$number<br>";
    }
?>

</body>
</html>