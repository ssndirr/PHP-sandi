<?php

class ppdb{

    public function data_diri($nama,$jurusan,$jk,$tpl,$tl,$noh,$email){
        echo "Nama Lengkap : $nama <br>";
        echo "Jurusan : $jurusan <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "Tempat Lahir : $tpl <br>";
        echo "Tanggal Lahir : $tl <br>";
        echo "No Hp Siswa : $noh <br>";
        echo "Email Siswa : $email <br><br>";
    }
    public function alamat_calon($prov,$kab,$kec,$des,$alamat,$kodp){
        echo "Provinsi : $prov <br>";
        echo "Kab / Kota : $kab <br>";
        echo "Kecamatan : $kec <br>";
        echo "Desa / Kelurahan : $des <br>";
        echo "Alamat  : $alamat <br>";
        echo "Kode Pos : $kodp <br><br>";
    }
    public function Data_asalskola($namaaskul,$alamatskola){
        echo "Nama Asal Sekola : $namaaskul <br>";
        echo "Alamat Sekola : $alamatskola <br><br>";
    }
    public function data_ortu($namaortu,$kerjaan,$noortu,$alamatortu){
        echo "Nama Lengkap Ayah / Ibu / Wali : $namaortu <br>";
        echo "Pekerjaan Ayah / Ibu /Wali : $kerjaan <br>";
        echo "No Hp Yang Bisa Dihubungi : $noortu <br>";
        echo "Alamat Lengkap : $alamatortu <br><br>";
    }
}

$cetak = new ppdb();
echo "<b>Data Diri Calon Pendaftaran (Form Yang Ada Wajib Di Isi)</b><br>";
echo $cetak->data_diri("Siwhite","Teknik Informatika","Laki-Laki","Bandung","03 desember 2000","088936549023","swhite@gmail.com");
echo "<b>Alamat Calon Pendaftar </b><br>";
echo $cetak->alamat_calon("Jawa Barat","Bandung","Baleendah","Rancamanyar","Pameungpeuk","4093");
echo "<b>Data Asal Sekolah </b><br>";
echo $cetak->Data_asalskola("Smp Mana Aja","Ujung Dunia");
echo "<b>Data Orang Tua </b><br>";
echo $cetak->Data_ortu("kusdi","Pemilik Negara","082931842754","Di Atas gunung Guntur");

?>