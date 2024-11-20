<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,$jenis,$agama,$alamat,$hobi){
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $tempat_lahir<br>";
    echo "Tanggal Lahir : $tanggal_lahir<br>";
    echo "Jenis Kelamin : $jenis<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $alamat<br>";
    echo "Hobi : $hobi<br>";
}
biodata("Nunung","Jakarta","04 Juni 2001","Perempuan","Islam","Banjarmasin","Masak");

function menghitung($angka1,$angka2){
    echo "Bilangan Kesatu : $angka1<br>";
    echo "Bilangan Kedua : $angka2<br>";
    $hasil = $angka1 + $angka2;
    echo "Hasil : $hasil<br>";
}

menghitung(20,10);

?>