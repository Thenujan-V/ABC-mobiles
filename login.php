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
        $sqlSuperAdmin = "select * from superadminabcistore where username = '$username'";
        

        $result = mysqli_query($connection,$sql);
        $resultSuperAdmin = mysqli_query($connection,$sqlSuperAdmin);
        
        $row = mysqli_fetch_assoc($result);
        $rowSuperAdmin = mysqli_fetch_assoc($resultSuperAdmin);

        if(mysqli_num_rows($resultSuperAdmin) > 0){
            if($password == $rowSuperAdmin["password"]){
                header("location:indexAdmin.html");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }   
        elseif(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                header("location:index.php");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }
        
    }
?>