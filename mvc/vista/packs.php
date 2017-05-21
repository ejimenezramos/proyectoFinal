<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Personal Care :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--Pablo 20/05/17: Estilos para el footer-->
	<link href="css/footer.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<!--Pablo 21/05/17: Barra de progreso-->
<script type="text/javascript">
	$(window).load(function(){
		$(window).scroll(function() {
			var wintop = $(window).scrollTop(), docheight = $('body').height(), winheight = $(window).height();
			console.log(wintop);
			var totalScroll = (wintop/(docheight-winheight))*100;
			console.log("total scroll" + totalScroll);
			$(".KW_progressBar").css("width",totalScroll+"%");
		});
	});
</script>
<div class="KW_progressContainer">
	<div class="KW_progressBar"></div>
</div>
<div class="header">

	<div class="container">

		<div class="logo">
			<h1 ><a href="?pagina=home">Cereal-Break<span>Experience</span></a></h1>
		</div>
		<div class="head-t">
			<ul class="card">
				<li><a href="?pagina=login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
				<li><a href="?pagina=register" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Registro</a></li>
			</ul>
			</div>
		<div class="header-ri">
		</div>
		<div class="nav-top">
			<nav class="navbar navbar-default">

				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>


				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="?pagina=home" class="hyper "><span>Home</span></a></li>
						<li><a href="?pagina=productos" class="hyper"><span>Productos</span></a>
						</li>
						<li  class="active"><a href="?pagina=packs" class="hyper"><span>Packs
										especiales</span></a></li>
						<li><a href="?pagina=aboutus" class="hyper"> <span>Sobre
										nosotros</span></a></li>
						<li><a href="?pagina=contact" class="hyper"><span>Contáctanos</span></a></li>
					</ul>
				</div>
			</nav>
			<div class="cart" >

				<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
</div>
<!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Packs Especiales</h3>
		<h4><a href="?pagina=home">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--Pack numero 1-->
		<div class="product2">
			<div class="container">
					<div class=" con-w3l agileinf">
					<H3 class="titulo_pack">Pack Infantil</H3>
						<div class="container borderpack">
								<div class="col-md-3">
									<div class="col-m2">
									<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
											<img src="images/boxlucky.png" class="img-responsive" alt="">
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>Cereales Lucky Chrams</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-m2">
										<a href="#" data-toggle="modal" class="offer-img" data-target="#myModal8">
											<img src="images/milkblue.png" class="img-responsive" alt="">
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>Leche azul</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-m2">
										<a href="#" data-toggle="modal" class="offer-img" data-target="#myModal6">
											<img src="images/topfresa.png" class="img-responsive" alt="">
										</a>
										<div class="mid-1">
											<div class="women">
												<h6>Sirope de fresa</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="col-m2 boton_packs">
										<div class="mid-1">
											<div style="text-align: center;">
												<button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Cheerios" data-summary="summary 24" data-price="3.00" data-quantity="1" data-image="images/boxcheerios.png">Add to Cart</button>							
											</div>
										</div>
									</div>
								</div>		
						</div>	
				</div>
			</div>
		</div>
<!--Pack numero 2-->
<div class="product2">
	<div class="container">
		<div class=" con-w3l agileinf">
			<H3 class="titulo_pack">Pack Chocolate</H3>
			<div class="container borderpack">
				<div class="col-md-3">
					<div class="col-m2">
						<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
							<img src="images/boxcocoa.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Cereales Cocoa Puffs</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-m2">
						<a href="#" data-toggle="modal" class="offer-img" data-target="#myModal11">
							<img src="images/milkvainilla.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Leche de vainilla</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-m2">
						<a href="#" data-toggle="modal" class="offer-img" data-target="#myModal6">
							<img src="images/topchocolate.png" class="img-responsive" alt="">
						</a>
						<div class="mid-1">
							<div class="women">
								<h6>Sirope de chocolate</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-m2 boton_packs">
						<div class="mid-1">
							<div style="text-align: center;">
								<button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="Cheerios" data-summary="summary 24" data-price="3.00" data-quantity="1" data-image="images/boxcheerios.png">Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--footer Pablo 20/05/17: Nuevo footer-->
