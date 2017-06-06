
<?php

class mdlCompra extends padre  {
    const PAGE = 'compra';
    public function onGestionPagina() {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }

        // Validamos

        $val = Validacion::getInstance ();

        // Validamos los elementos que hay en $_POST
        $toValidate = ($_POST);
        // $toValidate = (!empty($_POST)) ? $_POST : Session::get(self::PAGE, array());
        $rules = array (
           //aqui habra que hacer el foreach para sacar todos los datos por línea de factura.
        );




        $val->addRules ( $rules );
        $val->run ( $toValidate );

        if (! is_null ( getPost ( self::PAGE ) )) {
            if ($val->isValid ()) { // Guardamos los datos en session
                $_SESSION [self::PAGE] = $val->getOks ();
                $data = $_SESSION ['compra'];


               //Elena:
                //esta lógica es de registro, te dejo el if para que lo cambies a tu gusto:

                // $datos = Compra::insertDB ( $data );
                /*if ($datos) {
                    $_SESSION ['info'] = 'registed';
                    $_SESSION['usuarios']=$usuario;
                } else
                    $_SESSION ['info'] = 'noRegisted';
                // Cambiamos el paso
                redirectTo ( 'index.php?pagina=home' );*/
            }
        }
    }
    //Elena:
    //Aqui estoy llamando a mensaje por que entiendo que sacarás la vista de mensaje o puedes crearte una vista con factura en plan, este es su pedido, en un plazo máximo de 24 horas le enviaremos un link para que realice el pago.
    public function onCargarVista($path) {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }
        ob_start ();
        include $path;
        $vista = ob_get_contents ();
        ob_end_clean ();
        echo Mensaje::loadContent ( $vista );
    }
}
