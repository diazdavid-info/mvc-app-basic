<?php
/**
 * Controlador principal de la aplicación
 * User: David Díaz
 * Date: 7/6/15
 * Time: 20:33
 */

namespace Controller;


class FrontController
{

    /**
     * Constante que indica el controlador por defecto
     */
    const DEFAULT_CONTROLLER = "Default";
    /**
     * Constante que indica la acción por defecto
     */
    const DEFAULT_ACTION = "start";
    /**
     * Atributo que almacena el nombre del controlador
     * @var string
     */
    private static $_controller;
    /**
     * Atributo que almacena el nombre de la acción
     * @var string
     */
    private static $_accion;

    /**
     * Método que entrada de la aplicación
     */
    public static function init()
    {
        self::setAtributes();
        self::callController();
    }

    /**
     * Método que establece el valor a los atributos de la clase
     * @param array $args
     */
    private static function setAtributes($args = null)
    {
        self::$_controller = (empty($_GET['controller'])) ? self::DEFAULT_CONTROLLER : ucfirst($_GET['controller']);
        self::$_accion = (empty($_GET['accion'])) ? self::DEFAULT_ACTION : $_GET['accion'];
    }

    /**
     * Método que ejecuta la acción del controlador indicado
     */
    private static function callController()
    {
        if (method_exists(__NAMESPACE__ . '\\' . self::$_controller . 'Controller', self::$_accion)) {
            $class = __NAMESPACE__ . '\\' . self::$_controller . 'Controller';
            call_user_func([new $class, self::$_accion]);
        } else {
            header("Location: /");
        }
    }
}