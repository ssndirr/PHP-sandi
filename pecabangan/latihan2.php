<?php

$nama = "SILUMAN";
$jk = "LAKI-LAKI";
$jenis = "makanan";
$menu = "nasi goreng";
$jumlah = "2";

echo "~ ~ ~ ~ RESTORAN SEDERHANA ~ ~ ~ ~ <br>";
echo "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br>";
echo "Nama : $nama <br>";
echo "Jenis Kelamin : $jk <br>";

if($jenis == "makanan"){
    echo "Jenis : $jenis<br>";
    if($menu == "nasi goreng"){
        $harga = "10000";
        echo "Menu : $menu <br>";
        echo "Harga : $harga<br>";
    }elseif($menu == "mie goreng"){
        $harga = "15000";
        echo "Menu : $menu <br>";
        echo "Harga : $harga<br>";
    }elseif($menu == "ayam goreng"){
        $harga = "20000";
        echo "menu : $menu <br>";
        echo "Harga : $harga<br>";
    }else{
        echo "TIDAK TERSEDIA<br>";
        $harga = 0;
    }

}elseif($jenis == "minuman"){
    echo "Jenis : $jenis<br>";
    if($menu == "air mineral"){
        $harga = "5000";
        echo "Menu : AIR $menu<br>";
        echo "Harga : $harga<br>";
    }elseif($menu == "fresh tea"){
        $harga = "7000";
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
    }elseif($menu == "jus"){
        $harga = "12000";
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
    }else{
        echo "TIDAK TERSEDIA<br>";
    }

}else{
    echo "JENIS TIDAK TERSEDIA<br>";
}

$tot = $harga * $jumlah ;

if($tot >= 50000){
    $dis = $tot / 100 * 20;
    $tb = $tot - $dis ;
}else{
    $dis = "TIDAK DAPAT DISKON<br>";
    $tb = $tot ;
}

echo "Jumlah : $jumlah<br>";
echo " - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>";
echo "Total : $tot<br>";
echo "Diskon 20% : $dis<br>";
echo " - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>";
echo "Total Bayar : $tb<br>";

?>