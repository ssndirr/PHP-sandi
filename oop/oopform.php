<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi</h2>
        <form action="" method="post">
            <table>
                     <tr>
                        <td>Panjang</td>
                        <td>:</td>
                        <td><input type="number" name="panjang" id=""></td>
                     </tr>
                     <tr>
                        <td>Lebar</td>
                        <td>:</td>
                        <td><input type="number" name="lebar" id=""></td>
                     </tr>
                     <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Hitung" name="hitung"></td>
                     </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar   = $_POST['lebar'];

    class persegipanjang{
        public $luas;

        public function luas_persegipanjang($panjang2, $lebar2){

            $this->luas = $panjang2 * $lebar2;

            echo "Panjang : ".$panjang2."<br>";
            echo "Lebar   : ".$lebar2."<br>";
            echo "Luasnya : ".$this->luas."<br>";
        }
    }

    $cetak = new persegipanjang();
    echo $cetak->luas_persegipanjang($panjang, $lebar);
}

?>