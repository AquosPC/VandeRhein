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
      print('Database Page');
    } 
    elseif ($ID == 2) {
      print('Login Page');
    } ?></li>
</ul>
<ul class="ul-nav">
  <li><a <?php if ($ID == 0) { print('class="active float-left" '); }  else { print('class="float-left" '); } ?> href="Index">Home</a></li>
  <li><a <?php if ($ID == 1) { print('class="active float-left" ');  } else { print('class="float-left" '); } ?> href="Database">Database</a></li>
  <li><a <?php if ($ID == 2) { print('class="active float-right" ');  } else { print('class="float-right" '); } ?> href="Login">Log in</a></li>
  <li><a <?php if ($ID == 2) { print('class="active float-right" ');  } else { print('class="float-right" '); } ?> href="includes\logout">Log uit</a></li>
</ul>
