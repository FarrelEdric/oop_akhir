<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include "function/pesan_kilat.php";
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Jika sudah login, redirect ke index.php
    header("location:admin/");
    exit();
}
if(isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] === true) {
    // Jika sudah login, redirect ke index.php
    header("location:user/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Page Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">WELCOME TO</h1>
                                        <h1 class="h4 text-gray-900 mb-4">INVENTORY JTI !</h1>
                                    </div>
                                    <?php
                                    if(isset($_SESSION['_flashdata'])){
                                        foreach($_SESSION['_flashdata'] as $key => $val){
                                            echo get_flashdata($key);
                                        }
                                    }
                                    ?>
                                    <form method="post" class="user" action="cek_login.php" >
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputText" aria-describedby="textHelp" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>