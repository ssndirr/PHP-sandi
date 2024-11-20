<?php

$data = [
    [
    "nis" => "1001",
    "nama" => "haddad",
    "kelas" => "11 rpl 1",
    "eskul" => [ "nama_eskul" => "Seni Tari","Karawitan","Futsal"]
    ],
    [
        "nis" => "1002",
        "nama" => "sandi",
        "kelas" => "11 rpl 9",
        "eskul" => [ "nama_eskul" => "Futsal"]
        ]
    ];

    foreach($data as $daftar){
        echo "<p>NIS : ".$daftar["nis"]."<p>";
        echo "<p>Nama : ".$daftar["nama"]."<p>";
        echo "<p>Kelas : ".$daftar["kelas"]."<P>";
        echo "<p>Eskul : <ul>";
    foreach ($daftar ["eskul"] as $dft) {
        echo "<li>". $dft. "</li>";
    }
    echo "</ul>";
    echo "<hr>";
}


?>