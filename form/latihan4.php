<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h3>Nilai Ujian Nasional</h3>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" value="" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value=""></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan" id="">
                    <option value="RPL">RPL</option>
                    <option value="TBSM">TBSM</option>
                    <option value="TKRO">TKRO</option>
                    </select></td>
            </tr>
            <tr>
                <td><h4>Nilai ujian</h4></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Nilai B.indonesia</td>
                <td>:</td>
                <td><input type="number" name="indo" id=""></td>
            </tr>
            <tr>
                <td>Nilai B.Inggris</td>
                <td>:</td>
                <td><input type="number" name="gris" id=""></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td> <input type="number" name="mtk" id=""></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="pro" id=""></td>
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
<center>
<?php
if(isset($_POST['proses'])){
$nama2 = $_POST['nama'];
$kelas2 = $_POST['kelas'];
$jurusan2 = $_POST['jurusan'];
$indo2 = $_POST['indo'];
$gris2 = $_POST['gris'];
$mtk2 = $_POST['mtk'];
$pro2 = $_POST['pro'];

$rata = $indo2 + $gris2 + $mtk2 + $pro2 ;
$rata /= 4;

echo "<br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
echo "Biodata <br>";
echo "<table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <Td>$nama2</Td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <Td>$kelas2</Td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>$jurusan2</td>
        </tr>
        <tr>
            <td>Nilai B.indonesia</B></td>
            <td>:</td>
            <td>$indo2</td>
        </tr>
        <tr>
            <td>Nilai B.inggris</td>
            <td>:</td>
            <td>$gris2</td>
        </tr>
        <tr>
            <td>Nilai Matematika</td>
            <td>:</td>
            <td>$mtk2</td>
        </tr>
        <tr>
            <td>Nilai Produktif</td>
            <td>:</td>
            <td>$pro2</td>
        </tr>
        <tr>
            <td>Rata-Rata</td>
            <td>:</td>
            <td>$rata</td>
        </tr>
    </table>";

    if($rata > 75){
        echo "Status : *TUNTAS*";
    }else{
        echo "Status : *BELUM TUNTAS*";
    }

    echo "<br>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>";
}    
?>
</center>