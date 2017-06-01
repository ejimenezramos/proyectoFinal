
<?php
class mdlLogin extends padre {
	const PAGE = 'login';
	
	public function onGestionPagina() {
		if (getGet ( 'pagina' ) != self::PAGE)
			return;
		$val = Validacion::getInstance ();
		$toValidate = ($_POST);
		$rules = array (
				'usuario' => 'required|alpha_space',
				'clave' => 'required|alpha_numeric' 
		);
		
		$val->addRules ( $rules );
		$val->run ( $toValidate );
		
		if (! is_null ( getPost ( self::PAGE ) )) {
			if ($val->isValid ()) {
				// Guardamos los datos en session
				$_SESSION [self::PAGE] = $val->getOks ();
				$usuario = getPost ( 'usuario' );
				$clave = getPost ( 'clave' );
				$_SESSION ['info'] = 'nologged';
				$datos = Usuarios::searchUsuarioDB ( $usuario );
				if ($datos) {
					// Verificamos si el hash de la clave ($datos[0]) coincide con la clave introducida por el usuario a través del formulario
					if (password_verify ( $clave, $datos )){
						$_SESSION ['info'] = 'logged';
						redirectTo ( 'index.php?pagina=home' );
					}
				} else {
					redirectTo ( 'index.php?pagina=register' );
				}
				// Cambiamos el paso
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
