<?php
require_once("layouts/header.php")
?>

<h1 class="text-center">EDITAR</h1>

<form action="" method="get">
  <?php
  foreach($dato as $key => $value)
     foreach($value as $v):?>
   <input type="text" placeholder="INGRESE NOMBRE" name="nombre"> <br>
   <input type="text" placeholder="INGRESE RFC" name="rfc"> <br>
   <input type="text" placeholder="INGRESE DOMICILIO" name="domicilio"> <br>
   <input type="submit" class="btn" name="m" value="GUARDAR">
   <input type="hidden" name="m" value="guardar">
</form>
<?php
require_once("layouts/footer.php");
?>