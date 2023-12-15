
<?php

require_once('./connexion_database.php');
if (isset($_POST['submit']) && isset($_POST['firstname']) && !empty($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['mail']) && !empty($_POST['mail'])) {
    // var_dump('hello');
    $request = $database->prepare('UPDATE patients SET lastname=:lastname,firstname=:firstname,birthdate=:birthdate,mail=:mail WHERE id=:id');
    $request->execute([
        ':id' => $_POST['id'],
        ':lastname'=>$_POST['lastname'],
        ':firstname'=>$_POST['firstname'],
        ':birthdate'=>$_POST['birthdate'],
        ':mail'=>$_POST['mail'],

    ]);
}
header('Location: index1.php');
?>
