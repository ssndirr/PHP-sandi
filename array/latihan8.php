<?php

$datajson = '[
    {
        "no": "101",
        "judul": "Dilan 1991",
        "gendre": "Romance",
        "penulis": "Piqi Baiq",
        "penerbit": "Airlanga",
        "tahun": "2014"
    },
    {
        "no": "102",
        "judul" : "Bumi manusia",
        "gendre": "Drama History",
        "penulis" : "Pramoedya Ananta Toer",
        "penerbit" : "Hasna Mitra",
        "tahun" : "1980"
    },
    {
        "no": "103",
        "judul" : "Rindu",
        "gendre": "Manga",
        "penulis" : "Tere Liye",
        "penerbit" : "Republika",
        "tahun" : "2014"
    },
    {
        "no": "104",
        "judul" : "Lelaki Harimau",
        "gendre": "novel",
        "penulis" : "Eka Kurnia",
        "penerbit" : "Gramedia Pustaka Utama",
        "tahun" : "1975"
    },
    {
        "no": "105",
        "judul" : "Laskar Pelangi",
        "gendre": "novel",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Putra",
        "tahun" : "2005"
    },
    {
        "no": "106",
        "judul": "Ayat-Ayat Cinta",
        "gendre": "Religi",
        "penulis": "habiburohman",
        "penerbit": "Bentang Pustaka",
        "tahun": "2005"
    },
    {
        "no": "107",
        "judul" : "Perahu Kertas",
        "gendre": "Romantis",
        "penulis" : "Dee Lestari",
        "penerbit" : "Bentang Pustaka",
        "tahun" : "2009"
    },
    {
        "no": "108",
        "judul" : "Supernova",
        "gendre": "Fiksi",
        "penulis" : "Dee Lestari",
        "penerbit" : "Truedee Books",
        "tahun" : "2001"
    },
    {
        "no": "109",
        "judul" : "5 menara",
        "gendre": "Infiratif",
        "penulis" : "Ahmad Puadi",
        "penerbit" : "Gramedia Pustaka",
        "tahun" : "2009"
    },
    {
        "no": "110",
        "judul" : "Cantik Itu Luka",
        "gendre": "Fiksi",
        "penulis" : "Eka Kurnia",
        "penerbit" : "Bentang Putra",
        "tahun" : "2002"
    },
    {
        "no": "111",
        "judul": "Pulang",
        "gendre": "Drama",
        "penulis": "Leila",
        "penerbit": "Kepustakaan Populer",
        "tahun": "2012"
    },
    {
        "no": "112",
        "judul" : "Rostoverso",
        "gendre": "Romantis",
        "penulis" : "Dee Lestari",
        "penerbit" : "Truedee Books",
        "tahun" : "2008"
    },
    {
        "no": "113",
        "judul" : "Sang Pemimpi",
        "gendre": "Pendidikan",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun" : "2006"
    },
    {
        "no": "114",
        "judul" : "Maryamah Karpov",
        "gendre": "Fiksi",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tahun" : "2008"
    },
    {
        "no": "115",
        "judul" : "Olengka",
        "gendre": "Fiksi",
        "penulis" : "Budi Darma",
        "penerbit" : "Balai Putra",
        "tahun" : "1983"
    },
    {
        "no": "116",
        "judul": "Gadis Pantai",
        "gendre": "Sosial",
        "penulis": "Pramoedya Ananta",
        "penerbit": "Hasta Mitra",
        "tahun": "1987"
    },
    {
        "no": "117",
        "judul" : "Saman",
        "gendre": "Romantis",
        "penulis" : "Aya Utami",
        "penerbit" : "KPG",
        "tahun" : "1998"
    },
    {
        "no": "118",
        "judul" : "Selamat Tinggal",
        "gendre": "Drama",
        "penulis" : "Tere Liye",
        "penerbit" : "Gramedia Pustaka",
        "tahun" : "2020"
    },
    {
        "no": "119",
        "judul" : "9 Matahari",
        "gendre": "Inspiratif",
        "penulis" : "Adenita",
        "penerbit" : "Gagas Media",
        "tahun" : "2020"
    },
    {
        "no": "120",
        "judul" : "supernova:gelombang",
        "gendre": "Fiksi",
        "penulis" : "Dee Lestari",
        "penerbit" : "Bentang Pustaka",
        "tahun" : "2014"
    }
]';

$list = json_decode($datajson);
echo "<h3 align='center'>Kumpulan Novel Terbaru</h3>";
echo "<table border='1' align='center' width='70%'>
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Gendre</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun Rilis</th>
</tr>";
foreach($list as $mahasiswa){
    echo"   <tr align='center'>
                <td>{$mahasiswa->no}</td>
                <td>{$mahasiswa->judul}</td>
                <td>{$mahasiswa->gendre}</td>
                <td>{$mahasiswa->penulis}</td>
                <td>{$mahasiswa->penerbit}</td>
                <td>{$mahasiswa->tahun}</td>
            </tr>";
}
            echo "</table>";
?>


<!-- // foreach($list as $mahasiswa){
//     echo "no : {$mahasiswa->no}<br>";
//     echo "Judul : {$mahasiswa->judul}<br>";
//     echo "Gendre : {$mahasiswa->gendre}<br>";
//     echo "Penulis : {$mahasiswa->penulis}<br>";
//     echo "Penerbit : {$mahasiswa->penerbit}<br>";
//     echo "Tahun Rilis : {$mahasiswa->tahun}<br>";
//     echo "<hr>";
// } -->
