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
    $pdo = new PDO('mysql:host='. $host .';dbname='. $dbname, $username, $password);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $pdo->query('SELECT ACS_1.id, ACS_1.Nom, ACS_1.Prenom, ACS_2.Nom_Dep, ACS_2.Num_Dep FROM ACS_1, ACS_2 WHERE ACS_1.dep_id = ACS_2.id');

print_r($reponse->fetchAll());
// while ($data = $reponse->fetch())


foreach($reponse as $key => $value){

};

?> 
</body>
</html>