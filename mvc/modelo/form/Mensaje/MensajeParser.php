<?php class MensajeParser
{
    public static function loadContent($vista)
    {
        $vista = self::_pasoSiguiente($vista);
        return $vista;
    }

    private static function _pasoSiguiente($vista)
    {
        foreach (getTagsVista($vista) as $tag) {
            // sustituimos en el formulario los tags por el contenido
// de los elementos del formulario
            $str = '';
            switch ($tag) {
                case 'mensaje':
                    // Si existe $_SESSION['edicion'] es que el ID introducido a
// través del formulario existe
                    if (isset($_SESSION['edicion'])) {
                        if ($_SESSION['mod']) {
                            $str = '<p> <b>Usuario modificado</b></p>';
                            Session::del('edicion');
                        } else {
                            $str = '<p> <b>No se han podido modificar los datos...</b></p>';
                        }
                    } else  if (isset($_SESSION['insercion'])) {
                        if ($_SESSION['ins']) {
                            $str = '<p> <b>Usuario insertado</b></p>';
                            Session::del('insercion');
                        } else {
                            $str = '<p> <b>No se han podido insertar los datos...</b></p>';
                        }
                    } else if (isset($_SESSION['eliminacion'])) {
                        if ($_SESSION['elim']) {
                            $str = '<p> <b>Usuario eliminado</b></p>';
                            Session::del('eliminacion');                        } else {
                            $str = '<p> <b>No se han podido eliminar los datos...</b></p>';
                        }
                    } else       $str = '<p> <b>El usuario no existe</b></p>';
                    break;
            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}