<footer class="footer-distributed">
	<div class="footer-left">
		<h3>Cereal<span>Break</span></h3>

		<p class="footer-links">
			<a href="?pagina=home">Licencia</a>
			·
			<a href="?pagina=productos">Devoluciones</a><br>

			<a href="?pagina=packs">Envío y entrega</a>
			·
			<a href="?pagina=packs">Preguntas frecuentes</a>
		</p>

		<p class="footer-company-name">Cereal Break &copy; 2017</p>
	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>Paseo de la Castellana 10</span> Madrid, España</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+1 555 123456</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@company.com">support@cerealbreak.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p class="footer-company-about">
			<span>Pasión por los cereales</span>
			Disfruta de los mejores cereales del mundo en tu propia casa
		</p>

		<div class="footer-icons">

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
		</div>

	</div>
</footer>
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
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
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
						<img src="images/boxcheerios.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Cheerios</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>4.00€</del>-->3.00€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Disfruta de uno de nuestros deliciosos cereales con sabor a
						cacahuete y miel.</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="24" data-name="Cheerios" data-summary="summary 24"
								data-price="3.00" data-quantity="1" data-image="images/boxcheerios.png">Add
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
						<img src="images/boxreeses.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Reese´s Puffs</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>5.00€</del>-->4.50€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Nuestras deliciosas bocanadas de maíz, dulces
						y crujientes con mantequilla de cacahuete</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="25" data-name="Peach Halves" data-summary="summary 25"
								data-price="4.50" data-quantity="1" data-image="images/boxreeses.png">Add
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
						<img src="images/boxcinnamon.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Cinnamon Crunch</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>4.00€</del>-->3.50€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Sabrosos cereales de maíz tostado con sabor a canela</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="26" data-name="Banana" data-summary="summary 26"
								data-price="3.50" data-quantity="1" data-image="images/boxcinnamon.png">Add
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
						<img src="images/boxfroot.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Froot Loops</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>3.50€</del>-->3.20€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Deliciosos aros de cereales que colorearán tu día</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="27" data-name="Rice" data-summary="summary 27"
								data-price="3.20" data-quantity="1" data-image="images/boxfroot.png">Add
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
						<img src="images/boxlucky.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Lucky Charms</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>5.00€</del>-->4.00€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">
						Saborea unos estupendos cereales de colores y descubre la magia de sus cinco
						nuevos amuletos de diamantes.
					</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="28" data-name="Lucky Charms" data-summary="summary 28"
								data-price="4.00" data-quantity="1" data-image="images/boxlucky.png">Add
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
						<img src="images/boxtrix.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Trix</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>5.00€</del>-->4.50€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Deliciosos cereales que daran alegría a tu día</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="29" data-name="Biscuits" data-summary="summary 29"
								data-price="4.50" data-quantity="1" data-image="images/boxtrix.png">Add
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
						<img src="images/boxcocoa.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Cocoa Puffs</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>4.00€</del>-->3.50€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Deliciosos cereales de chocolate que chocolatearán tu leche</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="30" data-name="Nuts" data-summary="summary 30"
								data-price="3.50" data-quantity="1" data-image="images/boxcocoa.png">Add
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
						<img src="images/milkblue.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Leche Azul</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>1.00€</del>-->0.80€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Descripción:</h4>
					<p class="quick_desc">Deliciosa leche de color azul</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="31" data-name="Rice" data-summary="summary 31"
								data-price="0.80" data-quantity="1" data-image="images/milkblue.png">Add
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
						<img src="images/milkpink.png" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-7 span-1 ">
					<h3>Leche Rosa</h3>
					<div class="price_single">
						<span class="reducedfrom "><del>1.00€</del>-->0.80€</span>

						<div class="clearfix"></div>
					</div>
					<h4 class="quick">Quick Overview:</h4>
					<p class="quick_desc">Nam liber tempor cum soluta nobis
						eleifend option congue nihil imperdiet doming id quod mazim
						placerat facer possim assum. Typi non habent claritatem insitam;
						es</p>
					<div class="add-to">
						<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="32" data-name="Noodles" data-summary="summary 32"
								data-price="1.50" data-quantity="1" data-image="images/of32.png">Add
							to Cart</button>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>






				
</body>
</html>