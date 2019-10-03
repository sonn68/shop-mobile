<?php echo $_SESSION["username"]?>
<div class="container" style="margin-top: 50px;">
  <?php 
    if(file_exists($controller))
      include $controller;
  ?>
</div>