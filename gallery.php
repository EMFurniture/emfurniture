<!DOCTYPE html>

<head>
    <title>EM Furniture</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="favicon" href="favicon.ico" type="x/favicon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Julee|Koulen' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <div class="sub-wrapper">
            <div class="web-head">
                <div class="logo">
                    <img src="/assets/logo.svg" width="240px">
                </div>
                <!-- <div class="login" ng-controller="mainController">
                    <div ng-show="!isLoggedIn" class="login-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" ng-model="formData.username"
                                    placeholder="Username" required>
                                <input type="password" class="form-control" id="password" ng-model="formData.password"
                                    placeholder="Password" required>
                                <div class="main-login-btn">
                                    <button type="button" class="login-btn" ng-click="login()">Login</button>
                                    <button type="button" class="signup-btn" ng-click="signup()">Sign Up</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> -->
                <div class="loggedInNav">
                    <ul>
                        <li>
                            <img src="/assets/shop.svg" alt="">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <img src="/assets/wishlist.svg" alt="">
                            <a href="wishlist.php">Wishlist</a>
                        </li>
                        <li>
                            <img src="/assets/cart.svg" alt="">
                            <a href="cart.php">Cart</a>
                        </li>
                        <li>
                            <img src="/assets/user.svg" alt="">
                            <a href="account.php">Account</a>
                        </li>
                        <li>
                            <img src="/assets/logout.svg" alt="">
                            <a href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navigation" ng-controller="NavigationController">
                <div class="nav-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li href="contact"><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <hr>
            </div>
            
            <div class="gallery-container">
                <div class="gallery-div">
                    <img src="/images/gallery/1.jpg" alt="">
                    <img src="/images/gallery/2.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/3.jpg" alt="">
                    <img src="/images/gallery/4.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/5.jpg" alt="">
                    <img src="/images/gallery/6.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/7.jpg" alt="">
                    <img src="/images/gallery/8.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/9.jpg" alt="">
                    <img src="/images/gallery/10.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/11.jpg" alt="">
                    <img src="/images/gallery/12.jpg" alt="">
                </div>
                <div class="gallery-div">
                    <img src="/images/gallery/13.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="footer-container">
            <div class="footer-wrapper">
                <div class="footer-logo-img">
                    <img src="/assets/logo.svg" width="240px">
                </div>
                <div class="em-contact-container">
                    <div class="direct-contact">
                        <div class="dc-container">
                            <img src="/assets/footer/phone.svg" alt="">
                            <p>(+63) 950-613-3018</p>
                        </div>
                        <div class="dc-container">
                            <img src="/assets/footer/location.svg" alt="">
                            <p>Pawili Bula, Camarines Sur</p>
                        </div>
                        <div class="dc-container">
                            <img src="/assets/footer/email.svg" alt="">
                            <p>emfurnitureph@gmail.com</p>
                        </div>
                    </div>

                    <div class="direct-social">
                        <div class="ds-container">
                            <img src="/assets/footer/facebook.svg" alt="">
                            <p>Facebook</p>
                        </div>
                        <div class="ds-container">
                            <img src="/assets/footer/instagram.svg" alt="">
                            <p>Instagram</p>
                        </div>
                        <div class="ds-container">
                            <img src="/assets/footer/x.svg" alt="">
                            <p>Twitter / X</p>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <hr>
                    <span>Copyright &#169; All rights reserved 2024</span>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>