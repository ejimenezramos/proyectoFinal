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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="og:title" content="Vide"/>
    <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!--Pablo 20/05/17: Estilos para el footer-->
    <link href="css/footer.css" rel='stylesheet' type='text/css' />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script type='text/javascript' src="js/validaciones.js"></script>
    <script src="js/jquery.peticionesAJAX.js"></script>
    <!-- //js -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
    <!--- start-rate---->
    <script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8"/>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('.starbox').each(function () {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function (event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
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
            <h1>
                <a href="?pagina=home">Cereal-Break<span>Experience</span></a>
            </h1>
        </div>
        <div class="head-t">
            <ul class="card">
                <li><a href="?pagina=login"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                <li class="active"><a href="?pagina=register"><i class="fa fa-arrow-right" aria-hidden="true"></i>Registro</a>
                </li>
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
        <h3>Registro</h3>
        <h4><a href="?pagina=home">Home</a><label>/</label>Registro</h4>
        <div class="clearfix"></div>
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
                    <input type="text" placeholder="Nombre" name="nombre" id="nombre" maxlength="20"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errornombre"></p></div>
                <div class="key">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" maxlength="20"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">

                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorapellidos"></p></div>
                <div class="key">
                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    <input type="date" placeholder="Fecha de nacimiento" id="fechanac" name="fechanac"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorfechanac"></p></div>

                <div class="key">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Dni" name="dni" id="dni" maxlength="12"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errordni"></p></div>
                <div class="key">
                    <i class="fa fa-mobile-phone" aria-hidden="true"></i>
                    <input type="text" placeholder="Teléfono" name="telefono" id="telefono" maxlength="9"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errortelefono"></p></div>
                <div class="key">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" placeholder="email@example.com" name="email" id="email"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="key">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <select class="consulta" name="comunidades" id="comunidades"
                            oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                        <option value="0">--Selecciona una Comunidad Autónoma--</option>
                        <option value="1">Andalucía</option>
                        <option value="2">Aragón</option>
                        <option value="3">Asturias</option>
                        <option value="4">Cantabria</option>
                        <option value="5">Castilla y León</option>
                        <option value="6">Castilla-La Mancha</option>
                        <option value="7">Cataluña</option>
                        <option value="8">Extremadura</option>
                        <option value="9">Galicia</option>
                        <option value="10">La Rioja</option>
                        <option value="11">Islas Baleares</option>
                        <option value="12">País Vasco</option>
                        <option value="13">Canarias</option>
                        <option value="14">Comunidad de Madrid</option>
                        <option value="15">Región de Murcia</option>
                        <option value="16">Comunidad Valenciana</option>
                        <option value="17">Navarra</option>
                        <option value="18">Ceuta</option>
                        <option value="19">Melilla</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorcomunidades"></p></div>
                <div class="key">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <select class="consulta" disabled="disabled" name="provincias" id="provincias"
                            oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                        <option value="0">--Selecciona una provincia--</option>

                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorprovincias"></p></div>
                <div class="key">
                    <i class="fa fa-list" aria-hidden="true"></i>
                    <select class="consulta" disabled="disabled" name="tipoDireccion" id="tipoDireccion"
                            oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                        <option value="0">--Selecciona un tipo de vía--</option>
                        <option value="1">Calle</option>
                        <option value="2">Avda</option>
                        <option value="2">Pº</option>
                    </select>
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errortipoDireccion"></p></div>
                <div class="key">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <input type="text" placeholder="Dirección" disabled="disabled" name="direccion" id="direccion"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errordireccion"></p></div>
                <div class="key">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <input type="text" placeholder="Código Postal" disabled="disabled" name="cp" id="cp" maxlength="5"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorcp"></p></div>
                <div class="key">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Nombre de usuario" name="usuario" id="usuario" maxlength="20"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorusuario"></p></div>
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="pass1" id="password"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorpassword"></p></div>
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" placeholder="Confirmar Password" id="password2" name="pass2"
                           oninvalid="setCustomValidity('Todos los campos son obligatorios para el registro')">
                    <div class="clearfix"></div>
                </div>
                <div class="has-warning"><p id="errorpassword2"></p></div>

                <input class="forg-left" type="checkbox" id="condiciones" name="condiciones"
                       oninvalid="setCustomValidity('Por favor acepta los términos y condiciones')">
                <div class="clearfix forg"><a class="comentarios" href="?pagina=terminos">Acepto los términos y
                        condiciones</a></div>
                <div class="has-warning"><p id="errorcondiciones"></p></div>
                <div class="has-warning"><p id="errorpassword2"></p></div>
                <input class="form-" id="registrarse" type="submit" disabled="disabled" value="Registrarse">
                <div class="has-warning"><p id="errorsubmit"></p></div>
            </form>
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
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */
        $().UItoTop({easingType: 'easeOutQuart'});
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

        var goToCartIcon = function ($addTocartBtn) {
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                "position": "fixed",
                "z-index": "999"
            });
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500, "linear", function () {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function (products) {
                $.each(products, function () {
                    console.log(this);
                });
            },
            clickOnAddToCart: function ($addTocart) {
                goToCartIcon($addTocart);
            },
            getDiscountPrice: function (products) {
                var total = 0;
                $.each(products, function () {
                    total += this.quantity * this.price;
                });
                return total * 1;
            }
        });

    });
</script>

</body>
</html>