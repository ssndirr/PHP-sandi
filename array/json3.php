<?php

// data json
$datajson = '[
    {
        "nama": "nurul Huda",
        "alamat": "bandung"
    },
    {
        "nama": "renza ilhami risqi",
        "alamat": "jakarta"
    }
]';

// dikonversikan ke json
$list = json_decode($datajson);

// tampilkan data
foreach($list as $mahasiswa){
    echo "nama : {$mahasiswa->nama}<br>";
    echo "alamat : {$mahasiswa->alamat}<br>";
    echo "<hr>";
}

?>