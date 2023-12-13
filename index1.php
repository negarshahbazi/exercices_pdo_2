<?php

    
    require_once('./connexion_database.php');
$request = $database->query('SELECT * FROM patients');
$patients = $request->fetchAll();
echo "<hr>";

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="./ajout-patient.php">Ajouter un patient</a>

    <ul>
        <?php
        foreach ($patients as $patient) {
            echo '<li>' . $patient['lastname'] . $patient['firstname'].$patient['birthdate'] .$patient['mail'].'</li>';
        }
        ?>
    </ul>
</body>

</html>