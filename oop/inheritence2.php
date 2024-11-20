<?php
class bangundatar{
    public $luassegitiga;
    public $luaslingkaran;
    public $luaspersegi;
    public $luaspersegipanjang;
    public $ksegitiga;
    public $klingkaran;
    public $kpersegi;
    public $kpersegipanjang;
}

    class luas extends bangundatar{

        public function segitiga($alas,$tinggi){
            echo "<h1>Luas</h1>";
            echo "<b>Luas Segitiga</b><br>";
            echo "Alas : $alas<br>";
            echo "Tinggi : $tinggi<br>";
            $this->luassegitiga = $alas * $tinggi / 2;
            echo "Hasil : $this->luassegitiga<br><br>";
        }
        function lingkaran($jarijari){
            echo "<b>Luas Lingkaran</b><br>";
            echo "Jari Jari : $jarijari<br>";
            echo "V  : 3,14 <br>";
            $this->luaslingkaran = 3.14 * $jarijari * $jarijari;
            echo "Hasil : $this->luaslingkaran<br><br>";
        }
        function persegi($sisi1){
            echo "<b>Luas Persegi</b><br>";
            echo "Sisi : $sisi1<br>";
            $this->luaspersegi = $sisi1 * $sisi1 ;
            echo "Hasil : $this->luaspersegi<br><br>";
        }
        function persegipanjang($panjang,$lebar){
            echo "<b>Luas Persegipanjang</b><br>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            $this->luaspersegipanjang = $panjang * $lebar ;
            echo "Hasil : $this->luaspersegipanjang<br><br>";
        }
    }
    class keliling extends bangundatar{

        public function segitiga($a,$b,$c){
            echo "<h1>Keliling</h1>";
            echo "<b>Keliling Segitiga</b><br>";
            echo "A : $a<br>";
            echo "B : $b<br>";
            echo "C : $c<br>";
            $this->ksegitiga = $a + $b + $c ;
            echo "Hasil : $this->ksegitiga<br><br>";
        }
        function lingkaran($jarijari){
            echo "<b>Keliling Lingkaran</b><br>";
            echo "Jari Jari : $jarijari<br>";
            echo "V  : 3,14 <br>";
            $this->klingkaran = 2 * 3.14 * $jarijari ;
            echo "Hasil : $this->klingkaran<br><br>";
        }
        function persegi($sisi){
            echo "<b>Keliling Persegi</b><br>";
            echo "Sisi : $sisi<br>";
            $this->kpersegi = 4 * $sisi ;
            echo "Hasil : $this->kpersegi<br><br>";
        }
        function persegipanjang($panjang,$lebar){
            echo "<b>Keliling Persegipanjang</b><br>";
            echo "Panjang : $panjang<br>";
            echo "Lebar : $lebar<br>";
            $this->kpersegipanjang = 2 * $panjang + $lebar ;
            echo "Hasil : $this->kpersegipanjang<br><br>";
        }
    }
    

    $cek = new luas();
    echo $cek->segitiga(5,3);
    echo $cek->lingkaran(3);
    echo $cek->persegi(5);
    echo $cek->persegipanjang(3,5);
    $cek = new keliling();
    echo $cek->segitiga(5,3,4);
    echo $cek->lingkaran(3);
    echo $cek->persegi(5);
    echo $cek->persegipanjang(3,5);

?>