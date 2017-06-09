<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Cereal-Break | Términos y condiciones</title>
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
							<li><a href="?pagina=home" class="hyper "><span>Home</span></a></li>
							<li><a href="?pagina=productos" class="hyper"><span>Productos</span></a>
							</li>
							<li><a href="?pagina=packs" class="hyper"><span>Packs especiales</span></a></li>
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
			<h3>Términos y condiciones</h3>
			<h4>
				<a href="?pagina=home">Home</a><label>/</label>Términos y
				condiciones
			</h4>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- typography -->
	<div class="typrography">
		<div class="container">
			<div class="spec "></div>
			<div class="grid_3 grid_4 wow fadeInLeft animated"
				data-wow-delay=".5s">
				<h2>Política de Privacidad</h2>
				<div class="bs-example">
					<div class="mb-60">

						<p>La presente Política de Privacidad establece los términos en
							que usa y protege la información que es proporcionada por sus
							usuarios al momento de utilizar su sitio web. Esta compañía
							está comprometida con la seguridad de los datos de sus usuarios.
							Cuando le pedimos llenar los campos de información personal con
							la cual usted pueda ser identificado, lo hacemos asegurando que
							sólo se empleará de acuerdo con los términos de este
							documento. Sin embargo esta Política de Privacidad puede cambiar
							con el tiempo o ser actualizada por lo que le recomendamos y
							enfatizamos revisar continuamente esta página para asegurarse
							que está de acuerdo con dichos cambios.</p>
						<h2>Información que es recogida</h2>
						<p>Nuestro sitio web podrá recoger información personal por
							ejemplo: Nombre, información de contacto como su dirección de
							correo electrónica e información demográfica. Así mismo
							cuando sea necesario podrá ser requerida información
							específica para procesar algún pedido o realizar una entrega o
							facturación.</p>
						<h2>Uso de la información recogida</h2>
						<p>Nuestro sitio web emplea la información con el fin de
							proporcionar el mejor servicio posible, particularmente para
							mantener un registro de usuarios, de pedidos en caso que aplique,
							y mejorar nuestros productos y servicios. Es posible que sean
							enviados correos electrónicos periódicamente a través de
							nuestro sitio con ofertas especiales, nuevos productos y otra
							información publicitaria que consideremos relevante para usted o
							que pueda brindarle algún beneficio, estos correos electrónicos
							serán enviados a la dirección que usted proporcione y podrán
							ser cancelados en cualquier momento. Usamos los sistemas más
							avanzados y los actualizamos constantemente para asegurarnos que
							no exista ningún acceso no autorizado..</p>
						<h2>Cookies</h2>
						<p>Una cookie se refiere a un fichero que es enviado con la
							finalidad de solicitar permiso para almacenarse en su ordenador,
							al aceptar dicho fichero se crea y la cookie sirve entonces para
							tener información respecto al tráfico web, y también facilita
							las futuras visitas a una web recurrente. Otra función que
							tienen las cookies es que con ellas las web pueden reconocerte
							individualmente y por tanto brindarte el mejor servicio
							personalizado de su web. Nuestro sitio web emplea las cookies
							para poder identificar las páginas que son visitadas y su
							frecuencia. Esta información es empleada únicamente para
							análisis estadístico y después la información se elimina de
							forma permanente. Usted puede eliminar las cookies en cualquier
							momento desde su ordenador. Sin embargo las cookies ayudan a
							proporcionar un mejor servicio de los sitios web, estás no dan
							acceso a información de su ordenador ni de usted, a menos de que
							usted así lo quiera y la proporcione directamente. Usted puede
							aceptar o negar el uso de cookies, sin embargo la mayoría de
							navegadores aceptan cookies automáticamente pues sirve para
							tener un mejor servicio web. También usted puede cambiar la
							configuración de su ordenador para declinar las cookies. Si se
							declinan es posible que no pueda utilizar algunos de nuestros
							servicios..</p>
						<h2>Enlaces a Terceros</h2>
						<p>Este sitio web pudiera contener en laces a otros sitios que
							pudieran ser de su interés. Una vez que usted de clic en estos
							enlaces y abandone nuestra página, ya no tenemos control sobre
							al sitio al que es redirigido y por lo tanto no somos
							responsables de los términos o privacidad ni de la protección
							de sus datos en esos otros sitios terceros. Dichos sitios están
							sujetos a sus propias políticas de privacidad por lo cual es
							recomendable que los consulte para confirmar que usted está de
							acuerdo con estas..</p>
						<h2>Control de su información personal</h2>
						<p>En cualquier momento usted puede restringir la recopilación o
							el uso de la información personal que es proporcionada a nuestro
							sitio web. Cada vez que se le solicite rellenar un formulario,
							como el de alta de usuario, puede marcar o desmarcar la opción
							de recibir información por correo electrónico. En caso de que
							haya marcado la opción de recibir nuestro boletín o publicidad
							usted puede cancelarla en cualquier momento. Esta compañía no
							venderá, cederá ni distribuirá la información personal que es
							recopilada sin su consentimiento, salvo que sea requerido por un
							juez con un orden judicial. Se reserva el derecho de cambiar los
							términos de la presente Política de Privacidad en cualquier
							momento. Estas terminos y condiciones se han generado en
							plantillaterminosycondicionestiendaonline.com..</p>
					</div>
				</div>
			</div>





		</div>
	</div>
	<!-- //typography -->
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

</body>
</html>