<?php
include'include/db.php';
$DeleteFromURL=$_GET['Delete'];

mysqli_query($connection,
	"DELETE FROM data WHERE no='$DeleteFromURL'"
);

header("location:index.php");
?>