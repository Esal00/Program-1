<?php
class buah {
  // Properties
  public $nama;
  public $warna;

  // Methods
  function set_nama($nama) {
    $this->nama = $nama;
  }
  function get_nama() {
    return $this->nama;
  }
  function set_warna($warna) {
    $this->warna = $warna;
  }
  function get_warna() {
    return $this->warna;
  }
}

$apel = new buah();
$apel->set_nama('apel');
$apple->set_warna('merah');
echo "Nama: " . $apel->get_nama();
echo "<br>";
echo "Warna: " . $apel->get_warna();
?>
  
  /*Output
  Nama: apel
  Warna: merah
  */