<?php

// clase que permite registrar y ejecutar los métodos del modelo (y sus clases) que atienden los eventos que se producen a través de la vista
class EventDispatcher extends padre {

    protected $_callbacks = array();

// registerEventsModels() registra en $_callbacks los métodos que se llamarán dinámicamente (llamadas de retorno)
    function registerEventsModels() {
// get_declared_classes() devuelve un array con todas las clases declaradas (con require_once) 
        foreach (get_declared_classes() as $class) {
            if (substr($class, 0, 3) != 'mdl')
                continue;
// Events
            $this->registerEventCallback(array($class::getInstance(), 'onGestionPagina'));
            $this->registerEventCallback(array($class::getInstance(), 'onCargarVista'));
        }
    }

    function registerEventCallback($callback) {
// get_class_methods devuelve un array con todos los métodos la clase que se le pasa como argumento
// Comprobamos si el método existe ($callback[1]) existe en la clase ($callback[0]) antes de registrarlo
        if (!in_array($callback[1], get_class_methods($callback[0])))
            return;
        $this->_callbacks[] = $callback;
    }

// trigger() permite llamar dinámicamente un método ($fnc) en las clases registradas en $this->_callbacks
// call_user_func() ejecuta el método que se le pasa como argumento ($fnc)
// ejecutamos el método ($fnc) de todas las clases donde está declarado
// es en cada una de estas clases donde se determina si su método debe ejecutarse
    function trigger($fnc, $args = array()) {
        foreach ($this->_callbacks as $callback) {
            if ($callback[1] != $fnc)
                continue;
// Ejecuta la llamada de retorno (callback) pasándole el argumento
            call_user_func($callback, $args);
        }
    }

}
