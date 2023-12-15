
<?php

require_once('./connexion_database.php');
if(isset($_GET['id'])){
    // var_dump('hello');
    $request = $database->prepare('DELETE FROM patients WHERE id=:id');
    $request->execute([
        ':id' => $_GET['id'],

    ]);
}
header('Location: index1.php');
?>

   