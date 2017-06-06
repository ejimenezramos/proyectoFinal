
<?php
class mdlLogin extends padre {
	const PAGE = 'login';

	public function onGestionPagina() {
		if (getGet ( 'pagina' ) != self::PAGE)
			return;

        if(isset($_SESSION['info']))
            redirectTo ( 'index.php?pagina=home' );
		$val = Validacion::getInstance ();
		$toValidate = ($_POST);
		$rules = array (
				'Usuario' => 'required|alpha_space',
				'Password' => 'required|alpha_numeric'
		);

		$val->addRules ( $rules );
		$val->run ( $toValidate );

		if (! is_null ( getPost ( self::PAGE ) )) {
			if ($val->isValid ()) {
				// Guardamos los datos en session
				$_SESSION [self::PAGE] = $val->getOks ();
				$usuario = getPost ( 'Usuario' );
				$clave = getPost ( 'Password' );
				$_SESSION ['info'] = 'nologged';
				$datos = Usuarios::searchUsuarioDB ( $usuario );
				if ($datos) {
					// Verificamos si el hash de la clave ($datos[0]) coincide con la clave introducida por el usuario a trav�s del formulario
					if (password_verify ( $clave, $datos )){
						$_SESSION ['info'] = 'logged';
                        $_SESSION['usuarios']=$usuario;
                        // Cambiamos el paso
						redirectTo ( 'index.php?pagina=home' );
					}
				} else {
                    $_SESSION['mens']=true;
					redirectTo ( 'index.php?pagina=login' );
				}

			}
		}
	}
	public function onCargarVista($path) {
		if (getGet ( 'pagina' ) != self::PAGE)
			return;

		ob_start ();
		include $path;
		$vista = ob_get_contents ();
		ob_end_clean ();
		echo LoginParser::loadContent ( $vista );
	}

}
