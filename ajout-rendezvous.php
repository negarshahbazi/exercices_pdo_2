<?php

    
$id=$_GET['id'];
// var_dump($id);
require_once('./connexion_database.php');
$request = $database->query('SELECT * FROM patients WHERE id='.$id);
$patient=$request->fetch();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-secondary-subtle">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand " href="./index.php"><h1>Hospitale</h1></a>
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
          <a class="nav-link" href="./index1.php" >modifier</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./ajout-rendezvous.php" >ajouter rendezvouz</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success bg-success text-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
<div class="container-md">
<h1 class="text-center p-5 text-danger">AJOUTER RENDEZVOUS</h1>

<div class="d-flex justify-content-center">
    <form action="./profil-patient.php" method="get">
    <div class="card border-success mb-3 ">
  <div class="card-header bg-transparent border-success"><h5>HELLO :  <?php echo $patient['firstname'] ?></h5></div>
  <div class="card-body text-success d-flex justify-content-center align-items-center">
  <div class="card-header bg-transparent border-success"><h5>idPatient :  <?php echo $patient['id'] ?></h5></div>


  <label for="date"></label>
    <input type="date" id="date" >
    </div>
  <div class="card-footer bg-transparent border-success text-center">    <a href="" class="btn btn-primary " >save</a> </div>
</div>

    </form>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>