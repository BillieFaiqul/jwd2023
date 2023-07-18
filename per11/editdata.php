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
    $EditFromURL=$_GET['Edit'];
    $Query="UPDATE data SET nama='$Nama',alamat='$Alamat',jk='$Jk',agama='$Agama' WHERE no='$EditFromURL'";
    $Execute=mysqli_query($connection, $Query);
    if($Execute){
        $_SESSION["SuccessMessage"]="Data berhasil di-edit";
        Redirect_to("tampilan.php");
    }else{
        $_SESSION["ErrorMessage"]="Data gagal di-edit, Coba Lagi!";
        Redirect_to("tampilan.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data</title>
	<!-- Tambahkan link CSS Bootstrap di sini -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1 class="mt-5">Edit Data</h1>
	<div>
		<?php
			$SearchQueryParameter=$_GET['Edit'];
			$connection;
			$Query="SELECT * FROM data WHERE no='$SearchQueryParameter'";
			$Execute=mysqli_query($connection, $Query);
			while($DataRows=mysqli_fetch_array($Execute)){
				$NamaUpdated=$DataRows['nama'];
				$AlamatUpdated=$DataRows['alamat'];
				$JkUpdated=$DataRows['jk'];
				$AgamaUpdated=$DataRows['agama'];
				$SekolahUpdated=$DataRows['sekolah_asal'];
			}
		?>
		<form action="editdata.php?Edit=<?php echo $SearchQueryParameter; ?>" method="post">
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input value="<?php echo $NamaUpdated ?>" type="text" id="nama" name="nama" class="form-control" required placeholder="Nama Lengkap">
			</div>

			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<input value="<?php echo $AlamatUpdated ?>" type="text" id="alamat" name="alamat" class="form-control" required placeholder="Alamat">
			</div>

			<div class="form-group">
				<label>Jenis Kelamin:</label><br>
				<div class="form-check form-check-inline">
					<input value="Laki-laki" class="form-check-input" type="radio" name="jk" id="laki_laki" value="Laki-laki" required <?php if ($JkUpdated == "Laki-laki") echo "checked"; ?>>
					<label class="form-check-label" for="laki_laki">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input value="Perempuan" class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan" required <?php if ($JkUpdated == "Perempuan") echo "checked"; ?>>
					<label class="form-check-label" for="perempuan">Perempuan</label>
				</div>
			</div>

			<div class="form-group">
				<label for="agama">Agama:</label>
				<select id="agama" name="agama" class="form-control" required>
					<option value="">Pilih Agama</option>
					<option value="Islam" <?php if ($AgamaUpdated == "Islam") echo "selected"; ?>>Islam</option>
					<option value="Kristen" <?php if ($AgamaUpdated == "Kristen") echo "selected"; ?>>Kristen</option>
					<option value="Katolik" <?php if ($AgamaUpdated == "Katolik") echo "selected"; ?>>Katolik</option>
					<option value="Hindu" <?php if ($AgamaUpdated == "Hindu") echo "selected"; ?>>Hindu</option>
					<option value="Buddha" <?php if ($AgamaUpdated == "Buddha") echo "selected"; ?>>Buddha</option>
					<option value="Konghucu" <?php if ($AgamaUpdated == "Konghucu") echo "selected"; ?>>Konghucu</option>
				</select>
			</div>

			<div class="form-group">
				<label for="sekolah_asal">Sekolah Asal:</label>
				<input value="<?php echo $SekolahUpdated ?>" type="text" id="sekolah_asal" name="sekolah_asal" class="form-control" required placeholder="Nama Sekolah">
			</div>

			<button name="Submit" type="Submit" class="btn btn-primary">Edit</button>
		</form>
	</div>
</div>

<!-- Tambahkan script JavaScript Bootstrap di sini -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
