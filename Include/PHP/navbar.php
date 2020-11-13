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
  <li><a <?php if ($ID == 0) { print('class="active" ');  }?> href="Index">Home</a></li>
  <li><a <?php if ($ID == 1) { print('class="active" ');  }?> href="Database">Database</a></li>
</ul>
