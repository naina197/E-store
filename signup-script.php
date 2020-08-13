<?php
    require 'includes/common.php';
    if (isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $address = $_POST['address'];

        
        $fetch_query = "select id from users WHERE email = '$email'";
        $fetch_result = mysqli_query($con, $fetch_query) or die(mysqli_error($con));

        if(mysqli_num_rows($fetch_result) > 0){
            header('location: signup.php?email_error=email id already exists');
        }
        else{
            $encry_password = md5($password);
            $insert_user_query = "insert into users(name, email, password, contact, city, address) values('$name', '$email', '$encry_password', '$contact', '$city', '$address')";
            $insert_user_submit = mysqli_query($con, $insert_user_query) or die(mysqli_error($con));
            $_SESSION['id'] = mysqli_insert_id($con);
            $_SESSION['email'] = $email;
            header('location: home.php');
        }
    }
    
?>