<?php

// // membuat array 2 dimensi yang berisi array asosiatif
// $artikel = [
//     [
//         "judul" => "Belajar PHP & MySQL untuk Pemula",
//         "penulis" => "petanikode"
//     ],
//     [
//         "judul" => "Tutorial PHP dari Nol hingga Mahir",
//         "penulis" => "petanikode"
//     ],
//     [
//         "judul" => "Membuat Aplikasi Web dengan PHP",
//         "penulis" => "petanikode"
//     ]
// ];

// // menampilkan array
// foreach($artikel as $post){
//     echo "<h2>".$post["judul"]."</h2>";
//     echo "<p>".$post["penulis"]."<p>";
//     echo "<hr>";
// }

// membuat array 2 dimensi yang berisi array asosiatif
$siswa = [
    [
        "nama" => "duda anak satu",
        "jenis" => "laki-laki",
        "kelas" => "x rpl 1"
    ],
    [
        "nama" => "joswa anak satu",
        "jenis" => "perempuan",
        "kelas" => "x rpl 2"
    ]
];

// menampilkan array
foreach($siswa as $murid){
    echo "<h2>".$murid["nama"]."</h2>";
    echo "<p>".$murid["jenis"]."<p>";
    echo "<p>".$murid["kelas"]."<P>";
    echo "<hr>";
}

?>