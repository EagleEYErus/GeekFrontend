<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/product.css">
	<title>Shop</title>
</head>

<body>
	<header>
		<div class="header-container"><a href="#"><img src="img/logo.jpg" alt=""></a>
			<a href="#">
				<p class="brand">BRAN<span class="brand-red">D</span></p>
			</a>
			<div class="dropdown"><button class="dropdown-toggle drop-down" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Browse</span></button>
				<div class="dropdown-menu drop-down-menu">
					<h3 class="dropdown-header">Women</h3>
					<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dresses</a><a class="dropdown-item" href="#">Tops</a><a class="dropdown-item" href="#">Sweaters/Knits</a><a class="dropdown-item" href="#">Jackets/Coats</a><a class="dropdown-item" href="#">Blazers</a><a class="dropdown-item"
					    href="#">Denim</a><a class="dropdown-item" href="#">Leggings/Pants</a><a class="dropdown-item" href="#">Skirts/Shorts</a><a class="dropdown-item" href="#">Accesories</a>
					<h3 class="dropdown-header">Men</h3>
					<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Tees/Tank tops</a><a class="dropdown-item" href="#">Shirts/Polos</a><a class="dropdown-item" href="#">Sweaters</a><a class="dropdown-item" href="#">Sweatshirts/Hoodies</a><a class="dropdown-item" href="#">Blazers</a>
					<a
					    class="dropdown-item" href="#">Jackets/vests</a>
				</div>
			</div><input id="search-field" type="text" name="search" placeholder="Search for Item..."><button class="search-button"><img src="img/search.jpg" alt=""></button><a class="cart" href=""><img src="img/cart.jpg" alt=""></a><button class="account">My Account <img src="img/account-arrow.png" alt=""></button></div>
	</header>
	<nav class="navigation-bar">
		<ul class="menu">
			<li><a href="#">Home</a></li>
			<li><a href="./product.html">Man</a></li>
			<li><a href="#">Women</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Accesories</a></li>
			<li><a href="#">Featured</a></li>
			<li><a href="#">Hot deals</a></li>
		</ul>
	</nav>
	<div class="content">
		<div class="categories">
			<a class="categories-menu categories__category-items" data-toggle="collapse" href="#categoryItems" aria-expanded="true" aria-controls="categoryItems">
				<p>category</p><i class="fa fa-caret-down" aria-hidden="true"></i>
				<div class="border"></div>
			</a>
			<div class="collapse" id="categoryItems" role="tabpanel">
				<ul class="category-items">
					<li><a href="#">Accesories</a></li>
					<li><a href="#">Bags</a></li>
					<li><a href="#">Denim</a></li>
					<li><a href="#">Hoodies &amp; Sweatshirts</a></li>
					<li><a href="#">Jackets &amp; Coats</a></li>
					<li><a href="#">Pants</a></li>
					<li><a href="#">Polos</a></li>
					<li><a href="#">Shirts</a></li>
					<li><a href="#">Shoes</a></li>
					<li><a href="#">Shorts</a></li>
					<li><a href="#">Sweaters &amp; Knits</a></li>
					<li><a href="#">T-Shirts</a></li>
					<li><a href="#">Tanks</a></li>
				</ul>
			</div>
			<a class="categories-menu categories__brand-items" data-toggle="collapse" href="#brandItems" aria-expanded="true" aria-controls="brandItems">
				<p>brand</p><i class="fa fa-caret-down" aria-hidden="true"></i>
				<div class="border"></div>
			</a>
			<div class="collapse" id="brandItems" role="tabpanel">
				<ul class="category-items">
					<li><a href="#">Accesories</a></li>
					<li><a href="#">Bags</a></li>
					<li><a href="#">Denim</a></li>
					<li><a href="#">Hoodies &amp; Sweatshirts</a></li>
				</ul>
			</div>
			<a class="categories-menu categories__designer-items" data-toggle="collapse" href="#designerItems" aria-expanded="true" aria-controls="designerItems">
				<p>designer</p><i class="fa fa-caret-down" aria-hidden="true"></i>
				<div class="border"></div>
			</a>
			<div class="collapse" id="designerItems" role="tabpanel">
				<ul class="category-items">
					<li><a href="#">Shorts</a></li>
					<li><a href="#">Sweaters &amp; Knits</a></li>
					<li><a href="#">T-Shirts</a></li>
					<li><a href="#">Tanks</a></li>
				</ul>
			</div>
		</div>
		<div class="products-container">
			<div class="filter">
				<div class="trending">
					<h2>Trending now</h2>
					<div class="container">
						<div class="row row-margin justify-content-between trending-items"><a class="col-5 text-left" href="#">Bohemian</a><a class="col-4 text-center bordered" href="#">Floral</a><a class="col-3 text-right" href="#">Lace</a></div>
						<div class="row justify-content-between trending-items"><a class="col-3 text-left" href="#">Floral</a><a class="col-4 text-center bordered" href="#">Lace</a><a class="col-5 text-right" href="#">Bohemian</a></div>
					</div>
				</div>
				<div class="size">
					<h2>Size</h2>
					<div class="container">
						<div class="row row-margin justify-content-between"><label class="col-2"><input type="checkbox" name="xxs" id="">xxs</label><label class="col-2"><input type="checkbox" name="xs" id="">xs</label><label class="col-2"><input type="checkbox" name="s" id="">s</label><label class="col-2"><input type="checkbox" name="m" id="">m</label></div>
						<div
						    class="row justify-content-between"><label class="col-2"><input type="checkbox" name="l" id="">l</label><label class="col-2"><input type="checkbox" name="xl" id="">xl</label><label class="col-2"><input type="checkbox" name="xxl" id="">xxl</label>
							<div class="col-2"></div>
					</div>
				</div>
			</div>
			<div class="price">
				<h2>Price</h2>
				<div class="pmd-range-slider" id="pmd-slider-range"></div>
				<div class="slider-price">
					<p>$52</p>
					<p>$400</p>
				</div>
			</div>
		</div>
		<div class="sort">
			<div class="sorting"><span>Sort By</span>
				<div class="dropdown"><button class="dropdown-toggle sorting-button dropdown__sort" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Name</button>
					<div class="dropdown-menu sort-menu"><a class="dropdown-item" href="#">Name</a><a class="dropdown-item" href="#">Price</a></div>
				</div>
			</div>
			<div class="sorting"><span>Show</span>
				<div class="dropdown"><button class="dropdown-toggle sorting-button dropdown__show" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">09</button>
					<div class="dropdown-menu sort-menu"><a class="dropdown-item" href="#">09</a><a class="dropdown-item" href="#">06</a><a class="dropdown-item" href="#">03</a></div>
				</div>
			</div>
		</div>
		<div class="products">
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-1.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-2.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-3.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-4.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-5.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-6.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-7.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-8.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
			<div class="product">
				<a href="#">
					<div class="thinner">
						<div class="thinner-container"><a class="thinner-cart" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><p class="thinner-text">Add to Cart</p></a>
							<div class="thinner-social"><a class="thinner-retweet" href="#"><i class="fa fa-retweet" aria-hidden="true"></i></a><a class="thinner-like" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
						</div>
					</div><img src="./img/product-9.png" alt="">
					<p class="product-name">Mango people t-shirt</p>
					<p class="price">$52.00</p>
				</a>
			</div>
		</div>
	</div>
	</div>
	<div class="product-navigation">
		<ul class="pagination">
			<li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">20</a></li>
			<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		</ul>
		<div class="view-all"><button>View All</button></div>
	</div>
	<div class="adversiting">
		<div class="adversiting-icons"><img src="img/delivery.png" alt=""><img src="img/sales.png" alt=""><img src="img/assuranse.png" alt=""></div>
		<div class="adversiting-about">
			<div>
				<h2>Free Delivery</h2><br>
				<p>Worldwide delivery on all. Authorittively morph next-generation innovation with extensive models.</p>
			</div>
			<div>
				<h2>Sales &amp; discounts</h2><br>
				<p>Worldwide delivery on all. Authorittively morph next-generation innovation with extensive models.</p>
			</div>
			<div>
				<h2>Quality assuranse</h2><br>
				<p>Worldwide delivery on all. Authorittively morph next-generation innovation with extensive models.</p>
			</div>
		</div>
	</div>
	<div class="subscribe"><img src="img/subscribe.jpg" alt="">
		<div class="overlay"><img src="img/subscribe-overlay.png" alt=""></div>
		<div class="center-delimiter"></div>
		<div class="info"><img src="img/subscribe-photo.png" alt="">
			<p class="info-text">"Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium"</p>
			<div class="contact">
				<p class="info-name">Bin Burhan</p>
				<p class="info-signature">Dhaka, Bd</p>
				<div class="slider-bar">
					<div></div>
					<div class="active"></div>
					<div></div>
				</div>
			</div>
		</div>
		<div class="subscribe-text">
			<p class="subscribe-title">subscribe</p>
			<p class="subscribe-description">for our newsletter and promotion</p>
		</div>
		<div class="email-container"><input id="subscribe-email" type="email" name="email" placeholder="Enter Your Email"><button class="subscribe-button">Subscribe</button></div>
	</div>
	<div class="pre-footer">
		<div class="shop-info">
			<div class="logo"><img src="img/logo.jpg" alt="">
				<p class="brand">BRAN<span class="brand-red">D</span></p>
			</div>
			<div class="about-text">
				<p class="about">Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary materials before go forward benefits. Intrinsicly syndicate an expanded array of processes and cross-unit partnerships.</p><br>
				<p
				    class="about">Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize superior initiatives for wireless technologies. Dynamically optimize.</p>
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
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="http://propeller.in/components/range-slider/js/wNumb.js"></script>
	<script src="http://propeller.in/components/range-slider/js/nouislider.js"></script>
	<script src="./scripts/product.js"></script>
</body>

</html>