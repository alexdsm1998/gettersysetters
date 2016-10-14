<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>prbando coche</title>
  </head>
  <body>
    <?php
//incluimos la clase

include 'coche.php';
//generamos

$coche = new clasecoche();
$coche->setcolor('rojo');
echo " es el color del coche" .$coche->getcolor();
echo "<br>";


$coche->setmarca('Audi');
echo " es la marca del coche" .$coche->getmarca();
echo "<br>";

$coche->setruedas('4');
echo " son las ruedas que tiene el coche" .$coche->getruedas();
echo "<br>";

$coche->setpuertas('3');
echo " son las puertas que tiene el coche" .$coche->getpuertas();
echo "<br>";

    ?>
  </body>
</html>
