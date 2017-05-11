<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
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
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
	<script type='text/javascript' src="js/registro.js"></script>
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
<div class="header">
		<div class="container">
			<div class="logo">
				<h1>
					<a href="?pagina=home">Cereal-Break<span>Experience</span></a>
				</h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="?pagina=login" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li class="active"><a href="?pagina=register" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Registro</a></li>
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
							<li class="active"><a href="?pagina=home" class="hyper "><span>Home</span></a></li>
							<li class="dropdown "><a href="?pagina=productos"" class="hyper"><span>Productos</span></a>
							</li>
							<li class="dropdown"><a href="?pagina=packs"" class="hyper"><span>Packs
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

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Registro</h3>
		<h4><a href="?pagina=home">Home</a><label>/</label>Registro</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Registro</h3>
					<form action="#" method="post" id="registro">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Nombre" name="nombre" id="nombre" required="required" maxlength="20" oninvalid="this.value='';setCustomValidity('El campo nombre es obligatorio y sólo admite letras y espacios en blanco (20 caracteres)')" pattern="[a-zA-Z\s]{1,20}"><p id="errornombre"></p>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Apellidos" name="apellidos" id="apellidos"  required="required" maxlength="20" oninvalid="this.value='';setCustomValidity('El campo apellidos es obligatorio y sólo admite letras y espacios en blanco (30 caracteres)'" pattern="[a-zA-Z\s]{1,30}">

							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-birthday-cake" aria-hidden="true"></i>
							<input  type="date" placeholder="Fecha de nacimiento" id="fechanac"  name="fechanac" required="required"  oninvalid="this.value='';setCustomValidity('La fecha de nacimiento es obligatoria y debes ser mayor edad')" >
							<!--expresión regular por si es necesaria para la fecha pattern="^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])(\/|-)([1][9])([9][0-8]|[5678][0-9])$"-->
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Dni" name="dni" id="dni" required="required" oninvalid="this.value='';setCustomValidity('El campo DNI es obligatorio y el formato debe ser el correcto, Ej.12345678-X)" pattern="\d{8}[\-]{1}\w{1}">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-mobile-phone" aria-hidden="true"></i>
							<input  type="text" placeholder="Móvil" name="movil" id="movil"  required="required" pattern="(6|7)\d{2}[-]?\d{3}[-]?\d{3}" maxlength="9" oninvalid="this.value=''; setCustomValidity('El campo teléfono móvil es obligatorio y el formato correcto es: Ej.654455574 / 777-444-444 ')">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" placeholder="email@example.com" name="email" id="email"  oninvalid="this.value='';setCustomValidity('El campo email es obligatorio y el formato correcto es, Ej. example@example.com')"  required="required">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Nombre usuario" name="usuario" id="usuario" required="required" maxlength="20" oninvalid="this.value='';setCustomValidity('El campo nombre es obligatorio y sólo admite letras y espacios en blanco (20 caracteres)')" pattern="[a-zA-Z\s]{1,20}">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" placeholder="Password" name="pass1" id="password"  required="required" minlength="6" oninvalid="this.value='';setCustomValidity('El campo contraseña es obligatorio, debe coincidir con el campo confirmación de contraseña y debe tener más de 6 caracteres alfanuméricos')">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" placeholder="Confirmar Password" name="pass2" required="required" minlength="6" oninvalid="this.value='';setCustomValidity('El campo confirmación de contraseña es obligatorio, debe coincidir con el campo contraseña y debe tener más de 6 caracteres alfanuméricos')">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Registrarse">
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="clearfix"></div>
		<div class="footer-bottom">
			<h2>
				<a href="home.php">
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

</body>
</html>