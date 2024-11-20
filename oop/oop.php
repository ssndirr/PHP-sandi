<?php

class mobil{
    var $nama;
    var $warna;

    function nama(){
    return "Merek Mobil Ferary<br>";
    }
    function warna(){
    return "Warna Mobil Hitam<br>";
    }
}

$mobil = new mobil();
echo $mobil ->nama();
echo $mobil ->warna();

class kucing{
    var $warna;
    var $jenis;

    public function __construct(){
        echo "Saya Kucing Liar<br>";
    }

    public function makan(){
        echo "Kucing Suka Makan Whiskas<br>";
    }

    public function minum(){
        echo "Kucing Suka Minum Air<br>";
    }

    public function __destruct(){
        echo "Kucing Meninggoy krekkrekkrek eeeeeee<br>";
    }
}

$cetak = new kucing();

echo $cetak->makan();
echo $cetak->minum();
echo $cetak->jenis="Anggora";
echo $cetak->warna="kuning<br>";

?>