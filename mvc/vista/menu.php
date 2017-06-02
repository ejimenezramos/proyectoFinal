<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cereal-Mix</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords"
	content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript">
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop : $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700'
	rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700'
	rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
<link rel="stylesheet" href="css/jstarbox.css" type="text/css"
	  media="screen" charset="utf-8" />
<script type="text/javascript">
	jQuery(function() {
		jQuery('.starbox')
				.each(
						function() {
							var starbox = jQuery(this);
							starbox
									.starbox(
											{
												average : starbox
														.attr('data-start-value'),
												changeable : starbox
														.hasClass('unchangeable') ? false
														: starbox
																.hasClass('clickonce') ? 'once'
																: true,
												ghosting : starbox
														.hasClass('ghosting'),
												autoUpdateAverage : starbox
														.hasClass('autoupdate'),
												buttons : starbox
														.hasClass('smooth') ? false
														: starbox
																.attr('data-button-count') || 5,
												stars : starbox
														.attr('data-star-count') || 5
											})
									.bind(
											'starbox-value-changed',
											function(event, value) {
												if (starbox.hasClass('random')) {
													var val = Math.random();
													starbox.next().text(
															' ' + val);
													return val;
												}
											})
						});
	});
</script>
<!---//End-rate---->

</head>
<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1>
					<a href="menu.php">Cereal-Break<span>Experience</span></a>
				</h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="?pagina=login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="?pagina=register" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Registro</a></li>
				</ul>	
			</div>
			<div class="header-ri"></div>
			<div class="nav-top">
				<nav class="navbar navbar-default">
					<div class="navbar-header nav_2">
						<button type="button"
							class="navbar-toggle collapsed navbar-toggle1"
							data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="?pagina=menu" class="hyper "><span>Home</span></a></li>
							<li><a href="?pagina=productos" class="hyper"><span>Productos</span></a>
							</li>
							<li><a href="?pagina=packs" class="hyper"><span>Packs
										especiales</span></a></li>
							<li><a href="?pagina=aboutus" class="hyper"> <span>Sobre
										nosotros</span></a></li>
							<li><a href="?pagina=contact" class="hyper"><span>Contáctanos</span></a></li>
						</ul>
					</div>
				</nav>
				<div class="cart">
					<span class="fa fa-shopping-cart my-cart-icon"><span
						class="badge badge-notify my-cart-badge"></span></span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---->
	<div data-vide-bg="video/video5">
		<div class="container">
			<div class="banner-info">
				<h3>Tomaté un descanso y prueba nuestros deliciosos cereales</h3>
				<div class="search-form">
					<form action="#" method="post">
						<input type="text" placeholder="Search..." name="Search...">
						<input type="submit" value=" ">
					</form>
				</div>
			</div>
		</div>
	</div>

	<script>
		window.jQuery
				|| document
						.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
	</script>
	<script src="js/jquery.vide.min.js"></script>


	<!--content-->
	<div class="content-mid">
		<div class="container">

			<div class="col-md-4 m-w3ls">
				<div class="col-md1 ">
					<a href="productos.php"> <img src="images/cer1.jpg"
												  class="img-responsive img" alt="">
						<div class="big-sa">

							<h3>
								Frutas<span>exp</span>
							</h3>
							<p>Prueba nuestros nuevos sabores frutales</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 m-w3ls1">
				<div class="col-md ">
					<a href="hold.html"> <img src="images/lr.jpg"
											  class="img-responsive img" alt="">
						<div class="big-sale">
							<div class="big-sale1">
								<h3>
									Color<span>Milk</span>
								</h3>
								<p>Colorea tu desayuno de una manera diferente</p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 m-w3ls">
				<div class="col-md2 ">
					<a href="productos.php"> <img src="images/sirope.jpg"
												  class="img-responsive img1" alt="">
						<div class="big-sale2">
							<h3>
								#<span>toppings</span>
							</h3>
							<p>Añadele un topping</p>
						</div>
					</a>
				</div>
				<div class="col-md3 ">
					<a href="hold.html"> <img src="images/pack.jpg"
											  class="img-responsive img1" alt="">
						<div class="big-sale3">
							<h3>
								+<span>Vendidos</span>
							</h3>
							<p>Dejate asesorar por nuestros seguidores</p>
						</div>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2>
					<a href="menu.php">
					</b>Cereal-Break<span></span></a>
				</h2>

				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook"
							aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter"
							aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p"
							aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble"
							aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
						<p>
							<i class="fa fa-home" aria-hidden="true"></i>12K Street , 45
							Building Road Canada.
						</p>
					</div>
					<div class="col-md-4 fo-grid1">
						<p>
							<i class="fa fa-phone" aria-hidden="true"></i>+1234 758 839 ,
							+1273 748 730
						</p>
					</div>
					<div class="col-md-4 fo-grid1">
						<p>
							<a href="mailto:info@example.com"><i class="fa fa-envelope-o"
								aria-hidden="true"></i>info@example1.com</a>
						</p>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
			<div class="copy-right">
				<p>
					&copy; 2016 Big store. All Rights Reserved | Design by <a
						href="http://w3layouts.com/"> W3layouts</a>
				</p>
			</div>
		</div>
	</div>
	<!-- //footer-->

	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			 */
			$().UItoTop({
				easingType : 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span
		id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="js/jquery.mycart.js"></script>
	<script type="text/javascript">
		$(function() {

			var goToCartIcon = function($addTocartBtn) {
				var $cartIcon = $(".my-cart-icon");
				var $image = $(
						'<img width="30px" height="30px" src="'
								+ $addTocartBtn.data("image") + '"/>').css({
					"position" : "fixed",
					"z-index" : "999"
				});
				$addTocartBtn.prepend($image);
				var position = $cartIcon.position();
				$image.animate({
					top : position.top,
					left : position.left
				}, 500, "linear", function() {
					$image.remove();
				});
			}

			$('.my-cart-btn').myCart({
				classCartIcon : 'my-cart-icon',
				classCartBadge : 'my-cart-badge',
				affixCartIcon : true,
				checkoutCart : function(products) {
					$.each(products, function() {
						console.log(this);
					});
				},
				clickOnAddToCart : function($addTocart) {
					goToCartIcon($addTocart);
				},
				getDiscountPrice : function(products) {
					var total = 0;
					$.each(products, function() {
						total += this.quantity * this.price;
					});
					return total * 1;
				}
			});

		});
	</script>

	<!-- product -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Moong(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="1" data-name="Moong" data-summary="summary 1"
								data-price="1.50" data-quantity="1" data-image="images/of.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of1.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Sunflower Oil(5 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$10.00</del>$9.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="2" data-name="Sunflower Oil" data-summary="summary 2"
								data-price="9.00" data-quantity="1" data-image="images/of1.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of2.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kabuli Chana(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$3.00</del>$2.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="3" data-name="Kabuli Chana" data-summary="summary 3"
								data-price="2.00" data-quantity="1" data-image="images/of2.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of3.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Soya Chunks(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="4" data-name="Soya Chunks" data-summary="summary 4"
								data-price="3.50" data-quantity="1" data-image="images/of3.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of4.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lays(100 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="5" data-name="Lays" data-summary="summary 5"
								data-price="0.70" data-quantity="1" data-image="images/of4.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal6" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of5.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kurkure(100 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="6" data-name="Kurkure" data-summary="summary 6"
								data-price="0.70" data-quantity="1" data-image="images/of5.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal7" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of6.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Popcorn(250 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="7" data-name="Popcorn" data-summary="summary 7"
								data-price="1.00" data-quantity="1" data-image="images/of6.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal8" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of7.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Nuts(250 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="8" data-name="Nuts" data-summary="summary 8"
								data-price="3.50" data-quantity="1" data-image="images/of7.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal9" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of8.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Banana(6 pcs)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="9" data-name="Banana" data-summary="summary 9"
								data-price="1.50" data-quantity="1" data-image="images/of8.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal10" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of9.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Onion(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.70</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="10" data-name="Onion" data-summary="summary 10"
								data-price="0.70" data-quantity="1" data-image="images/of9.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal11" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of10.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bitter Gourd(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$2.00</del>$1.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="11" data-name="Bitter Gourd" data-summary="summary 11"
								data-price="1.00" data-quantity="1" data-image="images/of10.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal12" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of11.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Apples(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="12" data-name="Apples" data-summary="summary 12"
								data-price="3.50" data-quantity="1" data-image="images/of11.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal13" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of12.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Honey(500 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$7.00</del>$6.00</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="13" data-name="Honey" data-summary="summary 13"
								data-price="6.00" data-quantity="1" data-image="images/of12.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal14" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of13.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Chocos(250 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$5.00</del>$4.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="14" data-name="Chocos" data-summary="summary 14"
								data-price="4.50" data-quantity="1" data-image="images/of13.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal15" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of14.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oats(1 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$4.00</del>$3.50</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="15" data-name="Oats" data-summary="summary 15"
								data-price="3.50" data-quantity="1" data-image="images/of14.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal16" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of15.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Bread(500 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="16" data-name="Bread" data-summary="summary 16"
								data-price="0.80" data-quantity="1" data-image="images/of15.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal17" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of16.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Moisturiser(500 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="17" data-name="Moisturiser" data-summary="summary 17"
								data-price="0.80" data-quantity="1" data-image="images/of16.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal18" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of17.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Lady Finger(250 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="18" data-name="Lady Finger" data-summary="summary 18"
								data-price="0.80" data-quantity="1" data-image="images/of17.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal19" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of18.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Satin Ribbon Red(1 pc)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="19" data-name="Satin Ribbon Red"
								data-summary="summary 19" data-price="0.80" data-quantity="1"
								data-image="images/of18.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal20" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of19.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Grapes(500 g)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="20" data-name="Grapes" data-summary="summary 20"
								data-price="0.80" data-quantity="1" data-image="images/of19.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal21" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of20.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Clips(1 pack)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="21" data-name="Clips" data-summary="summary 21"
								data-price="0.80" data-quantity="1" data-image="images/of20.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal22" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of21.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Conditioner</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single">
							<span class="reducedfrom "><del>$1.00</del>$0.80</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Quick Overview:</h4>
						<p class="quick_desc">Nam liber tempor cum soluta nobis
							eleifend option congue nihil imperdiet doming id quod mazim
							placerat facer possim assum. Typi non habent claritatem insitam;
							es</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="22" data-name="Conditioner" data-summary="summary 22"
								data-price="0.80" data-quantity="1" data-image="images/of21.png">Add
								to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- product -->
	<div class="modal fade" id="myModal23" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body modal-spa">
					<div class="col-md-5 span-2">
						<div class="item">
							<img src="images/of22.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Cleaner(250 kg)</h3>
						<p class="in-para">There are many variations of passages of
							Lorem Ipsum.</p>
						<div class="price_single"></div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- product -->
		<div class="modal fade" id="myModal24" tabindex="-1" role="dialog"
			aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body modal-spa">
						<div class="col-md-5 span-2">
							<div class="item">
								<img src="images/of23.png" class="img-responsive" alt="">
							</div>
						</div>
						<div class="col-md-7 span-1 ">
							<h3>Gel(150 g)</h3>
							<p class="in-para">There are many variations of passages of
								Lorem Ipsum.</p>
							<div class="price_single">
								<span class="reducedfrom "><del>$1.00</del>$0.80</span>

								<div class="clearfix"></div>
							</div>
							<h4 class="quick">Quick Overview:</h4>
							<p class="quick_desc">Nam liber tempor cum soluta nobis
								eleifend option congue nihil imperdiet doming id quod mazim
								placerat facer possim assum. Typi non habent claritatem insitam;
								es</p>
							<div class="add-to">
								<button class="btn btn-danger my-cart-btn my-cart-btn1 "
									data-id="24" data-name="Gel" data-summary="summary 24"
									data-price="0.80" data-quantity="1"
									data-image="images/of23.png">Add to Cart</button>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>