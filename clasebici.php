<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>clase</title>
  <head>
  <body>
    <?php

class clasebici
{

  //propiedades
  public $tipo = 'montaña';
  public $color = 'negra' ;
  public $tamano = 'grande';
  public $ruedas = '2';

  //método
  public function  mostrartipo() {
      echo '<br>';
      echo 'el tipo de bici es:';
      echo $this->tipo;
      echo '<br>';
  }

  public function mostrarcolor() {
      echo '<br>';
      echo 'el color de la bici es:';
      echo $this->tipo;
      echo '<br>';
  }

  public function mostrartamano() {
      echo '<br>';
      echo 'el tamaño de la bici es:';
      echo $this->tamanyo;
      echo '<br>';
  }

  public function mostrarruedas() {
      echo '<br>';
      echo 'ruedas de la bici';
      echo $this->ruedas;
      echo '<br>';
  }
  //setter
  public function settipo($cambiartipo){
    $this->tipo=$cambiartipo;
  }
  public function setcolor($cambiarcolor){
    $this->color=$cambiarcolor;
  }
  public function settamano($tamano){
    $this->tamanyo=$cambiartamano;
  }
  public function setruedas($ruedas){
    $this->ruedas=$cambiarruedas;
  }

  //getter
  public function gettipo(){
    echo $this->tipo;
  }
  public function getcolor(){
    echo $this->color;
  }
  public function gettamano(){
    echo $this->tamano;
  }
  public function getruedas(){
    echo $this->ruedas;
    }

}
?>
  </body>
</html>
