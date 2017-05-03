
<?php
class ContactParser {
    public static function loadContent($vista) {
        $val = Validacion::getInstance();
        $vista = self::pasoSiguiente($vista);
        return $vista;
    }
    public static function pasoSiguiente($vista) {
        $val = Validacion::getInstance();
        $required_fields = '';
        $warning_fields = '';
        foreach ($val->getErrors() as $field => $error) {
            $value = $error['value'];
            $rule = $error['rule'];
            switch ($rule) {
                case 'ok':
                    $vista = str_replace('{{class-'.$field.'}}', '', $vista);
                    break;
                case 'required':
                    $required_fields .= "<strong>$field</strong>, ";

                    break;
                case 'integer':
                    $warning_fields .= "<strong>$field</strong>, ";

                    $vista = str_replace('{{war-'.$field.'}}', $val->getStrRule($rule), $vista);
                    break;
                case 'alpha_space':
                    $warning_fields .= "<strong>$field</strong>, ";

                    $vista = str_replace('{{war-'.$field.'}}', $val->getStrRule($rule), $vista);
                    break;
            }
        }
        foreach (getTagsVista($vista) as $tag) {
            $str = '';
            switch ($tag) {
                case "errores":
                    if (strlen($required_fields) > 0) {
                        $required_fields = substr($required_fields, 0, -2);
                        $str .= "<p class='has-error'>El/Los campo(s) $required_fields son obligatorios</p>";
                    }

            }
            $vista = str_replace('{{' . $tag . '}}', $str, $vista);
        }
        return $vista;
    }
}