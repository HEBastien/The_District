<?php
require 'dao.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="assets/images/the_district_brand/logo_transparent_sm.png" alt="Bootstrap" width="150">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégorie
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Asian food</a></li>
            <li><a class="dropdown-item" href="#">Burger</a></li>
            <li><a class="dropdown-item" href="#">Pasta</a></li>
            <li><a class="dropdown-item" href="#">Pizza</a></li>
            <li><a class="dropdown-item" href="#">Salade</a></li>
            <li><a class="dropdown-item" href="#">Sandwich</a></li>
            <li><a class="dropdown-item" href="#">Veggie</a></li>
            <li><a class="dropdown-item" href="#">Wrap</a></li>
          </ul>
        </li>
                <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Plats
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Plus Populaires</a></li>
            <li><a class="dropdown-item" href="#">Meilleurs ventes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

