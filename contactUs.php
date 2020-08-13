<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Contact Us Page</title>
</head>
<body>
    <?php 
            require 'includes/header.php';
        ?>

    <div id="mymodel" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                    <h4 class="modal-title">LOGIN</h4>
                </div>
                <div class="modal-body">
                    <label>Don't have an account?<a href="#">Register</a></label>
                    <div class="form-group">
                        <input class="form-control" type="text" name="text" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Enter your password">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button><br><br>
                    <label>Forgot<a href="#"> Password?</a></label>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        
            <div class="col-sm-8">
                <h3>LIVE SUPPORT</h3>
                <h4>23 hours | 7 days a week | 365 days a tear Live Techinical Support</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et vero pariatur temporibus,
                 deleniti harum esse reiciendis quos quibusdam mollitia magnam! Placeat aut repellat laudantium culpa libero atque quidem reprehenderit
                rem tempore dignissimos delectus earum voluptate molestiae accusantium amet beatae eligendi adipisci quisquam natus, deleniti nemo magnam qui? Maxime, dicta quam!</p>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="images/contact_us.svg" >
                <!-- <img class="img-circle img" src="images/contact.png"> -->
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-7">
                <h3>CONTACT US</h3>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text " name="text"  class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button><br><br><br><br>
            </div>  
            <div class="col-sm-5">
                <h3>Company Information :</h3>
                <p>500 Lorem ipsum dolor sit.<br>
                <p>22-53-2 Lorem, ipsum dolor.<br>
                <P>USA<br>
                <p>Phon:(00) 0000 000 00<br>
                <p>Afx: (000)000 00 00 0<br>
                <p>Email: abc@mmycompany.com<br>
                <p>Follow on: Facebook, Twitter</p>
            </div>  
        </div>
    </div>
    
    <?php 
            require 'includes/footer.php';
        ?>

</body>
</html>