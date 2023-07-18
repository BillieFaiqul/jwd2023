<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/functions.php"); ?>

<?php
if(isset($_POST["Submit"])){
    $No=mysqli_real_escape_string($connection, $_POST["no"]);
    $NamaMerek=mysqli_real_escape_string($connection, $_POST["nama_merek"]);
    $Warna=mysqli_real_escape_string($connection, $_POST["warna"]);
    $Jumlah=mysqli_real_escape_string($connection, $_POST["jumlah"]);
    global $connection;
    $Query="INSERT INTO printer(no,nama_merek,warna,jumlah)VALUES('$No','$NamaMerek','$Warna','$Jumlah')";
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Barang</title>
</head>
<body>

<H1>Tambah Data Barang</H1>
<div>
    <?php echo Message();
          echo SuccessMessage();  
    ?>
</div>

<form action="tambah.php" method="post">
	<fieldset>
		<table>
			<tr>
				<td>No:</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td>Nama Merek:</td>
				<td><input type="text" name="nama_merek"></td>
			</tr>
			<tr>
				<td>Warna:</td>
				<td><input type="text" name="warna"></td>
			</tr>
			<tr>
				<td>Jumlah:</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="Submit" name="Submit" value="Simpan">
					<input type="reset" name="Submit" value="Ulangi">
					<a href="index.php"><button type="button">Kembali</button></a>
				</td>
			</tr>
		</table>
	</fieldset>
</form>

</body>
</html>