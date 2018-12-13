<?php
  include("includes/functions.php");
  $currentfile = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css" type="text/css" />
    <title>Notely - Create, store and share your notes!</title>
  </head>
  <body>
    <!--Start navigation menu-->
      <nav style="min-height:80px; background:#fff;" class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="/images/notely.png" width="100" height="30" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <?php
              if($currentfile==="index.php"){
              ?>
                  <li class="nav-item active">
                    <a class="nav-link" href="/">Create</a>
                  </li>
              <?php
              }
              else{
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="/">Create</a>
                </li>
                <?php
              }
              ?>
              <?php
              if($currentfile==="account.php"){
              ?>
                  <li class="nav-item active">
                    <a class="nav-link" href="/account.php">Login / Register</a>
                  </li>
              <?php
              }
              else{
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="/account.php">Login / Register</a>
                </li>
                <?php
              }
              ?>
              <?php
              if($currentfile==="all.php"){
              ?>
                  <li class="nav-item active">
                    <a class="nav-link" href="/all.php">All notes</a>
                  </li>
              <?php
              }
              else{
                ?>
                <li class="nav-item">
                  <a class="nav-link" href="/all.php">All notes</a>
                </li>
                <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <div class="main py-5">
        <div class="container">
