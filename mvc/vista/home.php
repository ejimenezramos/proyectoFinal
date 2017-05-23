<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cereal-Break</title>
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
	<!--Pablo 21/05/17: Cabecera-->
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1>
					<a href="?pagina=home">Cereal-Break<span>Experience</span></a>
				</h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="?pagina=login"><i class="fa fa-user"
							aria-hidden="true"></i>Login</a></li>
					<li><a href="?pagina=register"><i class="fa fa-arrow-right"
							aria-hidden="true"></i>Registro</a></li>
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
							<li class=" active"><a href="?pagina=home" class="hyper "><span>Home</span></a></li>
							<li><a href="?pagina=productos" class="hyper"><span>Productos</span></a>
							</li>
							<li><a href="?pagina=packs" class="hyper"><span>Packs especiales</span></a></li>
							<li><a href="?pagina=aboutus" class="hyper"> <span>Sobre nosotros</span></a></li>
							<li><a href="?pagina=contact" class="hyper"><span>ContÃ¡ctanos</span></a></li>
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

	<div class="w3-content w3-section" style="max-width: 90%">
		<img class="mySlides" src="images/cereal1.jpeg"
			style="width: 100%; height: 30rem"> <img class="mySlides"
			src="images/cereal2.jpeg" style="width: 100%; height: 30rem"> <img
			class="mySlides" src="images/cereal3.jpeg"
			style="width: 100%; height: 30rem">
		<div class="w3-display-topmiddle w3-container w3-padding-16"
			style="width: 100%">
			<div class="banner-info2">
				<div class="search-form">
					<form action="#" method="post">
						<input type="text" placeholder="Â¿Te podemos ayudar?"
							name="Search..."> <input type="submit" value=" ">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Script para el javascript -->
	<script type="text/javascript">
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
			setTimeout(carousel, 4000); // Cambia cada 4 segundos
		}
	</script>

	<script>
		window.jQuery
				|| document
						.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
	</script>
	<script src="js/jquery.vide.min.js"></script>


	<!--content 1-->
	<div class="content-mid">
		<div class="container">
			<div class="col-md-4 m-w3ls">
				<div class="col-md1 ">
					<a href="?pagina=productos"> <img src="images/home_variedad.png"
						class="img-home img" alt="">
						<div class="big-sa">
							<h3 class="home_tittle">
								# <span>Productos</span>
							</h3>
						</div>
					</a>
				</div>

				<div class="col-md1 content-mid2">
					<p>Descubre nuestra gran variedad de sabores, colores y texturas</p>
				</div>
			</div>
			<div class="col-md-4 m-w3ls1">
				<div class="col-md ">
					<a href="?pagina=aboutus"> <img src="images/conocenos_home.jpeg"
						class="img-home  img" alt="">
						<div class="big-sa">
							<h3 class="home_tittle">
								# <span>ConÃ³cenos</span>
							</h3>
						</div>
					</a>
				</div>
				<div class="col-md1 content-mid2">
					<p>Colorea tu desayuno de una manera diferente</p>
				</div>
			</div>
			<div class="col-md-4 m-w3ls">
				<div class="col-md3 ">
					<a href="?pagina=packs"> <img src="images/pack_home.jpeg"
						class="img-home  img1" alt="">
						<div class="big-sa">
							<h3 class="home_tittle">
								# <span>Packs</span>
							</h3>
						</div>
					</a>
				</div>
				<div class="col-md1 content-mid2">
					<p>Te ofrecemos las mejores combinaciones posibles para que tu
						experiencia sea completa</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<!-- Pablo:19/09/17: Slideshow para publicidad de la web -->
		<div class="container2">
			<div class="w3-content" style="max-width: 80%">
				<img class="mySlides2" src="images/ba.jpg" style="width: 100%"> <img
					class="mySlides2" src="images/ba1.jpg" style="width: 100%"> <img
					class="mySlides2" src="images/ba2.jpg" style="width: 100%">
			</div>
		</div>

		<script type="text/javascript">
		var slideIndex = 0;
		carousel2();
		
		function carousel2() {
		    var i;
		    var x = document.getElementsByClassName("mySlides2");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "none"; 
		    }
		    slideIndex++;
		    if (slideIndex > x.length) {slideIndex = 1} 
		    x[slideIndex-1].style.display = "block"; 
		    setTimeout(carousel2, 2000);
		}
		</script>


	</div>

	<!--footer Pablo 20/05/17: Nuevo footer-->
	<footer class="footer-distributed">
		<div class="footer-left">
			<h3>
				Cereal<span>Break</span>
			</h3>

			<p class="footer-links">
				<a class="cursor_pointer"  onclick="window.open('?pagina=licencia', 'Licencia', 'width=900, height=600')"> Licencia</a> Â· 
				<a data-toggle="modal" data-target="#ModalDevoluciones">Devoluciones</a><br>

				<a href="?pagina=packs">EnvÃ­o y entrega</a> Â· <a
					href="?pagina=packs">Preguntas frecuentes</a>
			</p>

			<p class="footer-company-name">Cereal Break &copy; 2017</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p>
					<span>Paseo de la Castellana 10</span> Madrid, EspaÃ±a
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
				<span>PasiÃ³n por los cereales</span> Disfruta de los mejores
				cereales del mundo en tu propia casa
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
	
	<div class="modal fade" id="ModalDevoluciones" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div>
					<h3>Política de devolución de productos</h3>
					<p class="quick_desc">Si usted no queda completamente satisfecho con el producto adquirido, se le repondrá la pieza o devolverá el dinero siempre que cumpla con la las especificaciones detalladas a continuación.
					<br>Para ello es necesario que los productos (cereales, leche o topping) conserven los embalajes y precintos originales. Importante: no abrir el producto si se tiene la intención de cambiar o devolverlo
					<br>En el caso de que desee devolver o cambiar un producto deberá enviarnos un correo electrónico a la dirección support@cerealbreak.com explicando el motivo del cambio, indicando el número de pedido y la fecha de recepción y adjuntando una foto del producto o productos en el estado en el que encuentran para su devolución o cambio.
					<br>Para proceder al cambio o devolución de un producto:</p>
					<dl>
						<dd>El usuario o cliente dispone de siete días hábiles, contados desde la recepción del producto, para desistir del contrato sin necesidad de indicación de los motivos siempre que el producto esté en perfectas condiciones</dd>
						<dd>Conservar el envoltorio original; si éste está abierto no se podrá proceder al cambio o devolución.</dd>
						<dd>Es requisito imprescindible que tanto el embalaje como el producto estén en perfecto estado, no hayan sido manipulados, no presenten defectos ni deterioros por hechos externos u otras circunstancias que deriven en el menoscabo del producto, en especial la apertura del recipiente.</dd>
						<dd>Cualquier producto abierto, cortado o manipulado de cualquier manera no podrá ser sujeto a cambio o devolución.</dd>
						<dd>El pedido devuelto deberá ser entregado junto con el albarán de entrega y factura a la dirección que SuperJamon.Es le indicará una vez se haya valora el caso y se proceda al cambio o devolución.</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</body>
</html>