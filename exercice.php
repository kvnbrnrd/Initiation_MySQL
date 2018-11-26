<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visualisation base de données</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
include ('password.php'); 
try
{
    $pdo = new PDO('mysql:host='. $host .';dbname='. $dbname,

    $username,

    $password);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $pdo->query('SELECT * FROM ACS_1');


while ($data = $reponse->fetch())
print_r($data);
?> 
</body>
</html>