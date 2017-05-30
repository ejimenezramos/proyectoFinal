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
											<a href='#' data-toggle='modal' data-target='#myModal4' class='offer-img'> 
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
	                                						data-id='" .$productos['Foto']. "' data-name='Rice' data-summary='summary" .$productos['Foto']. "'
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
                        $str = '<p> <b>No se han encontrado resultados...</b></p>';
                    break;
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }

}
/*<div class="col-md-3 pro-1">
<div class="col-m">
<a href="#" data-toggle="modal" data-target="#myModal4"
		class="offer-img"> <img src="images/boxfroot.png"
				class="img-responsive" alt="">
				</a>
				<div class="mid-1">
				<div class="women">
				<h6>
				<a href="single.html">Froot Loops</a>
				</h6>
				</div>
				<div class="mid-2">
				<p>
				<label>3.50€</label><em class="item_price">3.20€</em>
				</p>
				<div class="block"></div>
				<div class="clearfix"></div>
				</div>
				<div class="add">
				<button class="btn btn-danger my-cart-btn my-cart-b"
						data-id="27" data-name="Rice" data-summary="summary 27"
								data-price="3.20" data-quantity="1"
										data-image="images/boxfroot.png">Add to Cart</button>
										</div>
										</div>
										</div>
										</div>*/
