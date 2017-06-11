<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cereal-Break | Tu búsqueda</title>
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
<!--Pablo 15/05/17: Estilos w3c para los slideshow-->
<link href="css/w3c.css" rel='stylesheet' type='text/css' />
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
	<!--Pablo 21/05/17: Barra de progreso-->
	<script type="text/javascript">
		$(window).load(function(){
			$(window).scroll(function() {
				var wintop = $(window).scrollTop(), docheight = $('body').height(), winheight = $(window).height();	
				var totalScroll = (wintop/(docheight-winheight))*100;
				$(".KW_progressBar").css("width",totalScroll+"%");
			});
		});
	</script>
	<div class="KW_progressContainer">
		<div class="KW_progressBar"></div>
	</div>
	<!--Pablo 21/05/17: Cabecera-->
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1>
					<a href="?pagina=home">Cereal-Break<span>Experience</span></a>
				</h1>
			</div>
			<div class="head-t">
				<ul class="card">{{login}}
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
							<li><a href="?pagina=home" class="hyper "><span>Home</span></a></li>
							<li class="active"><a href="?pagina=productos" class="hyper"><span>Productos</span></a>
							</li>
							<li><a href="?pagina=packs" class="hyper"><span>Packs especiales</span></a></li>
							<li><a href="?pagina=aboutus" class="hyper"> <span>Sobre nosotros</span></a></li>
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


	<!--PABLO: Nuevo slider con javascript-->
	<div class="banner-top">
		<div class="container">
			<h3>Productos</h3>
			<h4>
				<a href="?pagina=home">Home</a><label>/</label>Productos
			</h4>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="product">
		<div class="container">
			<h1 class="page-header">Resultados de la búsqueda</h1>
			{{listado}}
		</div>
	</div>


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
							<span class="reducedfrom ">3.00&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Disfruta de uno de nuestros deliciosos
							cereales con sabor a cacahuete y miel.</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="24" data-name="Cheerios" data-summary="summary 24"
								data-price="3.00" data-quantity="1"
								data-image="images/boxcheerios.png">Add to Cart</button>
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
							<span class="reducedfrom ">4.50&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Nuestras deliciosas bocanadas de ma�z,
							dulces y crujientes con mantequilla de cacahuete</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="25" data-name="Reese´s Puffs"
								data-summary="summary 25" data-price="4.50" data-quantity="1"
								data-image="images/boxreeses.png">Add to Cart</button>
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
							<span class="reducedfrom ">3.50&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Sabrosos cereales de maíz tostado con sabor
							a canela</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="26" data-name="Cinnamon Crunch"
								data-summary="summary 26" data-price="3.50" data-quantity="1"
								data-image="images/boxcinnamon.png">Add to Cart</button>
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
							<span class="reducedfrom ">3.20&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Deliciosos aros de cereales que colorearán
							tu día</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="27" data-name="Froot Loops" data-summary="summary 27"
								data-price="3.20" data-quantity="1"
								data-image="images/boxfroot.png">Add to Cart</button>
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
							<span class="reducedfrom ">4.75&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Saborea unos estupendos cereales de colores
							y descubre la magia de sus cinco nuevos amuletos de diamantes.</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="28" data-name="Lucky Charms" data-summary="summary 28"
								data-price="4.75" data-quantity="1"
								data-image="images/boxlucky.png">Add to Cart</button>
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
							<span class="reducedfrom ">4.50&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Deliciosos cereales que daran alegría a tu
							día</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="29" data-name="Trix" data-summary="summary 29"
								data-price="4.50" data-quantity="1"
								data-image="images/boxtrix.png">Add to Cart</button>
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
							<span class="reducedfrom ">3.50&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Deliciosos cereales de chocolate que
							chocolatearán tu leche</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="30" data-name="Cocoa Puffs" data-summary="summary 30"
								data-price="3.50" data-quantity="1"
								data-image="images/boxcocoa.png">Add to Cart</button>
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
							<span class="reducedfrom ">0.80&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Leche UHT Asturiana con colorante azul</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="31" data-name="Leche Azul" data-summary="summary 31"
								data-price="0.80" data-quantity="1"
								data-image="images/milkblue.png">Add to Cart</button>
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
							<span class="reducedfrom ">0.80&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Leche UHT Asturiana con colorante rosa</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="32" data-name="Leche Rosa" data-summary="summary 32"
								data-price="0.80" data-quantity="1"
								data-image="images/milkpink.png">Add to Cart</button>
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
							<img src="images/milkgreen.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Leche Verde</h3>
						<div class="price_single">
							<span class="reducedfrom ">0.80&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Leche UHT Asturiana con colorante verde</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="33" data-name="Leche Verde" data-summary="summary 33"
								data-price="0.80" data-quantity="1"
								data-image="images/milkgreen.png">Add to Cart</button>
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
							<img src="images/milkvainilla.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Leche de Vainilla</h3>
						<div class="price_single">
							<span class="reducedfrom ">0.90&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Leche UHT Asturiana con estracto de vainilla</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="34" data-name="Leche de Vainilla"
								data-summary="summary 34" data-price="0.90" data-quantity="1"
								data-image="images/milkvainilla.png">Add to Cart</button>
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
							<img src="images/milksojaalmond.png" class="img-responsive"
								alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Leche de Avena y soja</h3>
						<div class="price_single">
							<span class="reducedfrom ">1.20&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Leche de Soja con estractos de almendra</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="35" data-name="Leche de Avena y soja"
								data-summary="summary 35" data-price="1.20" data-quantity="1"
								data-image="images/milksojaalmond.png">Add to Cart</button>
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
							<img src="images/packkinder.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kinder Bueno</h3>
						<div class="price_single">
							<span class="reducedfrom"><del>1.80&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Paquete con unidades peque&ntilde;as de
							kinder bueno</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="36" data-name="Kinder Bueno" data-summary="summary 36"
								data-price="1.80" data-quantity="1"
								data-image="images/packkinder.png">Add to Cart</button>
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
							<img src="images/packchips.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Chips Ahoy</h3>
						<div class="price_single">
							<span class="reducedfrom"><del>1.80&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Paquete con unidades peque&ntilde;as de
							chips ahoy!</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="37" data-name="Chips Ahoy" data-summary="summary 37"
								data-price="1.80" data-quantity="1"
								data-image="images/packchips.png">Add to Cart</button>
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
							<img src="images/packbons.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Kinder Schoko-Bons</h3>
						<div class="price_single">
							<span class="reducedfrom "><del>1.80&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Paquete con unidades peque&ntilde;as de
							Schoko-bons</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="38" data-name="Kinder Schoko-Bons"
								data-summary="summary 38" data-price="1.80" data-quantity="1"
								data-image="images/of35.png">Add to Cart</button>
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
							<img src="images/packoreo.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Oreo</h3>
						<div class="price_single">
							<span class="reducedfrom ">1.80&euro;</span>

							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto</h4>
						<p class="quick_desc">Paquete con unidades peque&ntilde;as de
							oreos</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="39" data-name="Oreo" data-summary="summary 39"
								data-price="1.80" data-quantity="1"
								data-image="images/packoreo.png">Add to Cart</button>
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
							<img src="images/packconguitos.png" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-7 span-1 ">
						<h3>Conguitos</h3>
						<div class="price_single">
							<span class="reducedfrom ">1.80&euro;</span>
							<div class="clearfix"></div>
						</div>
						<h4 class="quick">Descripci&oacute;n del producto:</h4>
						<p class="quick_desc">Paquete con unidades peque&ntilde;as de
							conguitos</p>
						<div class="add-to">
							<button class="btn btn-danger my-cart-btn my-cart-btn1 "
								data-id="40" data-name="Conguitos" data-summary="summary 40"
								data-price="1.80" data-quantity="1"
								data-image="images/packconguitos.png">Add to Cart</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>

	<!--footer Pablo 20/05/17: Nuevo footer-->
	<footer class="footer-distributed">
		<div class="footer-left">
			<h3>
				Cereal<span>Break</span>
			</h3>

			<p class="footer-links">
				<a class="cursor_pointer"
					onclick="window.open('?pagina=licencia', 'Licencia', 'width=900, height=600')">
					Licencia</a> · <a class="cursor_pointer" data-toggle="modal"
					data-target="#ModalDevoluciones">Devoluciones</a> · <a
					class="cursor_pointer" data-toggle="modal"
					data-target="#ModalEnvioEntrega">Envío y entrega</a>
			</p>

			<a rel="license"
				href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img
				alt="Licencia Creative Commons" style="border-width: 0"
				src="https://i.creativecommons.org/l/by-nc-nd/4.0/80x15.png" /></a>

		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p>
					<span>Paseo de la Castellana 10</span> Madrid, España
				</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+1 555 123456</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p>
					<a href="mailto:support@company.com">support@cerealbreak.com</a>
				</p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>Pasión por los cereales</span> Disfruta de los mejores
				cereales del mundo en tu propia casa
			</p>

			<div class="footer-icons">

				<ul class="social-fo">
					<li>
						<a href="http://www.facebook.com" class=" face">
							<i class="fa fa-facebook"
							   aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="http://www.twitter.com" class=" twi">
							<i class="fa fa-twitter"
							   aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="http://www.pinterest.com" class=" pin">
							<i class="fa fa-pinterest-p"
							   aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="https://dribbble.com/" class=" dri">
							<i class="fa fa-dribbble"
							   aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>

		</div>
	</footer>

	<!-- //footer-->

	<!-- MODALES DEL FOOTER -->
	<!-- Pablo 24/05/17 Modal para las Devoluciones -->

	<div class="modal fade" id="ModalDevoluciones" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pol&iacute;tica de devoluci&oacute;n de
						productos</h4>
				</div>
				<div class="modal-body">
					<p>
						Si usted no queda completamente satisfecho con el producto
						adquirido, se le repondr&aacute; la pieza o devolver el dinero
						siempre que cumpla con la las especificaciones detalladas a
						continuaci&oacuten. <br>Para ello es necesario que los productos
						(cereales, leche o topping) conserven los embalajes y precintos
						originales. Importante: no abrir el producto si se tiene la
						intenci&oacute;n de cambiar o devolverlo <br>En el caso de que
						desee devolver o cambiar un producto deber&aacute; enviarnos un
						correo electr&oacutenico a la direcci&oacuten
						support@cerealbreak.com explicando el motivo del cambio, indicando
						el n&uacute;mero de pedido y la fecha de recepci&oacute;n y
						adjuntando una foto del producto o productos en el estado en el
						que encuentran para su devoluci&oacute;n o cambio. <br>Para
						proceder al cambio o devoluci&oacute;n de un producto:
					</p>
					<ol>
						<li class="list-group-item1">El usuario o cliente dispone de siete
							d&iacute;as h&aacutebiles, contados desde la recepci&oacute;n del
							producto, para desistir del contrato sin necesidad de
							indicaci&oacute;n de los motivos siempre que el producto
							est&eacute; en perfectas condiciones</li>
						<li class="list-group-item1">Conservar el envoltorio original si
							&eacute;ste est&aacute; abierto no se podr&aacute; proceder al
							cambio o devoluci&oacute;n.</li>
						<li class="list-group-item1">Es requisito imprescindible que tanto
							el embalaje como el producto est&eacute;n en perfecto estado, no
							hayan sido manipulados, no presenten defectos ni deterioros por
							hechos externos u otras circunstancias que deriven en el
							menoscabo del producto, en especial la apertura del recipiente.</li>
						<li class="list-group-item1">Cualquier producto abierto, cortado o
							manipulado de cualquier manera no podr&aacute; ser sujeto a
							cambio o devoluci&oacute;n.</li>
						<li class="list-group-item1">El pedido devuelto deber&aacute; ser
							entregado junto con el albar&aacute;n de entrega y factura a la
							direcci&oacute;n que se le indicar&aacute; una vez se haya valora
							el caso y se proceda al cambio o devoluci&oacute;n.</li>
					</ol>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Pablo 24/05/17 Modal para el Envio y Entrega de los productos-->
	<div class="modal fade" id="ModalEnvioEntrega" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="wpb_wrapper">
						<h5>
							<span>TARIFAS Y CONDICIONES DEL TRANSPORTE</span>
						</h5>
						<hr>
						<p>
							<span>Realizamos todos nuestros pedidos en las 48h tras el pedido
								mediante las empresas&nbsp;<strong>NACEX</strong>, <strong>TNT</strong>
								y <strong>CORREOS&nbsp;</strong>
							</span>
						</p>
						<p>
							<span>&nbsp;</span>
						</p>
						<p>
							<span>Las <strong>TARIFAS DE ENV&#205;O</strong>&nbsp;van desde <strong>3,05&#8364;</strong>&nbsp;dependiendo
								del destino y peso del pedido.
							</span>
						</p>
						<p>
							<span>&nbsp;</span>
						</p>
						<p>
							<span>1. Las presentes condiciones ser&aacute;n de
								aplicaci&oacute;n para los env&iacute;os contratados en defecto
								de pactos o condiciones espec&iacute;ficas derivadas de la
								singularidad de cada producto o servicio.</span>
						</p>
						<p>
							<span>2. Los datos sobre el destino del pedido y para el
								destinatario, son facilitados por &eacute;ste y bajo su
								responsabilidad, no siendo comprobados por la agencia de
								transporte, salvo grave riesgo inminente u orden de la
								autoridad.</span>
						</p>
						<p>
							<span>3. La prestaci&oacute;n de los servicios se
								efectuar&aacute; de lunes a viernes. En el c&oacute;mputo
								temporal se excluyen los d&iacute;as festivos en la localidad de
								destino.</span>
						</p>
						<p>
							<span>4. En caso de incumplimiento del plazo de entrega
								contractualmente pactado, la indemnizaci&oacute;n a abonar
								consistir&aacute; en la devoluci&oacute;n de los portes
								satisfechos por el cliente. No se considerar&aacute;
								incumplimiento del plazo de entrega aquellos causados por
								ausencia del destinatario, cambio del domicilio o
								direcci&oacute;n desconocidas, entregas fuera de plazo en
								segundo intento de entrega, causas de fuerza mayor o caso
								fortuito u otras no imputables a la agencia de transporte. En el
								caso de que el pedido sea rechazado por el destinatario o el
								destinatario se halle ausente, Cereal Break&nbsp;no asume
								ninguna responsabilidad y se reserva el derecho a cobrar al
								cliente el 100% del valor del pedido.</span>
						</p>
						<p>
							<span>5. La entrega del pedido se realizar&aacute; en el
								domicilio designado por el destinatario, salvo por reiterada
								ausencia del destinatario, en cuyo caso, se efectuar&aacute; en
								la central m&aacute;s cercana del destinatario. En caso de
								ausencia del destinatario se dejar&aacute; aviso del intento de
								entrega, as&iacute; como de la forma de acordar la misma.</span>
						</p>
						<p>
							<span>6. Ser&aacute; requisito necesario para proceder a la
								entrega de la mercanc&iacute;a la firma del pedido del
								destinatario. En caso de negativa del destinatario a firmar el
								pedido de la agencia quedar&aacute; eximida de toda
								responsabilidad.</span>
						</p>
						<p>
							<span>7. Los plazos para efectuar la reclamaci&oacute;n por
								da&ntildeos en la mercanc&iacute;a ser&aacute;n de 24 horas
								desde la entrega si los da&ntildeos no son apreciables
								exteriormente.</span>
						</p>
						<p>
							<span>&nbsp;</span>
						</p>
						<p>
							<span><strong>CEREAL BREAK</strong><br> </span></span>
						</p>

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

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
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover"
		style="opacity: 1;"> </span></a>
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




</body>
</html>