<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <img src="s.jfif" alt="" width="120x">
        <form action="validasi5.php" method="POST">
    <h3>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM</h3>

    <table>
        <tr>
            <td align="left" colspan="2">Data Penggajihan</td>
        </tr>
        <tr>
            <td colspan="2">No <br> <input type="number" name="no" value="" placeholder="No" style="width:100%;" required=""></td>
        </tr>
        <tr>
            <td colspan="2">nama <br> <input type="text" name="nama" value="" placeholder="Nama" style="width:100%;" required=""></td>
        </tr>
        <tr>
            <td colspan="2">Unit Pendidikan <br>
            <select name="unit" id="" value="" style="width:100%;" required="">
            <option value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMK">SMK</option>
            </select></td>
        </tr>
        <tr>
            <td colspan="2">Tanggal Gaji <br> <input type="date" name="tgl" id="" value="" style="width:100%;" required=""></td>
        </tr>
        <tr>
            <td><h4>GAJI</h4></td>
            <td><h4>POTONGAN</h4></td>
        </tr>
        <tr>
            <td>Jabatan <br> <select name="jabatan" id="" value="" style="width:100%;" required="">
                <option value="">Pilih Jabatan</option>
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakasek">Wakasek</option>
                <option value="Guru">Guru</option>
                <option value="Ob">Ob</option>
            </select></td>
            <td>BPJS <br> <input type="number" name="bpjs" value="" required=""></td>
        </tr>
        <tr>
            <td>Lama Kerja <br> <input type="number" name="lamak" value="" placeholder="Lama Kerja" required=""></td>
            <td>Pinjaman <br> <input type="number" name="pinjaman" value="" placeholder="Pinjaman" required=""></td>
        </tr>
        <tr>
            <td>Status Kerja <br> <select name="status" id="" value="" style="width:100%;" required="">
                <option value="">Pilih Status Kerja</option>
                <option value="Tetap">Tetap</option>
                <option value="Kontrak">Kontrak</option>
            </select></td>
            <td>Tabungan <br> <input type="number" value="" name="tabungan" value="" placeholder="Tabungan" required=""></td>
        </tr>
        <tr>
            <td></td>
            <td>Lainya <br> <input type="number" name="lainya" value="" placeholder="Lainya" required=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="proses" value="simpan"></td>
        </tr>
    </table>

    </form>
    </center>
</body>
</html>