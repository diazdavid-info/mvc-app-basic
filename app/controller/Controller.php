<?php
/**
 * Controlador padre de todos los controladores
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 19:15
 */

namespace App\Controller;


use App\View\View;

class Controller
{
    /**
     * Atributo que almacena una instancia de la clase View
     * @var object
     */
    protected $view;

    /**
     * Constructor
     */
    function __construct()
    {
        $this->view = new View();
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