<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Tambah Data Barang</h2>
    <form method="POST" action="proses.php">
      <div class="form-group">
        <label for="nomer">Nomor:</label>
        <input type="text" class="form-control" id="nomer" name="nomer" required>
      </div>
      <div class="form-group">
        <label for="nama_merek">Nama Merek:</label>
        <input type="text" class="form-control" id="nama_merek" name="nama_merek" required>
      </div>
      <div class="form-group">
        <label for="warna">Warna:</label>
        <input type="text" class="form-control" id="warna" name="warna" required>
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah:</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
      </div>
      <button name="submit" type="submit" class="btn btn-primary">Submit</button><br>
      <button type="button" class="btn btn-primary" onclick="ulangi()">Ulangi</button><br>
      <button type="button" class="btn btn-primary" onclick="kembali()">Kembali</button>
    </form>
  </div>
</div>
    <script>
        function ulangi() {
            document.getElementById('no').value = '';
            document.getElementById('nama_merek').value = '';
            document.getElementById('warna').value = '';
            document.getElementById('jumlah').value = '';
        }
        
        function kembali() {
            // Lakukan operasi untuk kembali ke halaman sebelumnya
            // Misalnya, menggunakan window.history.back()
            window.history.back();
        }
    </script>
</div>
</body>
</html>