<?php



?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
</head>

<body class="bg-dark text-center">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">Hospitale</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./ajout-patient.php">Ajouter un patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index1.php">list patient</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true" href="./index1.php">modifier</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

  
<h2 class=" text-danger m-5">LIST OF THE PATIENTS : </h2> 

<!--  -->
<div class=" d-flex justify-content-center " >
<form action="./verifier.delete.php" method="post">

    
<table class=" table table-hover list-unstyled bg-dark text-light p-4 border border-light  text-center">
<thead class="text-danger fw-4 fs-4 border border-warning ">
        <tr>   
        <td class="border border-warning">Lastname</td>
        <td class="border border-warning">Firstname</td>
        <td class="border border-warning">Birthdate</td>
        <td class="border border-warning ">Mail</td>
        <td class="border border-warning">Modifier</td>
        <td class="border border-warning">Rendezvous</td>
        <td class="border border-warning">Delete</td>
        
        </tr>
        </thead>
        <?php
        $id=$_GET['id'];
        // var_dump($id);
        require_once('./connexion_database.php');
        $request = $database->query('SELECT * FROM patients WHERE id='.$id);
        $patient=$request->fetch();
       
        echo'
        <tbody>
        <tr>
        <td class="border border-warning">'. $patient['lastname'].'</td>
        <td class="border border-warning">'. $patient['firstname'].'</td>
        <td class="border border-warning"> '. $patient['birthdate'].'</td>
        <td class="border border-warning "> '. $patient['mail'].'</td>
        <td class="border border-warning">  <a class="btn btn-warning" href="./modifier-patient.php?id='. $patient['id'] . ' " > update</a> </td>
        <td class="border border-warning">  <a class="btn btn-warning" href="./ajout-rendezvous.php?id='. $patient['id'] . ' " > rendezvous</a> </td>
        <td class="border border-warning">  <a class="btn btn-warning" href="./verifier.delete.php?id='. $patient['id'] . ' " > delete</a></td>
        </tr>
        </tbody>';
        
        

        ?>
    </table>
    </div>
</form>
    <a href="./ajout-patient.php" class="btn btn-primary p-1 m-5" >Ajouter un patient</a> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>