<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    ?>

    <div id="profile">
        <div class="image">
            <img src="media/apple-logo.png" alt="">
        </div>

    <?php
        $server = 'localhost:3307';
        $username = 'root';
        $password = '';
        $database = 'iabcstore';
        $connection = '';
    
        $connection = mysqli_connect($server,$username,$password,$database);

        $sql = "select * from customersdatas where email = '$_SESSION[username]'";
        $result = mysqli_query($connection,$sql);
        $fetch = mysqli_fetch_array($result);

        echo "<div class='userDetails'>
                    <p>" .$fetch['username']. "</p>
                </div>";
    ?>

        <!-- <div class="userDetails">
            <p>Name</p>
            <p>Phone number</p>
            <p>E-mail</p>
        </div> -->
    </div>
</body>
</html>