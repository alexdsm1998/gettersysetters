<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>clase</title>
  <head>
  <body>
    <?php

class clasecoche
{

  //propiedades
public $color="Rojo";
public $marca="Audi";
public $ruedas=4;
public $puertas=3;

  //método
  public function  mostrarcolor() {
      echo '<br>';
      echo 'el el color del coche es:';
      echo $this->color;
      echo '<br>';
  }

  public function mostrarmarca() {
      echo '<br>';
      echo 'La marca del coche es:';
      echo $this->coche;
      echo '<br>';
  }

  public function mostrarpuertas() {
      echo '<br>';
      echo 'puertas del coche:';
      echo $this->puertas;
      echo '<br>';
  }

  public function mostrarruedas() {
      echo '<br>';
      echo 'ruedas del coche';
      echo $this->ruedas;
      echo '<br>';
  }
  //setter
  public function setmarca($cambiarmarca){
    $this->marca=$cambiarmarca;
  }
  public function setcolor($cambiarcolor){
    $this->color=$cambiarcolor;
  }
  public function setpuertas($cambiarpuertas){
    $this->puertas=$cambiarpuertas;
  }
  public function setruedas($cambiarruedas){
    $this->ruedas=$cambiarruedas;
  }

  //getter
  public function getmarca(){
    echo $this->marca;
  }
  public function getcolor(){
    echo $this->color;
  }
  public function getpuertas(){
    echo $this->puertas;
  }
  public function getruedas(){
    echo $this->ruedas;
    }

}
?>
  </body>
</html>
