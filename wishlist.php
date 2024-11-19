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
                <div class="login" ng-controller="mainController">
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
            
            <div class="store-container">
                <div class="product-list-container">
                    <div class="product-container">
                        <img src="/images/square/1c.jpg" alt="">
                        <span>Sala Set</span>
                        <div class="pl-desc">
                            <div class="pl-price">
                                <img src="/assets/peso.svg" alt="">
                                <span>₱999</span>
                            </div>
                            <img src="assets/wish.svg" alt="">
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="/images/square/2a.jpg" alt="">
                        <span>Sala Set</span>
                        <div class="pl-desc">
                            <div class="pl-price">
                                <img src="/assets/peso.svg" alt="">
                                <span>₱999</span>
                            </div>
                            <img src="assets/wish.svg" alt="">
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="/images/square/3c.jpg" alt="">
                        <span>Sala Set</span>
                        <div class="pl-desc">
                            <div class="pl-price">
                                <img src="/assets/peso.svg" alt="">
                                <span>₱999</span>
                            </div>
                            <img src="assets/wish.svg" alt="">
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="/images/square/4b.jpg" alt="">
                        <span>Sala Set</span>
                        <div class="pl-desc">
                            <div class="pl-price">
                                <img src="/assets/peso.svg" alt="">
                                <span>₱999</span>
                            </div>
                            <img src="assets/wish.svg" alt="">
                        </div>
                    </div>
                    <div class="product-container">
                        <img src="/images/square/5a.jpg" alt="">
                        <span>Sala Set</span>
                        <div class="pl-desc">
                            <div class="pl-price">
                                <img src="/assets/peso.svg" alt="">
                                <span>₱999</span>
                            </div>
                            <img src="assets/wish.svg" alt="">
                        </div>
                    </div>
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