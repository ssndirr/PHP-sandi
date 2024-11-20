<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="smk.jpg" alt="" width=150px>
        <form action="" method="POST">
            <h2>Form Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" id="" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" id="" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jenis_kelamin" id="" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Keristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan" id="">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><select name="status" id="">
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="checkbox" name="hobi" id="" value="Membaca">Membaca
                    <input type="checkbox" name="hobi" id="" value="Menulis">Menulis
                    <input type="checkbox" name="hobi" id="" value="Ngepush">Ngepush</td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td><select name="cita_cita" id="">
                        <option value="Programer">Programer</option>
                        <option value="Polwan">Polwan</option>
                        <option value="Polisi">Polisi</option>
                        <option value="Tentara">Tentara</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata_kata" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="proses" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<center><br>
<?php
if(isset($_POST['proses'])){
$nama2 = $_POST['nama'];
$tempat_lahir2 = $_POST['tempat_lahir'];
$tanggal_lahir2 = $_POST['tanggal_lahir'];
$jenis_kelamin2 = $_POST['jenis_kelamin'];
$alamat2 = $_POST['alamat'];
$agama2 = $_POST['agama'];
$pendidikan2 = $_POST['pendidikan'];
$status2 = $_POST['status'];
$hobi2 = $_POST['hobi'];
$cita_cita2 = $_POST['cita_cita'];
$kata_kata2 = $_POST['kata_kata'];

echo "Biodata Diri<br>";
echo "Nama Lengkap : $nama2 <br>";
echo "Tempat Lahir : $tempat_lahir2 <br>";
echo "Tanggal Lahir : $tanggal_lahir2 <br>";
echo "Jenis Kelamin : $jenis_kelamin2 <br>";
echo "Alamat : $alamat2 <br>";
echo "Agama : $agama2 <br>";
echo "Pendidikan Terakhir : $pendidikan2 <br>";
echo "Status : $status2 <br>";
echo "Hobi : $hobi2 <br>";
echo "Cita-Cita : $cita_cita2 <br>";
echo "Kata-Kata Bijak : $kata_kata2 <br>";

}
?>
</center>