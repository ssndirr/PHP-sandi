<center>
<?php
if (isset($_POST['simpan'])) {
    $jurusan = $_POST['jurusan'];
    $namalengkap = $_POST['namalengkap'];
    $jenisk = $_POST['jkkelamin'];
    $tempat_L = $_POST['tempat'];
    $tanggal_L = $_POST['tanggallahir'];
    $nohp_siswa = $_POST['nohp'];
    $emails = $_POST['email'];
    $provinsi = $_POST['provinsi'];
    $kabk = $_POST['kabk'];
    $keca = $_POST['keca'];
    $desa = $_POST['desa'];
    $alamt = $_POST['alamt'];
    $kode = $_POST['pos'];
    $asal_sekolah = $_POST['namasekolah'];
    $alamat_sekolah = $_POST['alamtsekolah'];
    $namaortu = $_POST['wali'];
    $namalengkaportu = $_POST['namawali'];
    $kerjanortu = $_POST['kerjanortu'];
    $no_ortu = $_POST['noortu'];
    $alamat_ortu = $_POST['alamatortu'];
}

class ppdb{

public function data_diri($jurusan,$nama,$jk,$tpl,$tl,$noh,$email){
    echo "<tr><td colspan='2'><b>Data Diri Calon Pendaftaran </b></td></tr>";
    echo "<table align='center'><tr><td>Jurusan :</td> <td>$jurusan</td></tr>";
    echo "<tr><td>Nama Lengkap :</td> <td>$nama </td></tr>";
    echo "<tr><td>Jenis Kelamin :</td> <td>$jk </td></tr>";
    echo "<tr><td>Tempat Lahir :</td> <td>$tpl </td></tr>";
    echo "<tr><td>Tanggal Lahir :</td> <td>$tl </td></tr>";
    echo "<tr><td>No Hp Siswa :</td> <td>$noh </td></tr>";
    echo "<tr><td>Email Siswa :</td> <td>$email </td></tr>";
}
public function alamat_calon($prov,$kab,$kec,$des,$alamat,$kodp){
    echo "<tr><td colspan='2'><b>Alamat Calon Pendaftar</b></td></tr>";
    echo "<tr><td>Provinsi :</td> <td>$prov </td></tr>";
    echo "<tr><td>Kab / Kota :</td> <td>$kab </td></tr>";
    echo "<tr><td>Kecamatan :</td> <td>$kec </td></tr>";
    echo "<tr><td>Desa / Kelurahan :</td> <td>$des </td></tr>";
    echo "<tr><td>Alamat :</td> <td>$alamat </td></tr>";
    echo "<tr><td>Kode Pos :</td> <td>$kodp </td></tr>";
}
public function Data_asalskola($namaaskul,$alamatskola){
    echo "<tr><td align='right'><b>Data Asal Sekolah</b></td></tr>";
    echo "<tr><td>Nama Asal Sekolah :</td> <td>$namaaskul </td></tr>";
    echo "<tr><td>Alamat Sekolah :</td> <td>$alamatskola </td></tr>";
}
public function data_ortu($namaortu,$namalengkaportu2,$kerjaan,$noortu,$alamatortu){
    echo "<tr><td align='right'><b>Data Orang Tua </b></td></tr>";
    echo "<tr><td>Wali Ayah / Ibu :</td> <td>$namaortu </td></tr>";
    echo "<tr><td>Nama Lengkap Ayah / Ibu :</td> <td>$namalengkaportu2</td></tr>";
    echo "<tr><td>Pekerjaan Ayah / Ibu /Wali :</td> <td>$kerjaan </td></tr>";
    echo "<tr><td>No Hp Yang Bisa Dihubungi :</td> <td>$noortu </td></tr>";
    echo "<tr><td>Alamat Lengkap :</td> <td>$alamatortu </td></tr></table>";
}
}

$cetak = new ppdb();
echo $cetak->data_diri($jurusan,$namalengkap,$jenisk,$tempat_L,$tanggal_L,$nohp_siswa,$emails);
echo $cetak->alamat_calon($provinsi,$kabk,$keca,$desa,$alamt,$kode);
echo $cetak->Data_asalskola($asal_sekolah,$alamat_sekolah);
echo $cetak->Data_ortu($namaortu,$namalengkaportu,$kerjanortu,$no_ortu,$alamat_ortu);

?></center>