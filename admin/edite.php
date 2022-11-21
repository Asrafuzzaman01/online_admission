<?php
include('includes/header.php');



?>
<?php

            $id=$_REQUEST['id'];

  
if (isset($_POST['submit'])) {
    $users_name = $_POST['users_name'];

    $users_email = $_POST['users_email'];
    $users_phone = $_POST['users_phone'];
    $users_password = $_POST['users_password'];
   
   // $md5password = md5($users_password);

    
		$sql="update user_registration set users_name='$users_name',users_email='$users_email', users_phone='$users_phone', users_password='$password', where  user_id='$id'";

		if($conn->query($sql)==true){
			echo "update successfully";
            header('location:index.php');
		}
	   else {
		echo "Sorry, there was an error update registration.";
	  }
	 
	
}
	
	  $selectquery = "SELECT user_registration.* FROM user_registration WHERE user_id=$id";
	
	
	 $result  = $conn->query($selectquery);
	// $row = $result->fetch_assoc();
	 //if ($result->num_rows > 0) {

	 $row = $result->fetch_assoc();
	 

	
	

?>





<div class="container-fluid ">
    <div class="container" style="margin-top:20px">
        <h3 class="text-center">Update User Registation</h3>
    </div>
    <div class="container" style="margin-top:20px">
        <!-- <div class="row">-->



        <div class="col-md-6">
            <!-- <div class="container-fluid bg-light">-->
            <form action="" method="POST">
                <div class="mt-2 pb-2">
                    <label for="username">User Name:</label>
                    <input type="text" class="form-control" name="users_name" value="<?php    echo $row['users_name']; ?>">
                   
                </div>

                <div class="mt-2 pb-2">
                    <label for="email">Email:</label>

                    <input type="email"  class="form-control" name="users_email"  value="<?php    echo $row['users_email']; ?>"> 
                    

                </div>
                <div class="mt-2 pb-2">
                    <label for="phone">Mobile No:</label>

                    <input type="number"  class="form-control" name="users_phone"  value="<?php    echo $row['users_phone']; ?>"> 
                    

                </div>


                <div class="mt-2 pb-2">
                    <label for="phone">Password:</label>

                    <input type="password"  class="form-control" name="users_password"  value="<?php    echo $row['users_password']; ?>"> 
                    

                </div>
                
                <div class="mt-1 pb-2">
                    <button name="submit" class="btn btn-success" value="submit">Update</button>
                </div>
              
        </div>
    </div>
    <!--<div class="col-sm-4">

                //.......
        </div>-->
    <!--< /div>-->
</div>
</div>



<?php
 include("includes/footer.php");
 ?>