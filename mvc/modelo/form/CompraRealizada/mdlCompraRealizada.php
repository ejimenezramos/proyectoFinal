
<?php

class mdlCompraRealizada extends padre  {
    const PAGE = 'compraRealizada';
    public function onGestionPagina() {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }
        if ($_SESSION['info'] != "logged" && $_SESSION['info'] != "registed") {
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
                $nombre=getPost('nombre');
                $id=getPost('id');
                $cantidad=getPost('cantidad');
                $fecha=date("Y,n,j");
                $idUser=Usuarios::getUserId($_SESSION['usuarios']);
                $tipo="";


                for($j=0; $j<count($id); $j++)
                {
                    $s+=Productos::searchPrecioDB($id[$j])*$cantidad[$j];

                }
                $ins=Productos::insertDB($idUser, $fecha, $s);

                for ($i=0; $i<count($nombre); $i++)
                {

                    if (strpos($nombre[$i],"Pack")!==false)
                    {
                        $tipo="pack";
                        echo "<script type=\"text/javascript\">alert(\" $tipo\");</script>";
                        
                            $po=Productos::searchPrecioDB($id[$i]);
                            $cant=$cantidad[$i];
                            $idProd=$id[$i];
                            Productos::insertCompProdDB($ins, $idProd, $po, $cant, $tipo);
                        
                    }else
                    {
                        $tipo="producto";
                            $po=Productos::searchPrecioDB($id[$i]);
                            $cant=$cantidad[$i];
                            $idProd=$id[$i];
                            Productos::insertCompProdDB($ins, $idProd, $po, $cant, $tipo);
                            echo "<script type=\"text/javascript\">alert(\" Tipo= $tipo, Idcomra= $ins, Cantidad= $cant, idProd=$idProd, Precio= $po\");</script>";
                    }
                }




//                echo "<script type=\"text/javascript\">alert(\" Usuario = $idUser, fecha= $fecha, precioTotal= $s\");</script>";

            }
        }
    }

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
