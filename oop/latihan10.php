<?php

class pengajihan{

    public $gaji;
    public $tunja;
    public $potongan;
    public $total;

    public function gaji($nama,$jabatan){
        
        if ($jabatan === "Direktur") {
            $this->gaji = 10000000;
        } elseif($jabatan === "Manager") {
            $this->gaji = 7500000;
        }elseif($jabatan === "Karyawan") {
            $this->gaji = 5000000;
        }elseif ($jabatan === "Ob") {
            $this->gaji = 2500000;
        }else{
            $this->gaji = 0;
        }
        echo "<b>Gaji pokok</b> <br><br>";
        echo "Nama Karyawan : $nama<br>";
        echo "Jabatan : $jabatan<br>";
        echo "Gaji Pokok : $this->gaji<br>";
        }
    

    public function tunjangank($pendidikan){

        if ($pendidikan == "S1"){
            $this->tunja = 1000000;
        }elseif ($pendidikan == "Sma") {
            $this->tunja = 750000;
        }elseif ($pendidikan == "Smp") {
            $this->tunja = 500000;
        }elseif ($pendidikan == "Sd") {
            $this->tunja = 250000;
        }else {
            $this->tunja = 0;
        }
        echo "<b>Tunjangan Pendidikan</b> <br><br>";
        echo "Pendidikan : $pendidikan<br>";
        echo "Tunjangan : $this->tunja<br>";
    }
    public function ptong($tabungan,$pinjaman){
        
        echo "<b>Potongan</b><br><br>";
        echo "Tabungan : $tabungan<br>";
        echo "Pinjaman : $pinjaman<br>";
        $this->potongan = $tabungan + $pinjaman;
        echo "Total Potongan : $this->potongan<br>";
    }
    public function bersih(){

        echo "<b>Total Gaji Bersih</b><br><br>";
        $this->total = $this->gaji + $this->tunja - $this->potongan;
        echo "Total Gaji Bersih : $this->total<br>";
    }
}
 
$cetak = new pengajihan();
echo "<center><b>Pengajihan Karyawan</b></center><br>";
echo $cetak->gaji("sndi","Direktur");
echo "<hr>";
echo $cetak->tunjangank("S1");
echo "<hr>";
echo $cetak->ptong("2000000","3000000");
echo "<hr>";
echo $cetak->bersih();
echo "<hr>";

?>