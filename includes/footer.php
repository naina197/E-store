<style>
#footer {
    margin-top: 15px;
    padding: 15px 0px 15px 0px;
}

</style>
 <nav id="footer" class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
                <ul class="list-unstyled">
                        <h4>Information</h4>
                    <li><a href="aboutUs.php">About Us</a> </li>
                    <li><a href="contactUs.php">Contact Us</a> </li>
                </ul>
            </div>
            <div class="col-sm-4 ">
            <ul  class="list-unstyled">
                <h4>My Account</h4>
                    <li><a href="#login" data-toggle="modal" data-target="#mymodel"> Login</a></li>
                    <li><a href="signup.php">Signup</a> </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul  class="list-unstyled">
                    <h4>Contact Us</h4>
                    <li><a href="contactUs.php">Contact +91-123-00000000</a> </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="mymodel" class="modal fade" role="dialog">
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
                            <input class="form-control" type="text" name="text" placeholder="Enter your Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Enter your password">
                        </div>
                        <button class="btn btn-primary" type="submit">Login</button><br><br>
                        <label>Forgot<a href="setting.php"> Password?</a></label>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


