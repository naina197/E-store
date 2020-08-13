<?php
    require 'includes/common.php';
    if(isset($_POST['login'])){
        $user_email = mysqli_real_escape_string($con, $_POST['email']);
        $user_password = mysqli_real_escape_string($con, $_POST['password']);
        $encrypt_password = md5($user_password);
        $fetch_user_query =  "select id, email, password from users where email = '$user_email' AND password = '$encrypt_password' ";
        $res = mysqli_query($con, $fetch_user_query);
        if(mysqli_num_rows($res) == 0){
            header('location: signup.php?login_error= Invalid email and password! If you don not have any account create new');
        } else{
            $row = mysqli_fetch_array($res);
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            header("location: home.php");
        }
    }

?>