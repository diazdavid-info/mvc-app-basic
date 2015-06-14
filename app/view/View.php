<?php
/**
 * Clase encargada de gestionar las vistas
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 20:27
 */

namespace App\View;


use App\Conf\Main;

class View
{

    protected $loader;

    function __construct()
    {

    }

    /**
     * Método que renderiza una vista
     * @param string $directory
     * @param string $view
     * @param array $contest
     */
    public function render($directory, $view, $contest = array())
    {
        $this->loader = new \Twig_Loader_Filesystem(Main::getRouteViews() . '/' . $directory);
        $twig = new \Twig_Environment($this->loader);
        $template = $twig->loadTemplate($view);
        echo $template->render($contest);
    }
}