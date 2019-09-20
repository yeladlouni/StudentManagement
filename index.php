<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $email = $_GET['email'];
    $password = $_GET['password'];
    if($email == 'a@a.com' && $password == 'admin') {
        echo $_GET['email']."<br>";
    }
?>
</body>
</html>