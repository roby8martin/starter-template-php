<?php

$nomesito='Hello World';
$colorenavbar='#212529';

$header='
<!doctype html>
<html lang="it-IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="'.$colorenavbar.'">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Dark Mode Bootstrap -->
    <link href="css/dark-mode.css" rel="stylesheet">
    <link href="css/switch-darkmode.css" rel="stylesheet">

    <!-- Favicon -->
    '.$favicon1.'

    <title>'.$nomesito.'</title>
  </head>

  <body>
';

$header2='
<!doctype html>
<html lang="it-IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="'.$colorenavbar.'">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-utilities.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Dark Mode Bootstrap -->
    <link href="../css/dark-mode.css" rel="stylesheet">
    <link href="../css/switch-darkmode.css" rel="stylesheet">

    <!-- Favicon -->
    '.$favicon2.'

    <title>'.$nomesito.'</title>
  </head>

  <body>
';

$index='
'.$header.'
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Hello World</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home <i class="fas fa-home"></i></a>
          </li>
        </ul>
        <form class="d-flex">
          <a class="btn btn-outline-light" href="settings/index.php"><i class="fas fa-cog"></i></a>
        </form>
      </div>
    </div>
  </nav>
';

$settings='
'.$header2.'
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="..\index.php">Hello World</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home <i class="fas fa-home"></i></a>
        </li>
      </ul>
      <form class="d-flex">
        <a class="btn btn-light" href="../settings/index.php"><i class="fas fa-cog"></i></a>
      </form>
    </div>
  </div>
</nav>
';
?>