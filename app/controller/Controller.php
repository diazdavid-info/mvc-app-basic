<?php
/**
 * Controlador padre de todos los controladores
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 19:15
 */

namespace App\Controller;


use App\Conf\Main;
use App\View\TwigView;
use App\View\View;

class Controller
{
    /**
     * Atributo que almacena una instancia de la clase View
     * @var View
     */
    protected $_view;

    /**
     * Constructor
     */
    function __construct()
    {
        $this->_view = Main::getInstanceView();
    }


    /**
     * Método que redirecciona a una url
     * @param string $path
     */
    protected function redirect($path)
    {
        header('Location: ' . $path);
    }

}