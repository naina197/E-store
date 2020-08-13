<?php
    require 'includes/common.php';
    if(!isset($_SESSION['id'])){
        header('location: signup.php');
    }
    $user_id = $_SESSION['id'];
    $fetch_user_items = "select items.id as 'id', items.name as 'item_name', items.price as 'item_price' from user_items INNER JOIN items ON user_items.item_id = items.id and user_items.status='Added to cart' and user_items.user_id = '$user_id'";
    $user_item_result = mysqli_query($con, $fetch_user_items) or die (mysqli_error($con));
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
    <title>Cart Page</title>
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th> 
                            <th>Price</th>
                            <th>Remove</th> 
                        </tr>
                    </thead>
                       
                    <tbody>
                        <?php
                            $total_items = 0;
                            $total_item_price = 0;
                            if(mysqli_fetch_array($user_item_result) == 0){
                                echo "Add items to cart first";
                            }
                            else{
                                $ids = "0";
                                while($row = mysqli_fetch_array($user_item_result)){
                                    $ids = $ids." ".row['id'];
                                    $total_items += 1;
                        ?>
                            <tr>
                                <td><?php echo $total_items; ?></td>
                                <td><?php echo $row['item_name']; ?></td>
                                <td><?php echo $row['item_price']; $total_item_price += $row['item_price']; ?></td>
                                <td><a href="cart-remove.php?id=<?=$row['id']?>"class='remove_item_link'>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"viewBox="0 0 64 64"style=" fill:#000000;"><path fill="#afc4e1" d="M50,21H14v36c0,1.105,0.895,2,2,2h32c1.105,0,2-0.895,2-2V21z"></path><path fill="#becde8" d="M39,59V21H14v36c0,1.104,0.895,2,2,2H39z"></path><path fill="#cad8ed" d="M25,59V21H14v36c0,1.104,0.895,2,2,2H25z"></path><path fill="#afc4e1" d="M14 21H50V24H14z"></path><path fill="#8d6c9f" d="M48,60H16c-1.654,0-3-1.346-3-3V21c0-0.553,0.448-1,1-1h36c0.552,0,1,0.447,1,1v36 C51,58.654,49.654,60,48,60z M15,22v35c0,0.552,0.449,1,1,1h32c0.551,0,1-0.448,1-1V22H15z"></path><path fill="#a8b7d1" d="M53,11H11c-1.105,0-2,0.895-2,2v6c0,1.105,0.895,2,2,2h42c1.105,0,2-0.895,2-2v-6 C55,11.895,54.105,11,53,11z"></path><path fill="#8d6c9f" d="M53,22H11c-1.654,0-3-1.346-3-3v-6c0-1.654,1.346-3,3-3h42c1.654,0,3,1.346,3,3v6 C56,20.654,54.654,22,53,22z M11,12c-0.551,0-1,0.448-1,1v6c0,0.552,0.449,1,1,1h42c0.551,0,1-0.448,1-1v-6c0-0.552-0.449-1-1-1H11 z"></path><path fill="#8d6c9f" d="M41 12c-.38 0-.743-.218-.911-.586l-2.335-5.137C37.57 6.1 37.323 6 37.063 6H26.937c-.26 0-.506.1-.691.277l-2.335 5.137c-.229.503-.822.726-1.324.496-.502-.229-.725-.821-.496-1.324l2.4-5.28c.037-.081.084-.157.142-.226C25.204 4.394 26.043 4 26.937 4h10.127c.893 0 1.733.394 2.305 1.08.057.068.105.145.142.226l2.4 5.28c.229.503.006 1.096-.496 1.324C41.28 11.972 41.139 12 41 12zM14 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C15 17.553 14.552 18 14 18zM19 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C20 17.553 19.552 18 19 18zM24 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C25 17.553 24.552 18 24 18zM29 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C30 17.553 29.552 18 29 18zM35 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C36 17.553 35.552 18 35 18zM40 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C41 17.553 40.552 18 40 18zM45 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C46 17.553 45.552 18 45 18zM50 18c-.552 0-1-.447-1-1v-2c0-.553.448-1 1-1s1 .447 1 1v2C51 17.553 50.552 18 50 18zM38 56H14c-.552 0-1-.447-1-1s.448-1 1-1h24c.552 0 1 .447 1 1S38.552 56 38 56zM46 56h-4c-.552 0-1-.447-1-1s.448-1 1-1h4c.552 0 1 .447 1 1S46.552 56 46 56zM20 42c-.552 0-1-.447-1-1V29c0-.553.448-1 1-1s1 .447 1 1v12C21 41.553 20.552 42 20 42zM20 50c-.552 0-1-.447-1-1v-4c0-.553.448-1 1-1s1 .447 1 1v4C21 49.553 20.552 50 20 50zM28 50c-.552 0-1-.447-1-1V29c0-.553.448-1 1-1s1 .447 1 1v20C29 49.553 28.552 50 28 50zM36 50c-.552 0-1-.447-1-1V29c0-.553.448-1 1-1s1 .447 1 1v20C37 49.553 36.552 50 36 50zM44 50c-.552 0-1-.447-1-1V37c0-.553.448-1 1-1s1 .447 1 1v12C45 49.553 44.552 50 44 50zM44 34c-.552 0-1-.447-1-1v-4c0-.553.448-1 1-1s1 .447 1 1v4C45 33.553 44.552 34 44 34z"></path></svg> </a><td>
                            </tr>  
                        <?php           
                                }
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs<?php echo $total_item_price ?></td>
                            <td><a href="success.php?id=<?= $user_id ?>" class="btn btn-primary btn-sm">Confirm</a></td>
                        </tr>
                    </tbody>   
                </table>
            </div>
        </div>
    </div>
</body>
</html>