<?php
/**
 * Controlador padre de todos los controladores
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 19:15
 */

namespace Controller;


class Controller
{

    /**
     * Método que redirecciona a una url
     * @param string $path
     */
    protected function redirect($path)
    {
        header('Location: ' . $path);
    }

}