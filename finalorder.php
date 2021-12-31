
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$brocoli = $_POST['brocoli'];
    $brinjal = $_POST['brinjal'];
    $beetroot = $_POST['beetroot'];
    $potato = $_POST['potato'];
    $cauliflower = $_POST['flower'];
    $carrot = $_POST['carrot'];

$sql = "INSERT INTO finalorder(brocoli,brinjal,beetroot,potato,cauliflower,carrot)
VALUES ('$brocoli','$brinjal','$beetroot','$potato','$cauliflower','$carrot')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Your order has been successfully placed.we will deliver you soon.Thank you.')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?><!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Big Basket</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" /><span>
              Big Basket
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.html"> veggies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="f.html"> Place Order </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="">
                Get A quote
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Organic vegShop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="fruit.html" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="contact.html" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/veg.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                           Organic vegShop
                          </h1>
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                          <div class="d-flex">
                            <a href="fruit.html" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="contact.html" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/veg.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Welcome to <br />
                            Organic veg Shop
                          </h1>
                          <p>
                          Big Basket is a website that offers you organic vegetable online at a very reasonable price with varieties of products. 
Organic vegetable farming refers to the practice of cultivation where no kind of fertilizers, pesticides or other chemicals are used. 
It helps in maintaining your health and saving you from a lot of diseases.
                          </p>
                          <div class="d-flex">
                            <a href="fruit.html" class="text-uppercase custom_orange-btn mr-3">
                              Shop Now
                            </a>
                            <a href="" class="text-uppercase custom_dark-btn">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/veg.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

 
  

  <!-- tasty section -->
  <section class="tasty_section">
    <div class="container_fluid">
      <h2>
        Oraganic Vegetables
      </h2>
    </div>
  </section>

  <!-- end tasty section -->

  
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <h2 class="font-weight-bold">
        Buy Organic Vegetables Online
      </h2>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <p>
            Vegetables and fruits constitute the essence of a healthy diet. If the vegetables aren't free from chemicals or are not fresh, not only will it degrade your health but will spoil your mood as well. It's impossible to find chemical-free vegetables in cities and even towns. For the profit and production of a large amount of substance, a lot of chemicals are injected into the products. Are you not tired of the pesticides, fertilizers and the odour that you get from the vegetables that you buy in the market? The vegetables that appear juicy and attractive are actually made that way to help the fruits or vegetables grow faster by the use of chemicals. But, in many areas nowadays, organic farming has come to the rescue to assure you products that are chemical free. And bigbasket is a website that offers you organic vegetable online at a very reasonable price with varieties of products. Organic vegetable farming refers to the practice of cultivation where no kind of fertilizers, pesticides or other chemicals are used. It helps in maintaining your health and saving you from a lot of diseases. Organic farming has become a popular practice and intaking organic vegetables saves you from a lot of diseases caused by the use of chemicals in fruits and vegetables. In an offline store or the market, the vegetables that are sold use a lot of chemicals which degrades your health. Organic items assure your safeguard of your immune system. Bigbasket offers you fresh organic vegetables that you can order from home and it will bring the fresh items at your doorstep. Although organic farming has gained a lot of popularity in recent times, the prices are high in the market and people hesitate to buy vegetable at such high prices and it isn't even affordable to many. But, bigbasket makes your organic vegetable price a reasonable one. There are amusing discounts attached and many vegetables are also available in combo packs. It allows your organic vegetable online shopping easier and affordable. Moreover, there are no delivery charges and your organic products are just one click away. At bigbasket, you will find a variety of vegetables organically grown and freshly collected from farms. You can easily cook a lot of recipes with these organic products which will automatically make your food a lot more tastier. Not just food, you can maintain your diet by adding organic vegetables to your salad. It's a great offer for the diet freaks! The vegetables are grown with great care by the use of natural means for the growth instead of numerous means of pesticides. You can buy organic lady finger or buy organic brinjal or any other fresh organic vegetables of your choice and preference by the using our service dedicated to customers’ satisfaction. Bigbasket takes exclusive care of the customers and serves one of the best products in an online platform. So, you should definitely hurry and get your fresh and purely organic vegetables from our website without wasting a minute.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  

  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Veggies
          </h5>
          <ul>
            <li>
              Brinjal
            </li>
            <li>
              Carrot
            </li>
            <li>
              Cauliflower
            </li>
            <li>
              Brocoli
            </li>
            <li>
              Beetroot
            </li>
            <li>
              Potato
            </li>
          </ul>
          
        </div>
        <div class="col-md-3">
          <h5>
            Services
          </h5>
          <ul>
            <li>
              Chennai
            </li>
            <li>
              Banglore
            </li>
            <li>
              Mumbai
            </li>
            <li>
              Hyderabad
            </li>
            <li>
              Delhi
            </li>
            <li>
              Kolkata
            </li>
            <li>
              Goa
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Get In Touch
          </h5>
          <ul>
            <li>
              veggies@bigbasket.com
             </li>
             <li>
               fruits@bigbasket.com
             </li>
             <li>
               gadgets@bigbasket.com
             </li>
             <li>
               accessoriess@bigbasket.com
             </li>
          </ul>
        </div>
        
        <div class="col-md-3">
          <div class="social_container">
            <h5>
              Follow Us
            </h5>
            <div class="social-box">
              <a href="https://www.facebook.com/Bigbasketcom/">
                <img src="images/fb.png" alt="">
              </a>

              <a href="https://twitter.com/search?q=%23bigbasket">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="https://in.linkedin.com/company/bigbasket-com">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="https://www.instagram.com/bigbasketcom/?hl=en">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
          <div class="subscribe_container">
            <h5>
              Subscribe Now
            </h5>
            <div class="form_container">
              <form action="subscribe.php" method="POST" target="f.html">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" id="email" placeholder="Name" name="name">
                </div>
                
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  
</body>

</html>