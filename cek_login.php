<?php 
    include("config.php");
 
    $username = $_POST['username'];
    $password = md5($_POST['password']);

       
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($db, $sql);
   
    $cek = mysqli_num_rows($query);
 
    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:admin/");
    }
    else{
        header("location:./"); 
    }
?>