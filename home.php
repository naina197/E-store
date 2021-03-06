<?php
    require 'includes/common.php';
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
    <title>Home Page</title>
</head>
<body>
   <?php 
        require 'includes/header.php';
        require 'includes/checkif-added.php';  
   ?>
    
   <div class="container-fluid main">
        <div class="row">

        

            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Redmi Note 8 </h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/m2.jpeg">
                        <h4>Neptune Blue | 4GB RAM | 64GB Storage | 13MP+5MP Dual Camera</h4>
                        <?php
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Micromax iOne Notch</h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/nwe_m3.jpg">
                        <h4> (2+16) GB Black with Face Lock | 2200 mAh Battery</h4>
                        <?php
                            if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Samsung Galaxy M30s</h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/m10.jpeg">
                        <h4>Blue | 6GB RAM | 128GB Storage | 48MP + 8MP + 5MP Triple Rear Camera</h4>
                        <?php
                            if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>  
                </div>
            </div> 

            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Vivo Y81</h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/m1.jpeg">
                        <h4>Gold | 13MP+5MP Dual Camera | 3GB RAM | 32GB Storage</h4>
                        <?php
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                            ?>
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                            <?php
                             } ?>
                    </div>
                </div>
            </div>

        </div>



        <div class="row main">
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Panasonic Eluga Ray 810 </h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/new_m4.jpg">
                        <h4>Starry Black | 4GB RAM | 64GB Storage | 6.2 inches (15.75 cm) 720 x 1500 pixels  </h4>
                        <?php
                            if(check_if_added_to_cart(5)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>OPPO F11 </h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/m5.jpeg">
                        <h4>Fluorite Purple | 6GB RAM | 128GB Storage | No Cost EMI/Additional Exchange Offers</h4>
                        <?php
                            if(check_if_added_to_cart(6)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Redmi 8A Dual</h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/new_m6.jpg">
                        <h4>Sky White | 3GB RAM | 32GB Storage | Dual Cameras | 5,000 mAH Battery</h4>
                        <?php
                            if(check_if_added_to_cart(7)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 product">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Nokia 5.1 Plus</h3>
                    </div>
                    <div class="panel-body">
                        <img class="img-responsive image" src="images/new_m4.jpg">
                        <h4>Black | Internal memory: 32 GB | 3 GB RAM | MediaTek Helio P60 Processor</h4>
                        <?php
                            if(check_if_added_to_cart(8)){
                                echo '<a href="#" class="btn btn-block btn-lg btn-success" disabled> Added in cart</a>';
                            } else {
                                ?>
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-lg btn-primary">Add to cart</a>
                                <?php
                                }
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
</body>
</html>