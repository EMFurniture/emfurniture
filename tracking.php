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

            <div class="tracking-container">
                <div class="left-container">
                    <h3>Your order is on the way!</h3>
                    <h6>Shipping Address</h6>
                    <div class="address-container">
                        <div class="recipient-container">
                            <img src="/assets/cout-address.svg" alt="">
                            <div class="recipient-info">
                                <h6>Example Name Here</h6>
                                <span><b>Address:</b> 123 Rizal Street, Barangay San Roque, Naga City, Camarines Sur,
                                    4400, Philippines</span>
                                <span><b>Contact Number:</b> 09623672459</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="cout-default">
                        <span>Estimated Delivery:</span>
                        <span>November 30, 2024</span>
                    </div>
                    <div class="cout-default">
                        <span>Total Amount:</span>
                        <span>₱2,997</span>
                    </div>
                    <div class="progress-meter-container">
                        <div class="pm-container">
                            <div class="pm-div-label">
                                <img src="/assets/preparation.svg" alt="">
                                <span>Preparation</span>
                            </div>
                            <div class="pm-div-sign">
                                <img src="/assets/checkmark.svg" alt="">
                            </div>
                        </div>
                        <div class="pm-container">
                            <div class="pm-div-label">
                                <img src="/assets/transit.svg" alt="">
                                <span>In-transit</span>
                            </div>
                            <div class="pm-div-sign">
                                <img src="/assets/checkmark.svg" alt="">
                            </div>
                        </div>
                        <div class="pm-container">
                            <div class="pm-div-label">
                                <img src="/assets/sorting.svg" alt="">
                                <span>Sorting</span>
                            </div>
                            <div class="pm-div-sign">
                                <img src="/assets/checkmark.svg" alt="">
                            </div>
                        </div>
                        <div class="pm-container standby">
                            <div class="pm-div-label">
                                <img src="/assets/local-delivery.svg" alt="">
                                <span>Local Delivery</span>
                            </div>
                            <div class="pm-div-sign">
                                <img src="/assets/standby.svg" alt="">
                            </div>
                        </div>
                        <div class="pm-container standby">
                            <div class="pm-div-label">
                                <img src="/assets/received.svg" alt="">
                                <span>Received</span>
                            </div>
                            <div class="pm-div-sign">
                                <img src="/assets/standby.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-container">
                    <img src="/assets/tracking-img.jpg" alt="">
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
</body>

</html>