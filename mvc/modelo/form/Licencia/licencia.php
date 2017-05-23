<?php

class mdlLicencia extends padre {

	const PAGE = 'licencia';

	public function onGestionPagina() {
		if (self::PAGE != getGet('pagina', 'licencia'))
			return;
	}

	public function onCargarVista($path) {
		if (self::PAGE != getGet('pagina', 'licencia'))
			return;
			ob_start();
			include $path;
			$vista = ob_get_contents();
			ob_end_clean();
			echo $vista;
	}

}
