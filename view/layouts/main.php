<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../web/css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../web/css/<?= \components\RequestComponent::$controller ?>.css">
    <title>Shop</title>
</head>

<body>
<header>
    <div class="header-container"><a href="#"><img src="../../web/img/logo.jpg" alt=""></a>
        <a href="#">
            <p class="brand">BRAN<span class="brand-red">D</span></p>
        </a>
        <div class="dropdown">
            <button class="dropdown-toggle drop-down" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><span>Browse</span></button>
            <div class="dropdown-menu drop-down-menu">
                <h3 class="dropdown-header">Women</h3>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Dresses</a>
                <a class="dropdown-item" href="#">Tops</a>
                <a class="dropdown-item" href="#">Sweaters/Knits</a>
                <a class="dropdown-item" href="#">Jackets/Coats</a>
                <a class="dropdown-item" href="#">Blazers</a>
                <a class="dropdown-item" href="#">Denim</a>
                <a class="dropdown-item" href="#">Leggings/Pants</a>
                <a class="dropdown-item" href="#">Skirts/Shorts</a>
                <a class="dropdown-item" href="#">Accesories</a>
                <h3 class="dropdown-header">Men</h3>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Tees/Tank tops</a>
                <a class="dropdown-item" href="#">Shirts/Polos</a>
                <a class="dropdown-item" href="#">Sweaters</a>
                <a class="dropdown-item" href="#">Sweatshirts/Hoodies</a>
                <a class="dropdown-item" href="#">Blazers</a>
                <a class="dropdown-item" href="#">Jackets/vests</a>
            </div>
        </div>
        <input id="search-field" type="text" name="search" placeholder="Search for Item...">
        <button class="search-button"><img src="../../web/img/search.jpg" alt=""></button>
        <a class="cart" href=""><img src="../../web/img/cart.jpg" alt=""></a>
        <button class="account">My Account <img src="../../web/img/account-arrow.png" alt=""></button>
    </div>
</header>
<nav class="navigation-bar">
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="/product">Man</a></li>
        <li><a href="#">Women</a></li>
        <li><a href="#">Kids</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="#">Featured</a></li>
        <li><a href="#">Hot deals</a></li>
    </ul>
</nav>
<!--innerView-->
<div class="pre-footer">
    <div class="shop-info">
        <div class="logo"><img src="../../web/img/logo.jpg" alt="">
            <p class="brand">BRAN<span class="brand-red">D</span></p>
        </div>
        <div class="about-text">
            <p class="about">Objectively transition extensive data rather than cross functional solutions.
                Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate
                an expanded array of processes and cross-unit partnerships.</p><br>
            <p class="about">Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively
                seize superior initiatives for wireless technologies. Dynamically optimize.</p>
        </div>
    </div>
    <nav class="about-links">
        <h2 class="about-title">Company</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <nav class="about-links">
        <h2 class="about-title">Information</h2>
        <ul>
            <li><a href="#">Tearms &amp; Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">How to Buy</a></li>
            <li><a href="#">How to Sell</a></li>
            <li><a href="#">Promotion</a></li>
        </ul>
    </nav>
    <nav class="about-links">
        <h2 class="about-title">Shop Category</h2>
        <ul>
            <li><a href="#">Men</a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Child</a></li>
            <li><a href="#">Apparel</a></li>
            <li><a href="#">Browse All</a></li>
        </ul>
    </nav>
</div>
<footer>
    <div class="footer-content">
        <p class="copyright">© 2017 Brand All Rights Reserved.</p>
        <div class="social-networks">
            <a href="#">
                <div class="social-network"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            </a>
            <a href="#">
                <div class="social-network"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            </a>
            <a href="#">
                <div class="social-network"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
            </a>
            <a href="#">
                <div class="social-network"><i class="fa fa-pinterest-p" aria-hidden="true"></i></div>
            </a>
            <a href="#">
                <div class="social-network"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<?php
if (\components\RequestComponent::$controller === 'product') {
    echo "<script src='http://propeller.in/components/range-slider/js/wNumb.js'></script>
          <script src='http://propeller.in/components/range-slider/js/nouislider.js'></script>
          <script src='../../web/js/product.js'></script>";
}
?>
</body>

</html>
