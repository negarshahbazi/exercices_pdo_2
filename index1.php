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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
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
          <a class="nav-link "  href="./index1.php">modifier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./ajout-rendezvous.php">ajouter rendezvouz</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

  
<h2 class=" text-danger text-center m-5">LIST OF THE PATIENTS : </h2>  
<div class="d-flex justify-content-center">
    <form action="./profil-patient.php" method="get">
<table class="  table table-hover list-unstyled bg-dark text-light p-4 border border-light  w-100 text-center ">
<thead class="text-danger fw-4 fs-4 border border-warning ">
        <tr>   
        <td class="border border-warning">Id</td>
        <td class="border border-warning">Lastname</td>
        <td class="border border-warning">Firstname</td>
        <td class="border border-warning ">plus information</td>
        
        </tr>
        </thead>
        <?php
        foreach ($patients as $patient) {
        echo'
        <tbody>
        <tr>
        <td class="border border-warning">'. $patient['id'].'</td>
        <td class="border border-warning">'. $patient['lastname'].'</td>
        <td class="border border-warning">'. $patient['firstname'].'</td>
        <td class="border border-warning"> <a class="btn btn-warning" href="./profil-patient.php?id='. $patient['id'] . ' " > click</a> </td>
        </tr>
        </tbody>';
        
        }

        ?>
    </table>
    </form>
    </div>
    <a href="./ajout-patient.php" class="btn btn-primary p-1 m-5" >Ajouter un patient</a> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>