
<?php

//class mdlRegister extends padre  {
//    const PAGE = 'register';
    //public function onGestionPagina() {
    //    if (getGet ( 'pagina' ) != self::PAGE) {
    //        return;
    //    }
    //    if(isset($_SESSION['info']))
//            redirectTo ( 'index.php?pagina=home' );
//        // Para acceder a está página hay que pasar por login y por tanto $_SESSION['info'] tiene contenido
////        if (is_null ( Session::get ( 'info' ) )) {
////            redirectTo ( 'index.php' );
////        }

//        // Validamos
//        $val = Validacion::getInstance ();

        // Validamos los elementos que hay en $_POST
        //$toValidate = ($_POST);
        //// $toValidate = (!empty($_POST)) ? $_POST : Session::get(self::PAGE, array());
        //$rules = array (
        //    'Usuario' => 'required|duplicate|alpha_numeric',
        //    'Nombre' => 'required|alpha_space',
        //    'Apellidos' => 'required|alpha_space',
        //    'Fecha_Nac' => 'required',
        //    'DNI' => 'required|dni',
        //    'Comunidad' => 'required',
        //    'Provincia' => 'required',
        //    'Telefono' => 'required|tel',
//            'CP' => 'required',
//            'tipoDireccion' => 'required',
//            'Direccion' => 'required',
//            'Password' => 'required',
////            'Password2' => 'required',
//            'Email' => 'required|duplicate|email'
//        );

//        $usuario = getPost ( 'Usuario' );
//        $email = getPost ( 'Email' );

//        if (Usuarios::duplicateUsuario ( $usuario ) || Usuarios::duplicateEmail ( $email )) {
//            $val->setExists ( true );
//        }

//        $val->addRules ( $rules );
//        $val->run ( $toValidate );

        //if (! is_null ( getPost ( self::PAGE ) )) {
        //    if ($val->isValid ()) { // Guardamos los datos en session
        //        $_SESSION [self::PAGE] = $val->getOks ();
        //        $data = $_SESSION ['register'];
                // Generamos el hash de la clave
                //$data ['Password'] = encodePassword ( $data ['Password'] );
                //$datos = Usuarios::insertDB ( $data );
                //if ($datos) {
                //    $_SESSION ['info'] = 'registed';
                //    $_SESSION['usuarios']=$usuario;
                //} else
                //    $_SESSION ['info'] = 'noRegisted';
                // Cambiamos el paso
//                redirectTo ( 'index.php?pagina=home' );
//            }
//        }
//    }
//    public function onCargarVista($path) {
//        if (getGet ( 'pagina' ) != self::PAGE) {
//            return;
//        }
//        ob_start ();
//        include $path;
//        $vista = ob_get_contents ();
//        ob_end_clean ();
//        echo RegisterParser::loadContent ( $vista );
//    }
//}

class mdlRegister extends padre  {
    const PAGE = 'register';
    public function onGestionPagina() {
        if (getGet ( 'pagina' ) != self::PAGE) {
            return;
        }

        // Para acceder a está página hay que pasar por login y por tanto $_SESSION['info'] tiene contenido
//        if (is_null ( Session::get ( 'info' ) )) {
//            redirectTo ( 'index.php' );
//        }

        // Validamos
        $val = Validacion::getInstance ();

        // Validamos los elementos que hay en $_POST
        $toValidate = ($_POST);
        // $toValidate = (!empty($_POST)) ? $_POST : Session::get(self::PAGE, array());
        $rules = array (
            'Usuario' => 'required|duplicate|alphanum_space',
            'Nombre' => 'required|alpha_space',
            'Apellidos' => 'required|alpha_space',
            'Fecha_Nac' => 'required',
            'DNI' => 'required|dni|dniRep',
            'Comunidad' => 'required',
            'Provincia' => 'required',
            'Telefono' => 'required|tel',
//          'CP' => 'required',
            'Direccion' => 'required',
            'Password' => 'required|alphanum_space',
//          'Password2' => 'required',
            'Email' => 'required|email|duplicateEmail'
        );

        $usuario = getPost ( 'Usuario' );
        $email = getPost ( 'Email' );
        $cp=getPost('CP');
        $dni=getPost('DNI');
        $tipoDir=getPost('tipoDireccion');

        if (Usuarios::duplicateUsuario ( $usuario )) {
            $val->setExists ( true );
        }
        if (Usuarios::duplicateEmail ( $email ))
            $val->setEmail ( true );

        if (Usuarios::duplicateDni( $dni ))
            $val->setDniRep ( true );


        $val->addRules ( $rules );
        $val->run ( $toValidate );

        if (! is_null ( getPost ( self::PAGE ) )) {
            if ($val->isValid ()) { // Guardamos los datos en session
                $_SESSION [self::PAGE] = $val->getOks ();
                $data = $_SESSION ['register'];
                // Generamos el hash de la clave
                $data ['Password'] = encodePassword ( $data ['Password'] );
                $data ['Direccion']=$tipoDir."/ ".$data ['Direccion'].", ".$cp;
                $datos = Usuarios::insertDB ( $data );
                if ($datos) {
                    $_SESSION ['info'] = 'registed';
                    $_SESSION['usuarios']=$usuario;
                    redirectTo ( 'index.php?pagina=home');
                } else
                {
                    $_SESSION['errorRegistro']=true;
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
        echo RegisterParser::loadContent ( $vista );
    }
}
