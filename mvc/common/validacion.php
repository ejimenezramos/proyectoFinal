
<?php

class Validacion extends padre {

    private $_rules = array(); // _rules['nombre'] => 'required|alpha_space', _rules['edad'] => 'required|number'
    private $_errors = array(); // _errors['nombre'] = array('value' => '','rule' => 'required') o _errors['nombre'] = array('value' => 'Pedro5','rule' => 'alpha_space') o _errors['nombre'] = array('value' => 'Pedro','rule' => 'ok')
    private $_oks = array(); // _oks['nombre'] =>'Luis', _oks['apellidos'] => "Sánchez Ruiz"
    private $_errorFoto = array(); //en este caso es array porque hay varias fotos
    private $_exists;
 private $_telfRepeat;
    public function setExists($dup) {
        $this->_exists = $dup;
    }
      public function setTelfRepeat($rep) {
        $this->_telfRepeat = $rep;
    }


    public function addRules($rules) {
        $this->_rules = $rules;
    }

    public function run($toValidate) {
        foreach ($toValidate as $field => $value) {
// si el nombre del campo no está como índice en $this->_rules, no hay que validarlo
            if (!array_key_exists($field, $this->_rules))
                continue;
// creamos un array con la cadena $this->_rules[$field] usando como separador de elementos |
            $rules = explode('|', $this->_rules[$field]);
// Si el campo es requerido en $rules hay un elemento cuyo contenido es 'required'
            if (in_array('required', $rules)) {
// el método validate_required verifica si el campo tiene contenido, es decir, ha sido rellenado
// si no es así, añade el campo al array _errors
                $this->_validate_required($field, $value);
// si el campo no se ha rellenado no sigue relizando el control de entrada
// por ello verifica que si existe un elemento con el 'rule'='required'
// getArray() esta definida en common.php
                if (getArray($this->getErrorsByField($field), 'rule') == 'required')
                    continue;
            }
            foreach ($rules as $rule) {
                if ($rule == 'required')
                    continue;
                $method = '_validate_' . $rule;
// verifica si el método de validación existe en esta clase (constante __CLASS__)
// la constante __CLASS__ almacena la clase que se está ejecutando en este momento
                if (!method_exists(__CLASS__, $method))
                    continue;
// ejecuta el método de validación (por ejemplo, validate_alpha_space)
                $this->$method($field, $value);
            }
// puede que en los formularios haya algún campo que no queramos validar,
// pero hay que registrarle en _errors para que el método mdlPaso1() recupere su valor
            if (empty($this->getErrorsByField($field)))
                $this->_setError($field, $value, 'ok');
        }
    }

    public function isValid() {
        if (count($this->_oks) == count($this->_errors))
            return true;
        return false;
    }

    public function getStrRule($rule) {
        switch ($rule) {
// solo hay una posible coincidencia, pero ya añadiremeos más
            case 'alpha_space': return ' *Solo puede contener letras (a-z) y espacios en blanco';
                break;
            case 'numeric':
                return ' *Solo puede contener 3 dígitos'
                        . '';
                break;
            case 'foto' : return $this->_errorFoto;
                break;
            case 'contraseña':
                return ' *Las contraseñas no coinciden';
                break;
            case 'email':
                return ' *El email debe contener @ y .es/.com';
                break;
            case 'duplicate':
                return ' *El dni ya existe en la base de datos';
                break;
            case 'dni':
                return ' *El formato del dni deben ser 8 dígitos y una letra';
                break;
            case 'alphanum_space':
                return ' *sólo caracteres alfanuméricos por favor';
                  case 'repeated':
                return ' *El teléfono 2 no puede sere igual que el uno';
                      break;
                    case 'tel':
                return ' *El formato teléfono debe tener 9 números';
                      break;
                  
                  
        }
        return '';
    }

    public function restoreValue($name) {
        if (array_key_exists($name, $this->_errors)) {
            $value = $this->_errors[$name]['value'];
            return $value;
        }
        return '';
    }

    public function restoreCheckboxes($name, $value, $default = false) {
        if ($this->_errors) {
            if (array_key_exists($name, $this->_errors)) {
//si no se marca ninguna casilla, _errors[$name]['value'] no existe
                if ($this->_errors[$name]['value'])
                    foreach ($this->_errors[$name]['value'] as $valor) {
                        if ($valor == $value)
                            return 'checked';
                    }
            }
// si el nombre del campo no está en _errors, es que es la primera vez que se visualiza el formulario
// y es cuando podemos poner valores por defecto.
        } elseif ($default)
            return 'checked';
    }

////*****************************ESTE RESTORE SELECT ES PARA VISSTAS MULTIPLES//**************************************************
    public function restoreSelect($name, $value, $default = false) {
        if ($this->_errors) {
            if (array_key_exists($name, $this->_errors)) {
                foreach ($this->_errors[$name]['value'] as $valor) {


                    if ($valor == $value)
                        return 'selected';
                }
// si el nombre del campo no está en _errors, es que es la primera vez que se visualiza el formulario
// y es cuando podemos poner valores por defecto.
            }
        } elseif ($default)
            return 'selected';
        return '';
    }

