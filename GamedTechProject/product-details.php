<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel='shortcut icon' type='image/x-icon' href="images/gamedTech_Icon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <style>
        a{
            text-decoration: none;
        }
    </style>

</head>
<body>
    <!-- Header Section -->
    <header class="header">

        <a href="home.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech </a>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search for products...">
            <label for="search-box" class="fas fa-search"> </label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="editprofile.php" class="fas fa-user"></a>
            <a href= "wishlist.php" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"><span></span></a>
        </div>


    </header>

    <!-- End of Header Section-->

    <section class="container single-product my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img src="images/oppof9smartphone.jpg" alt="OPPO SmartPhone" class="img-fluid w-100 pb-1" id="mainImg">

                <div class="images-group">

                    <div class="small-img-square">
                        <img src="images/product-1-hover.jpg" alt="OPPO SmartPhone image 2" width="100%" height="135rem" class="small-img">
                    </div>
                    <div class="small-img-square">
                        <img src="images/product-1-hover-3.jpg" alt="OPPO SmartPhone image 3" width="100%" height="135rem" class="small-img">
                    </div>
                    <div class="small-img-square">
                        <img src="images/product-1-hover-2.jpg" alt="OPPO SmartPhone image 4" width="100%" height="135rem" class="small-img">
                    </div>
                    <div class="small-img-square">
                        <img src="images/product-1-hover-4.jpg" alt="OPPO SmartPhone image 4" width="100%" height="135rem" class="small-img">
                    </div>

                    <div class="small-img-square">
                        <img src="images/oppof9smartphone.jpg" alt="OPPO SmartPhone image 4" width="100%" height="135rem" class="small-img">
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-12 custom">
                <a href="products.php">Products</a>
                <h6 style="display: inline;">/ SmartPhone</h6>
                <h3>OPPO F9 SmartPhone</h3>
                <h2>$199.99</h2>
                <input type="number" value="1" min="1" max="5">
                <button class="btn">Add To Cart</button>
                <h4>About this item</h4>
                <ul>
                    <li>Camera: 16+2 MP Dual rear camera with human Face priority exposer, Portrait mode, AI beauty | 25 MP front camera</li>
                    <li>Display: 16 centimetres (6.3-inch) Full HD multi-touch capacitive touchscreen with 2340x1080 pixels, 409 ppi pixel density, 16M color support and 19.5:9 aspect ratio | Corning Gorilla glass</li>
                    <li>Memory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 512GB | Dual nano SIM with dual-standby (4G+4G)</li>
                    <li>Operating System and Processor: Android v8.1 Oreo based on ColorOS 5.2 operating system with 2GHz Mediatek Helio P60 octa core processor</li>
                    <li>Battery: 3500 mAH ; Battery Type: Li-polymer with VOOC flash charge facility</li>
                    <li>Warranty: 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase,Included in box: Handset, Adapter, Headset, Micro USB Cable, Important Info Booklet with Warranty Card, Quick Guide, SIM Card Tool and Case</li>
                    <li>Country of Origin: India</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="products">
        <h1 class="heading">Related <span>Products</span></h1>
        <div class="box-container">

            <div class="box show">
                <div class="image">
                    <img src="images/oppof9smartphone.jpg" class="main-img" alt="">
                    <img src="images/product-1-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="product-details.php" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Oppo F9 Smartphone</h3>
                    <div class="price">199.99$ <span>399.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box show">
                <div class="image">
                    <img src="images/nikoncamera.jpg" class="main-img" alt="">
                    <img src="images/product-2-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Nikon Camera</h3>
                    <div class="price">279.99$ <span>419.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box show">
                <div class="image">
                    <img src="images/samsungtv.jpg" class="main-img" alt="">
                    <img src="images/product-3-hover.jpg" class="hover-img" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart add-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>

                    </div>
                </div>
                <div class="content">
                    <h3>Samsung TV</h3>
                    <div class="price">449.99$ <span>599.99$</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>
    

     <!-- Start of Footer -->

     <section class="quick-links">
        <a href="home.php" class="logo"> <i class="fas fa-laptop-code"></i> GamedTech</a>

        <div class="links">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="products.php">Products</a>
            <a href="contact.php">Contact Us</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="cart.php">Cart</a>
        </div>

        <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank"></a>
            <a href="https://twitter.com/?lang=en" class="fab fa-twitter" target="_blank"></a>
        </div>

    </section>

    <section class="credit">
        
        <p>&#169; 2020-2021 <span>GamedTech Inc.</span> All rights reserved.</p>
        
        <img src="images/card_img.png" alt="Accepted Payments">

    </section>

    <!-- End of Footer -->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <script src="Javascript/imageGallery.js"></script>

    <script src="Javascript/index.js"></script>

    <script src="Javascript/changeName.js"></script>

    <script src="Javascript/cart.js"></script>

    

</body>
</html>