<?php
class Orang{
  protected $nama,
            $umur;
  public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
  }
  public function getNama(){
    $int = $this->nama = "Rio";
    return $int;
  }
  public function getUmur(){
    $int = $this->umur = 18;
    if($this->umur <= 16){
      throw new Exception("Belum cukup umur", 5);

    }
    return $int;
  }
  public function getDeskripsi(){
    return $this->getNama() ." Berusia " .$this->getUmur()." Tahun ";
  }
}
// $orang1 = new Orang("Rahadi",17);
// echo $orang1->getDeskripsi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    p{text-align: center;
      color:red;
  white-space: nowrap;
  width: 200px;
  border: 1px solid #000000;
  overflow: hidden;
  text-overflow: clip;
  transform: translate(50px, 100px);
}
  </style>
</head>
<body>
  <div class="pbo">
    <p>
      <?php
      $orang1 = new Orang("Rahadi",17);
      echo $orang1->getDeskripsi();
      ?>
    </p>
  </div>

</body>
</html>
