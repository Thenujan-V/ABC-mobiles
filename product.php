<?php
    $server = 'localhost:3307';
    $username = 'root';
    $password = '';
    $database = 'iabcstore';
    $connection = '';

    $connection = mysqli_connect($server,$username,$password,$database);

    $sql = "select * from abcproductsi join productsimg on abcproductsi.id = productsimg.id";
    $result = mysqli_query($connection,$sql);

    
    while($rows = mysqli_fetch_assoc($result)){
        $model =  $rows['model'];
        $color =  $rows['color'];
        $memory =  $rows['memory'];
        $price =  $rows['price'];

        echo `<p>dgbhnh</p>`;
        
        echo `<div class='card'>
                <div id="model">`.$model.`</div>
                <div id="color">`.$color.`</div>
                <div id="memory">`.$memory.`</div>
                <div id="price">`.$price.`</div>
              </div>`;
        // echo $rows['image'];
        
          
    }
?>