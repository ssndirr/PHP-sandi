<?php

$nama = "DUDI SI DUDA DIDIKAN";
$kelas = "XI RPL 1";
$n_indo = 80;
$n_gris = 70;
$n_mtk = 80;
$n_prak = 90;

$rata = $n_indo + $n_gris + $n_mtk + $n_prak ;
$rata /= 4;

echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Nilai B.indonesia : $n_indo <br>";
echo "Nilai B.inggris : $n_gris <br>";
echo "Nilai matematika : $n_mtk <br>";
echo "Nilai produktif : $n_prak <br>";
echo "Rata-Rata : $rata <br>";
echo "- - - - - - - - - - - - - - - - - - - - - - - - - - <br>";

if($rata > 75){
    echo "Status : *Anda Lulus*";
}else{
    echo "Status : *Anda Tidak Lulus*";
}

// $status = ($rata > 75) ? "TUNTAS" : "BELOM TUNTAS";

?>