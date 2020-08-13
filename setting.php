<?php
    require 'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location: signup.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Settings Page</title>
</head>
<body>
    <?php 
        require 'includes/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="setting-script.php" method="POST">
                    <h3>Change Password</h3>
                    <div class="form-group">
                        <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="new_password" class="form-control" placeholder="New Password">
                       
                    </div>
                    <div class="form-group">
                        <input type="password" name="retype_password" class="form-control" placeholder="Re-type New Password">
                    </div>
                    <button type="submit" name="change" class="btn btn-primary">Change</button> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>