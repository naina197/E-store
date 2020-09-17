<?php
    require 'includes/common.php';
    if(isset($_SESSION['id'])){
        header("location:home.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Sign Up Page</title>
</head>
<body>
    <?php
        require 'includes/header.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img img-respponsive" style="width:100%" src="images/sign_up.svg">
            </div>
            <div class="col-sm-6 img">
                <h3>SIGN UP</h3>
                <div><?php echo $_GET['login_error']; ?> </div>
                <div><?php echo $_GET['signup_error']; ?> </div>
                <form action="signup-script.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="text" class="form-control" placeholder="Name" id="name" required="true">
                        <div><?php echo $_GET['name_error']; ?> </div>     
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" id="email" required="true">
                        <div><?php echo $_GET['email_error']; ?> </div>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"  id="password" required="true">
                        <div><?php echo $_GET['password_error']; ?> </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                        <div><?php echo $_GET['contact_error']; ?> </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="City" id="city" required="true">
                        <div><?php echo $_GET['city_error']; ?> </div>
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" rows="5" placeholder="Address" id="address"  required="true"></textarea>
                        <!-- <input type="text" name="address" class="form-control"  placeholder="Address" id="address"  required="true"> -->
                        <div><?php echo $_GET['address_error']; ?> </div>
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <?php require 'includes/footer.php';
    ?>
</body>
</html>
