<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php
if(isset($_POST["Submit"])){
    $Nama=mysqli_real_escape_string($connection, $_POST["nama"]);
    $Alamat=mysqli_real_escape_string($connection, $_POST["alamat"]);
    $Jk=mysqli_real_escape_string($connection, $_POST["jk"]);
	$Agama=mysqli_real_escape_string($connection, $_POST["agama"]);
	$Sekolah=mysqli_real_escape_string($connection, $_POST["sekolah_asal"]);
    global $connection;
    $Query="INSERT INTO data(nama,alamat,jk,agama,sekolah_asal)VALUES('$Nama','$Alamat','$Jk','$Agama','$Sekolah')";
    $Execute=mysqli_query($connection, $Query);
    if($Execute){
        $_SESSION["SuccessMessage"]="Data berhasil ditambahkan";
        Redirect_to("tambah.php");
    }else{
        $_SESSION["ErrorMessage"]="Data gagal ditambahkan, Coba Lagi!";
        Redirect_to("tambah.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Siswa Baru</title>
    <!-- Link Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Form Pendaftaran Siswa Baru</h2>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required placeholder="Alamat">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="Laki-laki" required>
                <label class="form-check-label" for="laki_laki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" required>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="agama">Agama:</label>
            <select id="agama" name="agama" class="form-control" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" id="sekolah_asal" name="sekolah_asal" class="form-control" required placeholder="Nama Sekolah">
        </div>

        <button name="Submit"  type="Submit" class="btn btn-primary">Daftar</button>
		<button name="Submit"  type="reset" class="btn btn-primary">Ulangi</button>
		<a href="menu.php"><button type="button" class="btn btn-primary">Kembali</button></a>
    </form>
</div>

<!-- Link Bootstrap JS (untuk beberapa fitur Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>