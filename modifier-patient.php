<?php


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Hospitale</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./ajout-patient.php">Ajout patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index1.php">list patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="./index1.php" >modifier</a>
                    </li>
                    <li class="nav-item">
          <a class="nav-link " href="./ajout-rendezvous.php">ajouter rendezvouz</a>
        </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class=" d-flex justify-content-center text-center align-items-center mt-5">
    <div class="form card w-50 d-flex justify-content-center text-center bg-light">
    <form action="./verifier.modifier.php" method="post" class="w-100 d-flex flex-column justify-content-center">
    <?php
        $id=$_GET['id'];
        // var_dump($id);
        require_once('./connexion_database.php');
        $request = $database->query('SELECT * FROM patients WHERE id='.$id);
        $patient=$request->fetch();?>
      

        <input type="hidden" name="id"  value="<?php echo $patient['id']?>">

            <input class="hover border border-danger m-2" type="text" name="lastname"  value="<?php echo $patient['lastname']?>"><br>
            <input class="hover  border border-danger m-2" type="text" name="firstname" value="<?php echo $patient['firstname']?>"><br>
            <input class="hover  border border-danger m-2" type="date" name="birthdate"  value="<?php echo $patient['birthdate']?>"><br>
            <input class="hover border border-danger m-2" type="e-mail" name="mail"  value="<?php echo $patient['mail']?>"><br>
            <input class="hover  border border-danger m-2 bg-success text-light" type="submit" name="submit"><br>



        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>