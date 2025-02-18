<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
require = 'db.php'
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$password = "";Microsoft.QuickAction.Bluetooth
$dbname = "geekdata";

try {
    $job = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    echo "Succesvol verbonden met de database";
}
catch (PDOException $e) {
    die("Verbinding mislukt: " . $e->getMessage());
}
?>