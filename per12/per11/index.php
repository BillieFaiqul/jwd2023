<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Printer</title>
</head>
<body>

<H1>Daftar Printer</H1>

<?php echo Message();
    echo SuccessMessage();  
?>

<div>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama Merek</td>
			<td>Warna</td>
			<td>Jumlah</td>
			<td>Aksi</td>
		</tr>
		<?php
			global $connection;
			$ViewQuery="SELECT * FROM printer ORDER BY no asc";
            $Execute=mysqli_query($connection, $ViewQuery);
            $SrNo=0;
            while($DataRows=mysqli_fetch_array($Execute)){
                $No=$DataRows["no"];   
                $NamaMerek=$DataRows["nama_merek"];   
                $Warna=$DataRows["warna"];   
                $Jumlah=$DataRows["jumlah"];
                $SrNo++;
		?>
		<tr>
			<td><?php echo $SrNo; ?></td>
            <td><?php echo $NamaMerek; ?></td>
            <td><?php echo $Warna; ?></td>
            <td><?php echo $Jumlah; ?></td>
            <td>
            	<a href="editdata.php?Edit=<?php echo $No; ?>"><span>Edit</span></a>
            	<a href="deletedata.php?Delete=<?php echo $No; ?>"><span onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete</span></a></td>
		<?php } ?>
		</tr>
	</table>
</div>

<p><a href="tambah.php">Tambah Data</a></p>

</body>
</html>