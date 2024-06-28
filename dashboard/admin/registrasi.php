<?php
session_start();
if (isset($_SESSION['admin'])) {
    header('location:home.php');
}
?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Taman Wanasutan Asri Admin</b>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Registrasi Akun</p>

            <form action="register_process.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="photo" accept="image/*" required>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block" name="register"><i class="fa fa-user-plus"></i> Register</button>
                    </div>
                </div>
            </form>

            <div class="back-to-home">
                <a href="login.php" class="btn btn-primary"><i class="fa fa-home"></i> Back to Home</a>
            </div>
        </div>

        <?php
        if (isset($_SESSION['error'])) {
            echo "
                <div class='callout callout-danger text-center mt20'>
                    <p>" . $_SESSION['error'] . "</p> 
                </div>
            ";
            unset($_SESSION['error']);
        }
        ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>
</html>
