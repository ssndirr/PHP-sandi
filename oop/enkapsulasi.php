<?php

class contoh{

    private $nama = "sndi";

    public function perkenalan(){
        echo "Assalamualaikum <br>";
        echo $this  ->nama;
    }
}

$cek = new contoh();
echo $cek->perkenalan();

?>