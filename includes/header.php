<!DOCTYPE html>
<html lang="en">

<head>
    <title>Siu Admission System</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--link CSS Boostrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



    <!--css link-->

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body>

    <?php

    include('includes/connection.php');
    ?>

    <?php

    ?>
    <div class="sectionheader">
        <nav class="navbar navbar-expand-sm bg-info   shadow-sm ">

            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="images/siumainlogo.png" alt="Logo" style="width:60px;" class=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav  ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Why Siu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Programs</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="login.php" role="button"
                                data-bs-toggle="dropdown">Admission</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"> Undergraduate</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Graduate</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Diploma</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"> Admission Requirment</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">admission Dedlines</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">apply process</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Tutions&Scholarship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>






                <ul class="navbar-nav">


                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="user_registration.php">Registration</a>
                    </li>

                </ul>










            </div>



            </ul>



    </div>
    </nav>
    </div>




    <!--========Login check========-->
    <!--========Login check========-->
    <?php
    function login_check($conn)
    {
        $users_email = "";
        $users_password = "";

        if (isset($_SESSION['user_email']) && isset($_SESSION['users_password'])) {
            $users_email = $_SESSION['users_email'];
            $users_password = $_SESSION['users_password'];
        }
        $sql = "select * from user_registration where users_email='$users_email' and user_password='$passwordmd5' ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0)
            return true;
        else
            return false;
    }
    ?>