<?php
include("includes/header.php");
include("includes/connection.php"); ?>


<?php
$user_id = $_REQUEST['id'];
$sql = "delete from user_registration where user_registration. user_id=$id";



$conn->query($sql);


header('Location:all_register_user.php');
exit;

?>