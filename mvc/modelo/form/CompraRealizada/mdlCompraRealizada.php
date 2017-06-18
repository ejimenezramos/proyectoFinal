
<?php

class mdlCompraRealizada extends padre  {
    const PAGE = 'compraRealizada';
    public function onGestionPagina() {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }

        if (!isset($_SESSION['info'])|| ($_SESSION['info'] != "logged" && $_SESSION['info'] != "registed")) {
            $_SESSION['intentoCompra']=true;
            redirectTo ( 'index.php?pagina=login' );
        }

       if (!isset($_SESSION['info']) || ($_SESSION['info']!= "logged" && $_SESSION['info']!="registed")){
                $_SESSION['intentoCompra']=true;
               redirectTo("index.php?pagina=login");

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

//                for($j=0; $j<count($id); $j++)
//                {
//                    $stock=Productos::GetStockById($id[$j]);
//                    $stock=$stock-$cantidad[$j];
//                    Productos::modifyStock($stock,$id[$j]);
//
//                    if ($stock!=0)
//                    {
//                        echo "<script type=\"text/javascript\">alert(\" $stock\");</script>";
//                    }
//
//                }

                for($j=0; $j<count($nombre); $j++)
                {
                    if (strpos($nombre[$j],"Pack")!==false)
                    {
                    $s=$s+(Productos::searchPrecioDBPacks($id[$j])*$cantidad[$j]);
                    }else
                    {
                    $s=$s+(Productos::searchPrecioDB($id[$j])*$cantidad[$j]);
                    }

                }
                $ins=Productos::insertDB($idUser, $fecha, $s);

                for ($i=0; $i<count($nombre); $i++)
                {
                    if (strpos($nombre[$i],"Pack")!==false)
                    {
                        $tipo="Pack";
                        $po=Productos::searchPrecioDBPacks($id[$i]);
                        $cant=$cantidad[$i];
                        $idProd=$id[$i];
                       // echo "<script type=\"text/javascript\">alert(\" Tipo= $tipo, Cantidad= $cant, idProd=$idProd, Precio= $po\");</script>";
                        Productos::insertCompProdDB($ins, $idProd, $po, $cant, $tipo);
                        if (Productos::GetStockByIdPacks($id[$i])== 0)
                        {
                            $_SESSION['compraMens']="No queda Stock del artículo $nombre[$i], por favor, elimínelo del carrito";
                            redirectTo('index.php?pagina=compra');
                        }elseif (Productos::GetStockByIdPacks($id[$i])<$cantidad[$i])
                        {
                            $stockOne=Productos::GetStockByIdPacks($id[$i]);
                            $_SESSION['compraMens']="Sólo nos quedan $stockOne unidad/es en stock, por favor reduzca la cantidad a la adecuada";
                            redirectTo('index.php?pagina=compra');
                        }else
                        {
                            $stock=Productos::GetStockByIdPacks($id[$i]);
                            $stock=$stock-$cantidad[$i];
                            Productos::modifyStockPack($stock,$id[$i]);
                        }
                    }else
                    {
                        $tipo="Producto";
                        $po=Productos::searchPrecioDB($id[$i]);
                        $cant=$cantidad[$i];
                        $idProd=$id[$i];
                        Productos::insertCompProdDB($ins, $idProd, $po, $cant, $tipo);
                        if (Productos::GetStockById($id[$i])== 0)
                        {
                            $_SESSION['compraMens']="No queda Stock del artículo $nombre[$i], por favor, elimínelo del carrito";
                            redirectTo('index.php?pagina=compra');
                        }elseif (Productos::GetStockById($id[$i])<$cantidad[$i])
                        {
                            $stockOne=Productos::GetStockById($id[$i]);
                            $_SESSION['compraMens']="Sólo nos quedan $stockOne unidad/es en stock, por favor reduzca la cantidad a la adecuada";
                            redirectTo('index.php?pagina=compra');
                        }else
                        {
                            $stock=Productos::GetStockById($id[$i]);
                            $stock=$stock-$cantidad[$i];
                            Productos::modifyStock($stock,$id[$i]);
                        }


//                            echo "<script type=\"text/javascript\">alert(\" Tipo= $tipo, Idcomra= $ins, Cantidad= $cant, idProd=$idProd, Precio= $po\");</script>";
                    }
                }
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
