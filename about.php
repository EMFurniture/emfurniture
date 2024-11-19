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

            <div class="about-us-container">
                <h4>About Us</h4>
                
                <p>Welcome to EM Furniture! At EM Furniture, Our mission is to provide high-quality, stylish, and
                    functional furniture that transforms your house into a home.</p>

                <h5>Our Story</h5>

                <p>Founded in September 9, 2021, EM Furniture Shop started with a simple vision, to make beautiful and
                    durable furniture accessible to everyone. From our humble beginnings as a small family-run shop, we
                    have grown into a beloved destination for furniture enthusiasts and home decorators alike.</p>

                <h5>Our Commitment</h5>

                <p>We are dedicated to offering a diverse range of furniture that caters to various tastes and needs.
                    Whether you are looking for modern, contemporary, classic, or rustic styles, you will find something
                    to suit your aesthetic at our store. Each piece in our collection is carefully selected for its
                    quality, craftsmanship, and design.</p>

                <h5>Our Values</h5>

                <ul>
                    <li><b>Quality:</b> We prioritize craftsmanship and durability in every piece we offer.</li>
                    <li><b>Customer Satisfaction:</b> Your happiness is our top priority. We are here to assist you at
                        every
                        step, from selection to delivery.</li>
                    <li><b>Sustainability:</b> We are committed to environmentally friendly practices, sourcing
                        materials
                        responsibly and offering eco-friendly products.</li>
                </ul>
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