<?php

class ListadoParser {

    public static function loadContent($vista) {
        $vista = self::_pasoSiguiente($vista);
        return $vista;
    }

    private static function _pasoSiguiente($vista) {
        foreach (getTagsVista($vista) as $tag) {
// sustituimos en el formulario los tags por el contenido de los elementos del formulario
            $str = '';
            switch ($tag) {
                case 'listado':
                    $datos = $_SESSION['datos'];
                    if (count($datos) > 0) {
                        foreach ($datos as $productos) {
                            $str .= "
                                
                                <div class=' con-w3l'>		
	                                <div class='col-md-3 pro-1'>
										<div class='col-m'>
											<a href='#' data-toggle='modal' data-target='#myModal" .$productos['Ref_Modal']. "' class='offer-img'> 
		                                		<img src='images/" .$productos['Foto']. ".png' class='img-responsive' alt=''>
											</a>
											<div class='mid-1'>
												<div class='women'>
														<h6>
															<a href='single.html'>" . $productos['Nombre_Prod'] . "</a>
														</h6>
												</div>
												<div class='mid-2'>
														<p>
															<em class='item_price'>" . $productos['Precio'] . "&euro;</em>
														</p>
														<div class='block'></div>
														<div class='clearfix'></div>
												</div>
												<div class='add'>
														<button class='btn btn-danger my-cart-btn my-cart-b'
	                                						data-id='" .$productos['Id_Producto']. "' data-name='" . $productos['Nombre_Prod'] . "' data-summary='summary" .$productos['Id_Producto']. "'
															data-price='" . $productos['Precio'] . "' data-quantity='1'
															data-image='images/" .$productos['Foto']. ".png'>Add to Cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>									
                                ";
                            
                        }
                        $str .= "</table>";
                    } else
                        $str = '<div class="alert alert-warning alert-dismissable">
					No se han encontrado resultados. Por favor prueba con: Cereal, Leche, Topping.<br>
                     <b><a href="?pagina=home">Volver</a></b>
				</div>';
                break;
                case "login":
                    $str="<li><a href='?pagina=login'><i class='fa fa-user'
							aria-hidden='true'></i>Login</a></li>";
                    $str.="<li><a href='?pagina=register'><i class='fa fa-user'
							aria-hidden='true'></i>Registro</a></li>";


                    if (isset($_SESSION['info'])) {
                        $info = $_SESSION['info'];
                        switch ($info) {
                            case "registed":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=account'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                            case "noRegisted":
                                $str = "No registrado";
                                Session::del($_SESSION['info']);
                                break;
                            case "logged":
                                $usuario = $_SESSION['usuarios'];
                                $str = "<li><a href='?pagina=account'><i class='fa fa-user'
							aria-hidden='true'></i>Mi cuenta: $usuario</a></li>";
                                $str .= "<li><a href='index.php'><i class='fa fa-arrow-right'
							aria-hidden='true'></i>Cerrar Sesión</a></li>";
                                break;
                        }

                    }
                    break;
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }

}

