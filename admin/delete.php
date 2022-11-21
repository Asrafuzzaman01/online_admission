<?php
    include("includes/header.php");
    ?>


<?php
$id =$_REQUEST['id'];
$sql = "DELETE  FROM  user_registration WHERE user_id='$id'";



$conn->query($sql);


header('Location:all_register_user.php');
exit;

?>