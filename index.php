<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aapkaeshop</title>
    
    <!-- External CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="OwlCarousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="OwlCarousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                    <ul class="account-section">
                        <li class="dropdown"><a href="user-login.php"><i class="fa fa-user"></i> Log/Reg User</a></li>
                        <li class="dropdown"><a href="shop-login.php"><i class="fa fa-user"></i> Log/Reg Shop</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-container">    
        <!-- Banner Section -->
        <div class="col-md-12 mob-sec">
            <div class="owl-carousel owl-theme" id="owl-h">
                <div class="item">
                    <img src="admin/img/banner/download (3).png" alt="search store">
                </div>
                <div class="item">
                    <img src="admin/img/banner/download (1).png" alt="search store">
                </div>
                <div class="item">
                    <img src="admin/img/banner/download.png" alt="search store">
                </div>
                <div class="item">
                    <img src="admin/img/banner/download (1).jpeg" alt="search store">
                </div>
            </div>
        </div>

        <!-- Find Shop Section -->
        <div class="col-md-6 find-shop">
            <h3 class="home-heading">Find Shop</h3>
            <form action="shop-categories.php" method="GET">
                <div class="form-group">
                    <label for="pincode">Enter Pincode<span class="bleck">*</span></label>
                    <input type="number" class="form-control" id="pincode" placeholder="Enter Pincode" name="pincode" required>
                </div>
                <div class="form-group">
                    <label for="shop_name">Shop Name</label>
                    <input type="text" class="form-control" id="shop_name" placeholder="Shop Name (Optional)" name="shop_name">
                </div>
                <button type="submit" class="btn btn-success" name="register">Find Shop <i class="fa fa-search"></i></button>
            </form>
            <br><br><br>
            <div class="scrolling-text">
                <h1>This is a sample scrolling text that scrolls left.</h1>
            </div>
            <footer>
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="aapkaeshop.apk"><img src="images/google.png" alt="google" width="90" height="30"/></a></li>
                </ul>
                <ul class="footer-links">
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="terms.php">Terms of Use</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="refund-policy.php">Refund Policy</a></li>
                </ul>
            </footer>
        </div>

        <div class="col-md-6 sec-right">
            <img src="images/store-search.png" alt="search store">
            <h4>Search for shops near you</h4>
        </div>
    </div>

    <!-- External JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="OwlCarousel/dist/owl.carousel.min.js"></script>
    <script>
        $('#owl-h').owlCarousel({
            loop: true,
            autoplay: true,
            items: 1,
            dots: false,
        });
    </script>
</body>
</html>
