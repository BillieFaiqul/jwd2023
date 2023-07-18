<?php require_once("include/db.php"); ?>
<?php require_once("include/sessions.php"); ?>
<?php require_once("include/functions.php"); ?>
<?php
if(isset($_POST["Submit"])){
    $NamaMerek=mysqli_real_escape_string($connection, $_POST["NamaMerek"]);
    $Warna=mysqli_real_escape_string($connection, $_POST["Warna"]);
    $Jumlah=mysqli_real_escape_string($connection, $_POST["Jumlah"]);
    global $connection;
    $EditFromURL=$_GET['Edit'];
    $Query="UPDATE printer SET nama_merek='$NamaMerek',warna='$Warna',jumlah='$Jumlah' WHERE no='$EditFromURL'";
    $Execute=mysqli_query($connection, $Query);
    if($Execute){
        $_SESSION["SuccessMessage"]="Data berhasil di-edit";
        Redirect_to("index.php");
    }else{
        $_SESSION["ErrorMessage"]="Data gagal di-edit, Coba Lagi!";
        Redirect_to("index.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Data</title>
</head>
<body>

<h1>Edit Data</h1>
<div>
	<?php
        $SearchQueryParameter=$_GET['Edit'];
        $connection;
        $Query="SELECT * FROM printer WHERE no='$SearchQueryParameter'";
        $Execute=mysqli_query($connection, $Query);
        while($DataRows=mysqli_fetch_array($Execute)){
            $NamaMerekUpdated=$DataRows['nama_merek'];
            $WarnaUpdated=$DataRows['warna'];
            $JumlahUpdated=$DataRows['jumlah'];
        }           
    ?>
    <form action="editdata.php?Edit=<?php echo $SearchQueryParameter; ?>" method="post">
    <fieldset>
    	<table>
    		<tr>
    			<td><label for="nama_merek">Nama Merek: </label></td>
           		<td><input value="<?php echo $NamaMerekUpdated ?>" class="form-control" type="text" name="NamaMerek" id="nama_merek"></td>
           	</tr>
           	<tr>
            	<td><label for="warna">Warna: </label></td>
           		<td><input value="<?php echo $WarnaUpdated ?>" class="form-control" type="text" name="Warna" id="warna"></td>
            </tr>
            <tr>
            	<td><label for="jumlah">Jumlah: </label></td>
           		<td><input value="<?php echo $JumlahUpdated ?>" class="form-control" type="text" name="Jumlah" id="jumlah"></td>
           	<tr>
    		<tr><td><input type="Submit" name="Submit" value="Edit Data"></td></tr>
    	</table>
    </fieldset>
</div>

</body>
</html>