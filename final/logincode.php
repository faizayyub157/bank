<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $log_query="SELECT * FROM user WHERE email='$email'AND passward='$password'LIMIT 1";
    $log_query_run=mysqli_query($con,$log_query);
    
    if(mysqli_num_rows($log_query_run) > 0)
     {
     foreach($log_query_run as $row)
        {
            $user_first=$row['first'];
            $user_last=$row['last'];
            $user_email=$row['email'];
            $user_password=$row['password'];

        }
        $_SESSION['auth']=true;
        $_SESSION['auth_user']=[
            'user_first'=>$user_first,
            'user_last'=>$user_last,
            'user_email'=>$user_email,
            'user_password'=>$user_password

        ];
        $_SESSION['status']='logged in sucessfully';
        header('location:index.php');

    }
        
    
     else
     {
         $_SESSION['status']='invalid email or password';
         header('location:login.php');
     }
}
else{
    $_SESSION['status']="Access Denied";
    header("location: login.php");
}