<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <center>
                <h5 class="mb-0 mt-1">Data Diri Calon Pendaftar</h5>
                <small>(Form yang bertanda <span class="text-warning">*</span> wajib di isi)</small>
            </center>
            <div class="card-body">
                <form action="latihan12oop.php" method="post">
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan <span class="text-danger">*</span></label>
                        <select id="jurusan" class="form-select" name="jurusan" required>
                            <option selected>Pilih Jurusan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namalengkap" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="namalengkap" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="lakiLaki" value="Laki-Laki" name="jkkelamin" checked>
                                <label class="form-check-label" for="lakiLaki">Laki - Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan" name="jkkelamin">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tempatLahir" placeholder="tempatlahir" name="tempat" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggallahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="noHP" class="form-label">Nomor HP siswa yang bisa dihubungi <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="noHP" placeholder="HP" name="nohp" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        <small class="form-text text-muted">Setelah melakukan pendaftaran, anda akan menerima softcopy form pendaftaran yang kami kirimkan ke alamat email anda</small>
                    </div>
                
            </div>
        </div>
    </div>

    

    <div class="container mt-5">
        <div class="card shadow-sm">
            <center>
                <h5 class="mb-0 mt-1">Alamat Calon Pendaftar</h5>
            </center>
            <div class="card-body">
                
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi <span class="text-danger">*</span></label>
                        <select id="provinsi" class="form-select" name="provinsi" required>
                            <option selected>Pilih Provinsi</option>
                            <option value="-">Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kabupatenKota" class="form-label">Kab / Kota: <span class="text-danger">*</span></label>
                        <select id="kabupatenKota" class="form-select" name="kabk" required>
                            <option selected>Pilih Provinsi dahulu</option>
                            <option value="-">Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan <span class="text-danger">*</span></label>
                        <select id="kecamatan" class="form-select" name="keca" required>
                            <option selected>Pilih Kota dahulu</option>
                            <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="desaKelurahan" class="form-label">Desa / Kelurahan <span class="text-danger">*</span></label>
                        <select id="desaKelurahan" class="form-select" name="desa" required>
                            <option selected>Pilih Kecamatan dahulu</option>
                            <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span></label>
                        <textarea id="alamat" name="alamt" class="form-control" rows="3" placeholder="Tidak perlu lagi menulis provinsi, kota, kecamatan & kelurahan" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="text" name="pos" class="form-control" id="kodePos" placeholder="Kode Pos">
                    </div>
                    
               
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <center>
                <h5 class="mb-0 mt-1">Data Asal Sekolah</h5>
               
            </center>
            <div class="card-body">
                
                   
                   
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Asal Sekolah <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="namaLengkap" name="namasekolah" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Alamat Sekolah <span class="text-danger">*</span></label>
                        <textarea id="alamat" class="form-control" rows="3" name="alamtsekolah" placeholder="Alamat Lengkap Asal Sekolah" required></textarea>
                    </div>
                
            </div>
        </div>
    </div> 

    
    <div class="container mt-5">
        <div class="card shadow-sm">
            <center>
                <h5 class="mb-0 mt-2">Data Orang Tua</h5>
            </center>
            <div class="card-body">
                
                    <div class="mb-3 d-flex">
                        <div class="me-2">
                            <label for="hubungan" class="form-label">Nama Lengkap Ayah / Ibu / Wali</label>
                            <select id="hubungan" class="form-select" name="wali" required>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Wali">Wali</option>
                            </select>
                        </div>
                        <div class="flex-grow-1">
                            <label for="namaLengkap" class="form-label"> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="namaLengkap" placeholder="Nama Lengkap" name="namawali" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan Ayah / Ibu / Wali <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="kerjanortu" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorHP" class="form-label">Nomor HP yang bisa dihubungi <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="nomorHP" placeholder="Nomor HP" name="noortu" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                        <textarea id="alamatLengkap" class="form-control" rows="3" placeholder="Alamat Lengkap" name="alamatortu" required></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan & Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>