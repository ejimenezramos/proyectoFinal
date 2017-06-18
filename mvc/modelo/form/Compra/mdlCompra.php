
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
                $cont=0;
                $vas=explode(";",  $_POST['data']);
                $vad=implode(":", $vas);
                $rest = substr($vad, 0, -1);
                $vaq=explode(":", $rest);

                $tab="<table id='tablaCompra' class='table'><tr><td>Id Producto</td><td>Nombre</td><td>Cantidad</td></tr>";
                //foreach($vaq as $a)
                //{
                //    if ($cont==0)
                //    {
                //        $tab.="<tr>";
                //    }
                //    $cont++;
                //    $tab.="<td><input type='text' value='".$a."'></td>";

                //    if ($cont==3)
                //    {
                //        $tab.="</tr>";
                //        $cont=0;
                //    }
                //}
                for($i=0; $i<count($vaq); $i++)
                {
                    if ($cont==0)
                    {
                        $tab.="<tr>";
                        $tab.="<td><input type='text' readonly='readonly' id='id[]' name='id[]' value='".$vaq[$i]."'></td>";
                        $cont++;
                    }else
                    {
                        if ($cont==2)
                        {
                            $cont=0;
                            $tab.="<td><input type='text' readonly='readonly' id='cantidad[]' name='cantidad[]' value='".$vaq[$i]."'></td></tr>";
                        }else
                        {
                            $tab.="<td><input type='text' readonly='readonly' id='nombre[]' name='nombre[]' value='".$vaq[$i]."'></td>";
                            $cont++;
                        }
                    }
                }


                $tab.="</table>";
                $_SESSION ['compra'] =$tab;


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
        echo CompraParser::loadContent($vista);
    }
}
