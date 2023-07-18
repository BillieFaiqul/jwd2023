<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa</title>
</head>
<body>

<h2>Form Pendaftaran Siswa</h2>

<form action="proses.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" required><br><br>

    <label>Jenis Kelamin:</label>
    <input type="radio" id="laki_laki" name="jk" value="Laki-laki" required>
    <label for="laki_laki">Laki-laki</label>
    <input type="radio" id="perempuan" name="jk" value="Perempuan" required>
    <label for="perempuan">Perempuan</label><br><br>

    <label for="agama">Agama:</label>
    <select id="agama" name="agama" required>
        <option value="">Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
    </select><br><br>

    <label for="sekolah_asal">Sekolah Asal:</label>
    <input type="text" id="sekolah_asal" name="sekolah_asal" required placeholder="Nama Sekolah"><br><br>

    <input type="submit" value="Daftar">
    <input type="reset" name="Submit" value="Ulangi">
    <a href="index.php"><button type="button">Kembali</button></a>
</form>

</body>
</html>
	    