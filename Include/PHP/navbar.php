<div class="divtext" >
  <div><h1>Van de Rhein</h1></div>
  <div class="pagetext"><h3> <?php
    if ($ID == 0) {
      print('Main Page');
    }
    elseif ($ID == 1) {
      print('Database Page');
    } ?>
  </h3></div>
</div>
<ul>
  <li><a <?php if ($ID == 0) { print('class="active float-left" '); }  else { print('class="float-left" '); } ?> href="Index">Home</a></li>
  <li><a <?php if ($ID == 1) { print('class="active float-left" ');  } else { print('class="float-left" '); } ?> href="Database">Database</a></li>
  <li><a <?php if ($ID == 2) { print('class="active float-right" ');  } else { print('class="float-right" '); } ?> href="Login">Login</a></li>
</ul>
