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
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "select * from customersdatas where email = '$username'";
        $sqlSuperAdmin = "select * from superadminabcistore where username = '$username'";
        $sqlAdmin = "select * from adminabcistore where username = '$username'";

        $result = mysqli_query($connection,$sql);
        $resultSuperAdmin = mysqli_query($connection,$sqlSuperAdmin);
        $resultAdmin = mysqli_query($connection,$sqlAdmin);
        
        // $fetch = mysqli_fetch_array($result);
        // $fetchSuperAdmin = mysqli_fetch_array($resultSuperAdmin);
        // $fetchAdimn = mysqli_fetch_array($resultAdmin);

        $row = mysqli_fetch_assoc($result);
        $rowSuperAdmin = mysqli_fetch_assoc($resultSuperAdmin);
        $rowAdmin = mysqli_fetch_assoc($resultAdmin);


        if(mysqli_num_rows($resultSuperAdmin) > 0){
            if($password == $rowSuperAdmin["password"]){
                header("location:indexSuperAdmin.html");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }   
        elseif(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                //$_SESSION['username'] = $fetch["username"];
                header("location:indexUser.php");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }
        elseif(mysqli_num_rows($resultAdmin) > 0){
            if($password == $rowAdmin["password"]){
                header("location:indexAdmin.html");
            }
            else{
                echo
                "<script>alert('something went to wrong...')</script>";
            }
        }
        
    }
?>