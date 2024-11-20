<?php

$data = [
    [
        "nama" => "Safitri",
        "buah" => [
                   [
                "nbuah" => "Anggur",
                "anaknya" => [
                           "jenis" => "Anggur ijo","Anggur Putih"
                             ]
                    ]
                  ]
    ],
    [
        "nama" => "Rahman",
        "buah" => [ 
                    [
                    "nbuah" => "Alpukat",
                    "anaknya" => [
                               "jenis" => "Alpukat Mentega","Alpukat Biasa"
                                 ] 
                    ],
                  
                    [   
                    "nbuah" => "Apel",
                    "anaknya" => [
                                "jenis" => "Apel Merah","Apel Hijau"
                               ]
                    ]
                  ]
    ]
        ];

    foreach($data as $daftar){
        echo "<p>Nama Pemilik : ".$daftar["nama"]."<p>";
        echo "<p>Daftar Buah Kesukaan : <ul>";
    foreach ($daftar ["buah"] as $induk) {
        echo "<li>". $induk["nbuah"]. "</li>";
        echo "<ul>";
    foreach ($induk["anaknya"] as $anak){
        echo "-".$anak."<br>";
    }
        echo "</ul>";
    }
    echo "</ul>";
    echo "<hr>";
}


?>