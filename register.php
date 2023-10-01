<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'iabcstore';
    $connection = '';

    $connection = mysqli_connect($server,$username,$password,$database);
    if(!$connection){
        die('connection error'.mysqli_connect_error());
    }
    elseif(isset($_POST['submit'])){
        $name = $_POST['FullName'];
        $mail = $_POST['mail'];
        $phone_No = $_POST['PhoneNumber'];
        $password = $_POST['Password'];

        $sql = "insert into customersdatas (name,email,phoneno,password)
                values ('$name','$mail','$phone_No','$password')";
        
        mysqli_query($connection,$sql);
        header('location:login.html');
    }
?>