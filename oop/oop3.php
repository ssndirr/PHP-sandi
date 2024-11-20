<?php

class bangundatar{

    public $lsegitiga;
    public $llingkaran;
    public $lpersegi;
    public $lpersegipanjang;

    function segitiga($alas,$tinggi){
        echo "Alas : $alas<br>";
        echo "Tinggi : $tinggi<br>";
        $this->lsegitiga = $alas * $tinggi / 2;
        echo "Hasil : $this->lsegitiga<br>";
    }
    function lingkaran($jarijari){
        echo "Jari Jari : $jarijari<br>";
        echo "V  : 3,14 <br>";
        $this->llingkaran = 3.14 * $jarijari * $jarijari;
        echo "Hasil : $this->llingkaran<br>";
    }
    function persegi($sisi1){
        echo "Sisi : $sisi1<br>";
        $this->lpersegi = $sisi1 * $sisi1 ;
        echo "Hasil : $this->lpersegi<br>";
    }
    function persegipanjang($panjang,$lebar){
        echo "Panjang : $panjang<br>";
        echo "Lebar : $lebar<br>";
        $this->lpersegipanjang = $panjang * $lebar ;
        echo "Hasil : $this->lpersegipanjang<br>";
    }
}
$cek = new bangundatar();
echo "<b>Luas Segitiga</b><br>";
echo $cek->segitiga(4,6);
echo "<b>Luas Lingkaran</b><br>";
echo $cek->lingkaran(3);
echo "<b>Luas Persegi</b><br>";
echo $cek->persegi(5);
echo "<b>LuasPersegi Panjang</b><br>";
echo $cek->persegipanjang(5,10);

?>