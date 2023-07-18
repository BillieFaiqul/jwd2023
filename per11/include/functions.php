<?php require_once("db.php"); ?>
<?php require_once("sessions.php"); ?>

<?php
function Redirect_to($New_Location){
    header("Location:".$New_Location);
    exit;
}

?>