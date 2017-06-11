
<?php

class mdlCompraRealizada extends padre  {
    const PAGE = 'compraRealizada';
    public function onGestionPagina() {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }
        if ($_SESSION['info'] != "logged") {
            $_SESSION['intentoCompra']=true;
            redirectTo ( 'index.php?pagina=login' );
        }


        // Validamos

        $val = Validacion::getInstance ();

        // Validamos los elementos que hay en $_POST
        $toValidate = ($_POST);
        // $toValidate = (!empty($_POST)) ? $_POST : Session::get(self::PAGE, array());
        $rules = array (
            'id',
            'cantidad'
           //aqui habra que hacer el foreach para sacar todos los datos por línea de factura.
        );

        $val->addRules ( $rules );
        $val->run ( $toValidate );

        if (! is_null ( getPost ( self::PAGE ) )) {
            if ($val->isValid ()) { // Guardamos los datos en session
                $_SESSION [self::PAGE] = $val->getOks ();
//
                $s=0;
                $id=getPost('id');
                $cantidad=getPost('cantidad');
                $fecha=date("Y,n,j");
                $idUser=Usuarios::getUserId($_SESSION['usuarios']);
                for($i=0; $i<count($id); $i++)
                {
                    $s+=Productos::searchPrecioDB($id[$i])*$cantidad[$i];

                }
                $ins=Productos::insertDB($idUser, $fecha, $s);

                for($i=0; $i<count($id); $i++)
                {
                    $po=Productos::searchPrecioDB($id[$i]);
                    $cant=$cantidad[$i];
                    $idProd=$id[$i];
                    Productos::insertCompProdDB($ins, $idProd, $po, $cant);
                }
//                echo "<script type=\"text/javascript\">alert(\" Usuario = $idUser, fecha= $fecha, precioTotal= $s\");</script>";






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
        echo CompraRealizadaParser::loadContent($vista);
    }
}
