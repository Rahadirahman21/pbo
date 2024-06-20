<?php
// ini namanya class
class Calculator{
  // property 
  protected $a,
         $b;

  // method
  public function __construct($a,$b){
    $this->a = $a;
    $this->b = $b;
  }
  public function setNilaiA($a){
    $int = $this->a = $a;
    return $int;
  }
  public function setNilaiB($b){
    $int = $this->b = $b;
    return $int;
  }
  public function getNilai(){
    return "$this->a,$this->b";
  }
  public function getHasilKali(){
    return $this->a  * $this->b ;
  }
  public function getHasilBagi(){
    return $this->a  / $this->b ;
  }
  public function getHasilTambah(){
    return $this->a  + $this->b ;
  }
  public function getHasilKurang(){
    return $this->a  - $this->b ;
  }
}
// objek
$calculator1 = new Calculator(6,4);
$calculator1->setNilaiA(55);
$calculator1->setNilaiB(100);
// $calculator1->a = 5;
// $calculator1->b = 10;
echo $calculator1->getNilai();
echo "<br>";
echo "Kali : ".$calculator1->getHasilKali();
echo "<br>";
echo "Bagi : ".$calculator1->getHasilBagi();
echo "<br>";
echo "Tambah : ".$calculator1->getHasilTambah();
echo "<br>";
echo "Kurang : ".$calculator1->getHasilKurang();
?>