<?php
include'include/db.php';
$DeleteFromURL=$_GET['Delete'];

mysqli_query($connection,
	"DELETE FROM printer WHERE no='$DeleteFromURL'"
);

header("location:index.php");
?>