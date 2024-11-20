<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form action="" method="POST">
    <h2>Biodata Siswa</h2>    
    <table>
        <tr>
            <td>Nama lengkap </td>
            <td>:</td>
            <td><input type="text" name="nama_lengkap" value="" required=""></td>
        </tr>
        <tr>
            <td>Kelas </td>
            <td>:</td>
            <td><input type="text" name="kelas" value="" required=""></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="simpan"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>
<center><br>
<?php
if(isset($_POST['proses'])){
$nama_lengkap2 = $_POST['nama_lengkap'];
$kelas2 = $_POST['kelas'];

echo "Nama lengkap : $nama_lengkap2 <br>";
echo "Kelas : $kelas2";

}
?>
</center>