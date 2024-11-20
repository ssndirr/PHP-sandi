    <center>
    <h3>STRUK GAJI</h3>
<?php
if(isset($_POST['proses'])){
    $no2 = $_POST['no'];
    $nama2 = $_POST['nama'];
    $unit2 = $_POST['unit'];
    $tgl2 = $_POST['tgl'];
    $jabatan2 = $_POST['jabatan'];
    $bpjs2 = $_POST['bpjs'];
    $lamak2 = $_POST['lamak'];
    $pinjaman2 = $_POST['pinjaman'];
    $status2 = $_POST['status'];
    $tabungan2 = $_POST['tabungan'];
    $lainya2 = $_POST['lainya'];


    if ($jabatan2 == "Kepala Sekolah") {
        $gaji_karya = 10000000;
    }elseif($jabatan2 == "Wakasek"){
        $gaji_karya = 7500000;
    }elseif($jabatan2 == "Guru"){
        $gaji_karya = 5000000;
    }elseif($jabatan2 == "Ob"){
        $gaji_karya = 2500000;
    }
    
    $lama = ($lamak2 > 5) ? "1000000" : "0";

    if ($status2 === "Tetap"){
        $bonus = 500000;
    }elseif($status2 === "Kontrak"){
        $bonus = 0;
    }

    $kotor = $gaji_karya + $lama + $bonus ;

    $totalp = $bpjs2 + $pinjaman2 + $tabungan2 + $lainya2 ;

    $bersih = $kotor - $totalp ;

    echo "<table style='color:blue;'>
        <tr style='color:black;'>
            <td align='center' colspan='2'>$nama2</td>
        </tr>
        <tr>
            <td align='center' colspan='2'><h5>Primary Card Title</h5></td>
        </tr>
        <tr>
            <td>No</td>
            <td>: $no2</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: $nama2</td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>: $unit2</td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>: $tgl2</td>
        </tr>
        <tr>
            <td align='center' colspan='2'><h4>GAJI</h4></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: $jabatan2</td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>: $gaji_karya</td>
        </tr>
        <tr>
            <td>Tunjakkan Lama kerja</td>
            <td>: $lama</td>
        </tr>
        <tr>
            <td>status kerja</td>
            <td>: $status2</td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>: $bonus</td>
        </tr>
        <tr>
            <td><b>Gaji Kotor</b></td>
            <td>: $kotor</td>
        </tr>
        <tr>
            <td align='center' colspan='2'><h4>POTONGAN</h4></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>: $bpjs2</td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>: $pinjaman2</td>
        </tr>
        <tr>
            <td>Tabungan</td>
            <td>: $tabungan2</td>
        </tr>
        <tr>
            <td>Lainya</td>
            <td>: $lainya2</td>
        </tr>
        <tr>
            <td><b>Total Potongan</b></td>
            <td>: $totalp</td>
        </tr>
        <tr>
            <td align='center' colspan='2'><h4>TOTAL</h4></td>
        </tr>
        <tr>
            <td colspan='2' align='center'><b>Gaji Bersih : $bersih</b></td>
        </tr>
        
    </table>";

}
?>
</center>
