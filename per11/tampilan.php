<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Siswa Pendaftar</title>
	<!-- Tambahkan link CSS Bootstrap di sini -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<h1 class="mt-5">Daftar Siswa Pendaftar</h1>

	<?php echo Message();
    	echo SuccessMessage();  
	?>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Alamat</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Agama</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					global $connection;
					$ViewQuery = "SELECT * FROM data ORDER BY no ASC";
            		$Execute = mysqli_query($connection, $ViewQuery);
            		$SrNo = 0;
            		while ($DataRows = mysqli_fetch_array($Execute)) {
                		$No = $DataRows["no"];   
                		$Nama = $DataRows["nama"];   
                		$Alamat = $DataRows["alamat"];   
                		$Jk = $DataRows["jk"];
						$Agama = $DataRows["agama"];
                		$SrNo++;
				?>
				<tr>
					<th scope="row"><?php echo $SrNo; ?></th>
					<td><?php echo $Nama; ?></td>
					<td><?php echo $Alamat; ?></td>
					<td><?php echo $Jk; ?></td>
					<td><?php echo $Agama; ?></td>
					<td>
						<a href="editdata.php?Edit=<?php echo $No; ?>" class="btn btn-primary">Edit</a>
						<a href="deletedata.php?Delete=<?php echo $No; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<p><a href="tambah.php" class="btn btn-success">Tambah Data</a></p>
</div>

<!-- Tambahkan script JavaScript Bootstrap di sini -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
