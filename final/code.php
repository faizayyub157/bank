<?php
session_start();
include("config/dbcon.php");

if(isset($_POST['adduser']))
{
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_query="INSERT INTO `user` (`first`, `last`, `email`, `passward`, `create_at`) VALUES ('$first','$last','$email','$password', current_timestamp())";
    $user_query_run=mysqli_query($con,$user_query);
    if($user_query_run)
    {
        $_SESSION['status']="user add successfully";
        header("Location:index.php");
    }
    else{
        $_SESSION['status']="user failed successfully";
        header("Location:index.php");
    }
}

if(isset($_POST['cardapply']))
{
    $account = $_POST['account'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $card = $_POST['card'];
    $password = $_POST['password'];
  

    $user_query="INSERT INTO `card` (`account`, `name`, `address`, `email`, `card`, `password`,`time`,`status`) VALUES ('$account','$name','$address','$email','$card','$password', current_timestamp(),'pending')";
    $user_query_run=mysqli_query($con,$user_query);
    if($user_query_run)
    {
        $_SESSION['status']="user add successfully";
        header("Location:index.php");
    }
    else{
        $_SESSION['status']="user failed successfully";
        header("Location:index.php");
    }
}
?>