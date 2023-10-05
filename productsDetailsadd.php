<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'iabcstore';
    $connection = '';

    $connection = mysqli_connect($server,$username,$password,$database);

    
    if($_POST['submit']){
        $model = $_POST['productModel'];
        $price = $_POST['productPrice'];
        $color = $_POST['productColor'];
        $memory = $_POST['productMemory'];
        $image = $_POST['productimage'];

        $sql= "insert into  abcproductsi (model,color,memory)
            values ('$model','$color','$memory')";
        $sqlImg= "insert into  productsimg (image,price)
            values ('$image','$price')";

        $result = mysqli_query($connection,$sql);
        $resultImg = mysqli_query($connection,$sqlImg);

        header("location:addProducts.html");
    }

?>