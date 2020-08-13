<nav class="navbar navbar-default navbar-fixed-top header">
        <div class="container">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php 
                $home_page = "";
                if(!isset($_SESSION['email'])){
                    $home_page = "index.php";
                } else {
                    $home_page = "home.php";
                }
            ?>
                <a class="navbar-brand" href=<?= $home_page ?> > 
                <img style="display:inline;" src="https://img.icons8.com/nolan/50/favorite-cart.png"/>
                <h4 style="display:inline;">E-Store</h4>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               

                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION['id'])){
                        ?>
                            <li><a href="cart.php">
                                <img src="https://img.icons8.com/nolan/40/buy.png"/>
                                <h4 style="display:inline;">Cart</h4></a></li>

                            <li><a href="setting.php">
                                <img src="https://img.icons8.com/nolan/40/gear.png"/>
                                <h4 style="display:inline;">Setting</h4></a></li>

                            <li><a href="logout.php">
                                <img src="https://img.icons8.com/nolan/40/logout-rounded-down.png"/>
                                <h4 style="display:inline;">Logout</h4></a></li>
                        
                        <?php } else {
                            ?>


                            <li><a href="signup.php"> 
                            <img src="https://img.icons8.com/nolan/40/add-user-male.png"/>
                                <h4 style="display:inline;">Signup</h4> </a></li>
                        <li><a href="#login" data-toggle="modal" data-target="#mymodel">
                        <!-- <img src="https://img.icons8.com/nolan/50/login-rounded-right.png"/> -->
                        <img src="https://img.icons8.com/nolan/40/download.png"/>
                            <h4 style="display:inline;">Login</h4></a></li>

                        <li><a href="aboutUs.php">
                        <img src="https://img.icons8.com/nolan/40/about.png"/>
                        <h4 style="display:inline;">About</h4> 
                        </a></li>

                        <li><a href="contactUs.php">
                        <img src="https://img.icons8.com/nolan/40/contact-card.png"/>
                        <h4 style="display:inline;">Contact</h4> 
                        </a></li>


                            <?php
                            }
                        ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="mymodel" class="modal fade" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                    <h4 class="modal-title">LOGIN</h4>
                </div>
                <div class="modal-body">
                   <form action="login-script.php" method="POST">
                   
                        <label>Don't have an account?<a href="signup.php">Register</a></label>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Enter your password">
                        </div>
                        <button class="btn btn-primary" type="submit" name="login">Login</button><br><br>
                        <label>Forgot<a href="setting.php"> Password?</a></label>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   