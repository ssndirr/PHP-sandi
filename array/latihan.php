<?php

$novel = [
    [
        "judul" => "Dilan 1991",
        "penulis" => "pidi baiq",
        "tanggal_rilis" => "20 novenmber 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Bumi manusia",
        "penulis" => "Pramoedya Ananta Toer",
        "tanggal_rilis" => "25 Agustus 1980",
        "penerbit" => "Hasna Mitra"
    ],
    [
        "judul" => "Rindu",
        "penulis" => "Tere Liye",
        "tanggal_rilis" => "19 September 2014",
        "penerbit" => "Republika"
    ],
    [
        "judul" => "Lelaki Harimau",
        "penulis" => "Eka Kurnia",
        "tanggal_rilis" => "28 November 1975",
        "penerbit" => "Gramedia Pustaka Utama"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "tanggal_rilis" => "2005",
        "penerbit" => "Bentang Putra"
    ]
];

// menampilkan array
foreach($novel as $buku){
    echo "<h4>Kumpulan Novel</h4>";
    echo "<p>Nama : ".$buku["judul"]."<p>";
    echo "<p>Penulis : ".$buku["penulis"]."<p>";
    echo "<p>Tanggal Rilis : ".$buku["tanggal_rilis"]."<P>";
    echo "<p>Penerbit : ".$buku["penerbit"]."<P>";
    echo "<hr>";
}

?>