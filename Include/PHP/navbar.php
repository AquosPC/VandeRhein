<?php
  session_start();
?>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<ul class="ul-title">
  <li class="float-left title-text">Van de Rhein</li>
  <li class="float-right title-text"><?php
    if ($ID == 0) {
      print('Main Page');
    }
    elseif ($ID == 1) {
      print('Gebruiker Page');
    } 
    elseif ($ID == 2) {
      print('Login Page');
    }
    elseif ($ID == 3) {
      print('Voorbladen');
    } 
    elseif ($ID == 4) {
      print('Naar huis?');
    }?></li>
</ul>
<ul class="ul-nav">
  <li><a <?php if ($ID == 0) { print('class="active float-left" '); }  else { print('class="float-left" '); } ?> href="Index">Home</a></li>
  <?php

  if (isset($_SESSION['id'])) {
    echo '<li><a class="float-left" href="Users">Gebruikers</a></li>';
    echo '<li><a class="float-left" href="Voorbladen">Voorbladen</a></li>';
    echo '<li><a class="float-left" href="countdown">Wanneer mag ik naar huis?</a></li>';

    echo '<li><a class="float-right" href="Include\PHP\logout-db.php">Log uit</a></li>';
  }
  else {
    echo '<li><a class="float-right" href="Login">Log in</a></li>';
  }
  ?>
</ul>
