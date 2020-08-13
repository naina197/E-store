<?php
    require 'includes/common.php';

    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }


    if(isset($_POST['change'])){
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['retype_password'];
        $user_id = $_SESSION['id'];
        if(!strcmp($new_password, $confirm_password)){
            header('location:  setting.php?new_password_error=Passwords are not matching');
        }
        $fetch_password_query = "select password from users where id = '$user_id'";
        $fetch_password_result = mysqli_query($con, $fetch_password_query);
        if(mysqli_num_rows($fetch_password_result) == 1){
            $encry_password = md5($old_password);
            if(strcmp($encry_password, $res[0])){
                $new_encry_password = md5($new_password);
                $update_password_query = "update users set password = '$new_encry_password' where id = '$user_id'";
                mysqli_query($con, $update_password_query);
                header('location: setting.php?password_changed= Password Changed Successfully');
            }
            else{
                header('location: setting.php');
            }
        }
    }
?>