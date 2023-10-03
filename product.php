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
        $image = $rows['image'];
        
        // echo `<div class='card'>
        //         <div id="model">`.$model.`</div>
        //         <div id="color">`.$color.`</div>
        //         <div id="memory">`.$memory.`</div>
        //         <div id="price">`.$price.`</div>
        //       </div>`;
        // echo $rows['image'];
        echo "
            <div class='col-lg-4 col-md-4 col-12'>
                <div class='card' style='width: 18rem;'>
                    <img src='$image' class='card-img-top' alt='...'>
                    <div class='card-body text-center'>
                        <h5 class='card-title'>$model</h5>
                        <p class='card-text'>$color, $memory</p>
                        <p class='card-text'>$price</p>
                        <a href='#' class='btn btn-primary'>Go somewhere</a>
                    </div>
                </div>
            </div>";
    }
?>