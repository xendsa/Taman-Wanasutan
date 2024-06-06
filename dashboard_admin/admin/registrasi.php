<?php
session_start();
if(isset($_SESSION['admin'])){
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

            <form action="register_process.php" method="POST"  enctype="multipart/form-data">
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
            if(isset($_SESSION['error'])){
                echo "
                    <div class='callout callout-danger text-center mt20'>
                        <p>".$_SESSION['error']."</p> 
                    </div>
                ";
                unset($_SESSION['error']);
            }
        ?>
    </div>

    <?php include 'includes/scripts.php' ?>
</body>
</html>

<style>
body {
    background-image: url('background_taman.png'); /* Path relatif */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    height: 100vh;
}

.login-box {
    width: 360px;
    margin: 7% auto;
    padding: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-logo {
    font-size: 2em;
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.login-box-body {
    padding: 20px;
}

.login-box-msg {
    margin: 0;
    text-align: center;
    padding: 0 20px 20px;
    font-size: 1.1em;
    color: #666;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    height: 40px;
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 1em;
    width: 100%;
}

.btn {
    border-radius: 5px;
    font-size: 1em;
    padding: 10px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-success {
    background-color: #28a745;
    border-color: #28a745;
}

.btn-success:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.callout-danger {
    border-color: #f0ad4e;
    color: #a94442;
    background-color: #f2dede;
    padding: 10px;
    border-radius: 5px;
    margin-top: 20px;
}

.glyphicon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
}

.has-feedback {
    position: relative;
}

.back-to-home {
    text-align: center;
    margin-top: 20px;
}
</style>
