
<?php
require_once('./connexion_database.php');
if(isset($_POST['submit']) && isset($_POST['firstname']) && !empty($_POST['firstname']) && isset($_POST['lastname']) && !empty($_POST['lastname']) && isset($_POST['birthdate']) && !empty($_POST['birthdate']) && isset($_POST['mail']) && !empty($_POST['mail'])){
$request = $database->prepare("INSERT INTO patients ( lastname, firstname, birthdate, mail) VALUES (:lastname, :firstname, :birthdate, :mail)");
$request->execute([
	':lastname' => $_POST['lastname'],
    ':firstname' => $_POST['firstname'],
    ':birthdate' => $_POST['birthdate'],
    ':mail' => $_POST['mail']
]);
}
header('Location: index1.php');
?>