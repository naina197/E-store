<?php
    function check_if_added_to_cart($item_id){
        require 'common.php';
        $user_id = $_SESSION['id'];
        $cart_status = "Added to cart";
        $user_product_query = "select * FROM user_items where item_id = '$item_id' AND user_id = '$user_id' AND status = '$cart_status'";
        $user_product_result = mysqli_query($con, $user_product_query);
        $row = mysqli_fetch_array($user_product_result);
        if(mysqli_num_rows($user_product_result) >= 1){
            return 1;
        }
        return 0;
    }
?>