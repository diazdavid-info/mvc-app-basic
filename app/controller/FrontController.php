<?php
/**
 * Controlador principal de la aplicación
 * User: David Díaz
 * Date: 7/6/15
 * Time: 20:33
 */

namespace App\Controller;

use App\Conf\Main;

class FrontController extends Controller
{
    /**
     * Atributo que almacena el nombre del controlador
     * @var string
     */
    private $_controller;
    /**
     * Atributo que almacena el nombre de la acción
     * @var string
     */
    private $_accion;

    /**
     * Método que entrada de la aplicación
     */
    public function init()
    {
        $this->setAttributes();
        $this->callController();

    }

    /**
     * Método que establece el valor a los atributos de la clase
     * @param array $args
     */
    private function setAttributes($args = null)
    {
        $this->_controller = (empty($_GET['controller'])) ? Main::getDefaultController() : ucfirst($_GET['controller']);
        $this->_accion = (empty($_GET['action'])) ? Main::getDefaultAction() : $_GET['action'];
    }

    /**
     * Método que ejecuta la acción del controlador indicado
     */
    private function callController()
    {
        if (method_exists('Src\\Controller\\' . $this->_controller . 'Controller', $this->_accion)) {
            call_user_func([$this->instanceClass(), $this->_accion]);
        } else {
            $this->redirect('/');
        }
    }

    /**
     * Método que genera una instancia de un controlador
     * @return object
     */
    private function instanceClass()
    {
        $class = 'Src\\Controller\\' . $this->_controller . 'Controller';
        return new $class;
    }
}