    ////*****************************ESTE RESTORE SELECT ES PARA VISSTAS INDIVIDUALES//**************************************************
    public function restoreSelectInd($name, $value, $default = false) {
        if (array_key_exists($name, $this->_errors)) {
            if ($this->_errors[$name]['value'] == $value)
                return 'selected';
// si el nombre del campo no está en _radios, es que es la primera vez que se visualiza el formulario
// y es cuando podemos poner valores por defecto.
        } elseif ($default)
            return 'selected';
        return '';
    }

    public function getOks() {
        return $this->_oks;
    }

    public function restoreRadios($name, $value, $default = false) {
        if (array_key_exists($name, $this->_errors)) {
            if ($this->_errors[$name]['value'] == $value)
                return 'checked';
// si el nombre del campo no está en _radios, es que es la primera vez que se visualiza el formulario
// y es cuando podemos poner valores por defecto.
        } elseif ($default)
            return 'checked';
        return '';
    }

// método que devuelve el elemento del array _errors de un campo (si existe)
    public function getErrorsByField($field) {
        return getArray($this->_errors, $field, array());
    }

    public function getErrors() {
        return $this->_errors;
    }

    private function _setError($field, $value, $rule) {
        $this->_errors[$field] = array(
            'value' => $value,
            'rule' => $rule
        );
        if ($rule == 'ok') {
            $this->_oks[$field] = $value;
        }
    }

// Método que valida que el dato introducido en el campo es correcto
// Observa que la 2ª parte del nombre del método (alpha_space) coincide con el tipo de dato
// que se utiliza en el array $_rules de la clase mdlPaso1
    private function _validate_alpha_space($field, $value) {
        if (!preg_match('/^[a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ][a-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$/i', $value))
            $this->_setError($field, $value, 'alpha_space');
    }
     private function _validate_alphanum_space($field, $value) {
                if (!preg_match('/^[a-z0-9]+$/i', $value))
                    $this->_setError($field, $value, 'alphanum_space');
            }
    private function _validate_numeric($field, $value) {
        if (!preg_match('/^[0-9]+$/i', $value))
            $this->_setError($field, $value, 'numeric');
    }
 private function _validate_tel($field, $value) {
        if (!preg_match('/^([0-9]{9})*$/', $value))
            $this->_setError($field, $value, 'tel');
    }
// método que añade una elemento al array _errors cuando un campo obligatorio no se ha completado
    private function _validate_required($field, $value) {
        $valor = $value;
        if (is_array($value)) {
            $valor = implode(',', $value);
        }
        if (strlen($valor) == 0)
            $this->_setError($field, $value, 'required');
    }

    private function _validate_contraseña($field, $value) {
        if ($_POST['contra'] != $value) {
            $this->_setError($field, $value, 'contraseña');
        }
    }

    private function _validate_email($field, $value) {
        if (filter_var($value, FILTER_VALIDATE_EMAIL) == false) {
            $this->_setError($field, $value, 'email');
        }
    }

    private function _validate_duplicate($field, $value) {
        if ($this->_exists)
            $this->_setError($field, $value, 'duplicate');
    }
     private function _validate_repeated($field, $value) {
        if ($this->_telfRepeat)
            $this->_setError($field, $value, 'repeated');
    }
    private function _validate_dni($field, $value) {
        if (!preg_match('/^[0-9]{8}[a-z]$/i', $value))
            $this->_setError($field, $value, 'dni');
    }

    private function _validate_foto($field, $value) {
        if ($value["error"] == UPLOAD_ERR_OK) {
            if (($value["type"] != "image/pjpeg") and ( $value["type"] != "image/jpeg")) {
                $this->_setError($field, $value, 'foto');
                $this->_errorFoto[$field] = "<b>JPEG fotos solamente, gracias!</b>";
            } elseif (!move_uploaded_file($value["tmp_name"], "fotos/" . basename($value["name"]))) {
                $this->_setError($field, $value, 'foto');
                $this->_errorFoto[$field] = "<b>Lo sentimos, hubo un problema al subir esa foto</b>" . $value["error"];
            } else
                $this->_setError($field, $value, 'ok');
        } else {
            $this->_setError($field, $value, 'foto');
            switch ($value["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $this->_errorFoto[$field] = "<b>La foto es más grande de lo que permite el servidor.<b>";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $this->_errorFoto[$field] = "<b>La foto es más grande de lo que permite el formulario.<b>";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $this->_setError($field, $value, 'required');
                    break;
                default:
                    $this->_errorFoto[$field] = "Ponte en contacto con el administrador del servidor para obtener ayuda.";
            }
        }
    }

}

?>
   