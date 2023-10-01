<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'iabcstore';
    $connection = '';

    $connection = mysqli_connect($server,$username,$password,$database);

    if(!$connection){
        die('connection field'.mysqli_connect_error());
    } 
    elseif($_POST['submit']){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from customersdatas where email = '$username'";
        $result = mysqli_query($connection,$sql);

        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                header("location:index.html");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }   
    }
?>