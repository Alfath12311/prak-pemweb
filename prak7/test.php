<?php

class Orang { //mendeklarasikan class dan variabel
  public $nama;
  public $nim;
  public $tgllhr;
  public $call;

  public function __construct($nama, $nim, $tgllhr, $call) { //menginisiasi objek agar dapat terpanggil
    $this->nama = $nama;
    $this->nim = $nim;
    $this->tgllhr = $tgllhr;
    $this->call = $call;
  }

  public function tampil() { //membuat fungsi yang akan terpanggil otomatis
    echo "Nama: " . $this->nama . "<br>";
    echo "NIM: " . $this->nim . "<br>";
    echo "Tanggal Lahir: " . $this->tgllhr . "<br>";
    echo "Title: " . $this->call . "<br>";
    echo "<br>";
  }

}

$Orang1 = new Orang("Altair", "130114001", "11 Januari 1165", "Master Assassin");
$Orang1->tampil();

$Orang2 = new Orang("Kasandra", "130114002", "458 BCE" , "The Eagle Bearer");
$Orang2->tampil();

?>