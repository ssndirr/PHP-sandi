<?php
class kendaraan{

    public $warna = "biru";
    public $warna2 = "hitam";

    public function a(){
        echo "saya adalah kendaraan<br>";
    }
}

    class mobil extends kendaraan{

        public function b(){
            echo $this->a();
            echo "mobil beroda empat<br>";
            echo "ciri warna  $this->warna<br>";
        }
    }
    class motor extends kendaraan{

        public function c(){
            echo $this->a();
            echo "motor beroda dua<br>";
            echo "ciri warna  $this->warna<br>";
        }
    }

    $cetak = new mobil();
    echo $cetak->b();
    $cetak = new motor();
    echo $cetak->c();

?>