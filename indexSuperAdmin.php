<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <link rel="stylesheet" href="style/indexpage.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ABC mobiles</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ABC mobiles</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link" href="indexSuperAdmin.php">Home</a>
              <a class="nav-link" href="#about">About Us</a>
              <a class="nav-link" href="superProduct.php">Product</a> 
              <form class="d-flex">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="search">
                <button class="btn btn-outline-success" type="submit" id="searchbtn">Search</button>
              </form>
            </div>
            <button id="admin" class="btn">+admin</button>
            <button id="logout" class="btn mx-4">logout</button>
          </div>
        </div>
    </nav>

    <!--Home-->
    <section id="home" style="background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.7)),url(media/pads.jpg) ;background-size: cover;background-position: center;">
      <h1 class="text-center">ABC iStore</h1>
      <p>"Unlocking the future, one Apple at a time."</p>
      <div class="input-group m-4">
          <input type="text" placeholder="Ask something for your need" class="form-control">
          <button class="btn signin">Send</button>
      </div>
  </section>

  <!--About-->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 ">
          <img src="media/apple.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h1 class="text-center">About us</h1>
          <p>"Welcome to ABC mobiles, your premier destination for all things Apple. With a deep passion for innovation and a dedication to delivering the best in mobile technology, we've been serving iPhone enthusiasts and Apple aficionados since 2000. At ABC mobiles, we're more than just a shop; we're a community of Apple enthusiasts who understand the love for sleek design, cutting-edge features, and seamless performance. Our team of Apple-certified experts is here to assist you in finding the perfect iPhone, iPad, Mac, or accessory to enhance your digital lifestyle. Come experience the world of Apple with us, where every purchase is a step into the future of technology."</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <p class="my-3">"Welcome to ABC mobiles, your premier destination for all things Apple. With a deep passion for innovation and a dedication to delivering the best in mobile technology, we've been serving iPhone enthusiasts and Apple aficionados since 2000. At ABC mobiles, we're more than just a shop; we're a community of Apple enthusiasts who understand the love for sleek design, cutting-edge features, and seamless performance. Our team of Apple-certified experts is here to assist you in finding the perfect iPhone, iPad, Mac, or accessory to enhance your digital lifestyle. Come experience the world of Apple with us, where every purchase is a step into the future of technology."</p>
          </div>
          <div class="col-lg-6 col-md-6 col-12" id="second">
            <img src="media/phones.jpg" alt="" class="img-fluid">
          </div>
      </div>
    </div>
  </section>

  <section id="productpage">
        <div class="container m-3">
            <h1 class="text-center my-5" data-aos="fade-up"
            data-aos-anchor-placement="center-center">OUR PRODUCTS</h1>
            <div id="productpage" class="row">
              <?php include 'adminsProduct.php' ?>
              <div class='card mx-auto' style='width: 18rem;'>
                  <img src='media/mobile.png' class='card-img-top' alt='...'>
                  <div class='card-body text-center'>
                        <h5 class='card-title'>$model</h5>
                        <p class='card-text'>$color, $memory</p>
                        <p class='card-text'>$price</p>
                      <a href='#' class='btn btn-primary'>Add product</a>                   
                  </div>
              </div>
            <div class="text-center my-5">
              <a href="productPage.php" class="btn" id="showmore">Show more</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="Js/operations.js"></script>
  </body>
</html>