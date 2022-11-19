<?php

include('includes/header.php');
include('includes/connection.php');

?>
<?php

if (isset($_POST['submit'])) {
    $users_name = $_POST['users_name'];

    $users_email = $_POST['users_email'];
    $users_phone = $_POST['users_phone'];
    $users_password = $_POST['users_password'];
    $passwordagain = $_POST['passwordagain'];
    $md5password = md5($users_password);

    $emptymsg1 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = $emptymsg6 = '';


    if (empty($users_name)) {
        $emptymsg1 = 'Write User Name';
    }

    if (empty($users_email)) {
        $emptymsg3 = 'Write email';
    }
    if (empty($users_phone)) {
        $emptymsg6 = 'Write your Mobile no..';
    }
    if (empty($users_password)) {
        $emptymsg4 = 'Write password';
    }
    if (empty($passwordagain)) {
        $emptymsg5 = 'Write password Again';
    }

    if (!empty($users__name) && !empty($users_email) && !empty($users_phone) && !empty($users_password) && !empty($passwordagain)) {
        if ($users_password !== $passwordagain) {
            $pasmatchmsg = 'Password does not match!';
        } else {
            $pasmatchmsg = '';
            $sql = "INSERT INTO user_registration(users_name,  users_email,  users_phone,users_password) 
						VALUES('$users_name',  '$users_email','$users_phone', '$md5password')";

            if ($conn->query($sql) == TRUE) {
                //header('location:index.php');
                // $_SESSION['signupmsg'] = 'Sign Up Complete. Please Log in now.';
            } else {
                echo 'data not inserted';
            }
        }
    } else {
        $emptymsg = 'Fill up all fields';
    }

}

?>









<div class="container-fluid ">
    <div class="container" style="margin-top:20px">
        <h3 class="text-center">Registration System</h3>
    </div>
    <div class="container" style="margin-top:20px">
        <!-- <div class="row">-->



        <div class="col-md-6">
            <!-- <div class="container-fluid bg-light">-->
            <form action="" method="POST">
                <div class="mt-2 pb-2">
                    <label for="username">User Name:</label>
                    <input type="name" name="users_name" class="form-control" placeholder="Your User Name" value="<?php if (isset($_POST['submit'])) {
                        echo $users_name;
                    } ?>">
                    <span class="text-danger">
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg1;
                        } ?>
                    </span>
                </div>

                <div class="mt-2 pb-2">
                    <label for="email">Email:</label>

                    <input type="email" name="users_email" class="form-control" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])) {
                        echo $users_email;

                    } ?> ">
                    <span class=" text-danger">
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg3;
                        } ?>
                    </span>

                </div>
                <div class="mt-2 pb-2">
                    <label for="phone">Mobile No:</label>

                    <input type="number" name="users_phone" class="form-control" placeholder="Enter your Mobile no."
                        value="<?php if (isset($_POST['submit'])) {
                            echo $users_phone;

                        } ?> ">
                    <span class=" text-danger">
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg6;
                        } ?>
                    </span>

                </div>


                <div class="mt-1 pb-2">
                    <label for="password">Password:</label>
                    <input type="password" name="users_password" class="form-control" placeholder="Enter New password">
                    <span class="text-danger">
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg4;
                        } ?>
                    </span>

                </div>
                <div class="mt-1 pb-2">
                    <label for="password">Password Again:</label>
                    <input type="password" name="passwordagain" class="form-control" placeholder="Enter password Again">
                    <span class="text-danger">
                        <?php if (isset($_POST['submit'])) {
                            echo $emptymsg5 . '' . $pasmatchmsg;
                        } ?>
                    </span>
                </div>
                <div class="mt-1 pb-2">
                    <button name="submit" class="btn btn-success">Sign In</button>
                </div>
                <div class="mt-1 pb-2">
                    Alrady have an account? <a href="login.php" class="text-decoration-none">Login here</a>
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
include('includes/footer.php')

    ?>