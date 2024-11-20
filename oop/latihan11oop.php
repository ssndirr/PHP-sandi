<table border="1" cellspacing="0">
    <tr>
        <td>Mapel</td>
        <td>Harian</td>
        <td>Tugas</td>
        <td>UTS</td>
        <td>UAS</td>
        <td>Rata-Rata</td>
        <td>Grade</td>
    </tr>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $harianmtk = $_POST['harianmtk'];
    $tugasmtk = $_POST['tugasmtk'];
    $utsmtk = $_POST['utsmtk'];
    $uasmtk = $_POST['uasmtk'];
    $harianindo = $_POST['harianindo'];
    $tugasindo = $_POST['tugasindo'];
    $utsindo = $_POST['utsindo'];
    $uasindo = $_POST['uasindo'];
    $harianingris = $_POST['harianingris'];
    $tugasingris = $_POST['tugasingris'];
    $utsingris = $_POST['utsingris'];
    $uasingris = $_POST['uasingris'];
    $harianpro = $_POST['harianpro'];
    $tugaspro = $_POST['tugaspro'];
    $utspro = $_POST['utspro'];
    $uaspro = $_POST['uaspro'];

    class raport{

        public $mtk;
        public $indo;
        public $ingris;
        public $produktif;

        public function datasiswa($nama2, $kelas2, $jurusan2){
            echo "Nama :".$nama2."<br>";
            echo "Kelas :".$kelas2."<br>";
            echo "Jurusan :".$jurusan2."<br>";

        }

        public function nilaimtk($harianmtk2,$tugasmtk2,$utsmtk2,$uasmtk2){
        $this->mtk ="Matematika";
          $ratamtk = $harianmtk2 + $tugasmtk2 + $utsmtk2 + $uasmtk2 / 4 ;
          echo "<tr>
                <td>$this->mtk</td>
                <td>$harianmtk2</td>
                <td>$tugasmtk2</td>
                <td>$utsmtk2</td>
                <td>$uasmtk2</td>
                <td>$ratamtk</td>
                ";
                if ($ratamtk >= 75) {
                    echo "<td>Tuntas</td></tr>";
                }else {
                    echo "<td>Tidak Tuntas</td></tr>";
                }
       
        }
        public function nilaiindo($harianindo2,$tugasindo2,$utsindo2,$uasindo2){
            $this->indo ="Indonesia";
              $rataindo = $harianindo2 + $tugasindo2 + $utsindo2 + $uasindo2 / 4 ;
              echo "<tr>
                    <td>$this->indo</td>
                    <td>$harianindo2</td>
                    <td>$tugasindo2</td>
                    <td>$utsindo2</td>
                    <td>$uasindo2</td>
                    <td>$rataindo</td>
                    ";
                    if ($rataindo >= 75) {
                        echo "<td>Tuntas</td></tr>";
                    }else {
                        echo "<td>Tidak Tuntas</td></tr>";
                    }
           
        }
        public function nilaiingris($harianingris2,$tugasingris2,$utsingris2,$uasingris2){
            $this->ingris ="Inggris";
              $rataingris = $harianingris2 + $tugasingris2 + $utsingris2 + $uasingris2 / 4 ;
              echo "<tr>
                    <td>$this->ingris</td>
                    <td>$harianingris2</td>
                    <td>$tugasingris2</td>
                    <td>$utsingris2</td>
                    <td>$uasingris2</td>
                    <td>$rataingris</td>
                    ";
                    if ($rataingris >= 75) {
                        echo "<td>Tuntas</td></tr>";
                    }else {
                        echo "<td>Tidak Tuntas</td></tr>";
                    }
           
        }
        public function nilaipro($harianpro2,$tugaspro2,$utspro2,$uaspro2){
            $this->pro ="Produktif";
              $ratapro = $harianpro2 + $tugaspro2 + $utspro2 + $uaspro2 / 4 ;
              echo "<tr>
                    <td>$this->pro</td>
                    <td>$harianpro2</td>
                    <td>$tugaspro2</td>
                    <td>$utspro2</td>
                    <td>$uaspro2</td>
                    <td>$ratapro</td>
                    ";
                    if ($ratapro >= 75) {
                        echo "<td>Tuntas</td></tr></table>";
                    }else {
                        echo "<td>Tidak Tuntas</td></tr></table>";
                    }
           
        }

    }
    $cetak = new raport();
    echo $cetak->datasiswa($nama,$kelas,$jurusan);
    echo $cetak->nilaimtk($harianmtk,$tugasmtk,$utsmtk,$uasmtk);
    echo $cetak->nilaiindo($harianindo,$tugasindo,$utsindo,$uasindo);
    echo $cetak->nilaiingris($harianingris,$tugasingris,$utsingris,$uasingris);
    echo $cetak->nilaipro($harianpro,$tugaspro,$utspro,$uaspro);

}
?>