<?php
/**
 * Clase encargada de gestionar las vistas
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 20:27
 */

namespace View;


use Conf\Main;

class View
{

    protected $loader;

    function __construct()
    {

    }

    public function render($view, $contest = array())
    {
        $this->loader = new \Twig_Loader_Filesystem(Main::getRouteViews() . '/default');
        $twig = new \Twig_Environment($this->loader);
        $template = $twig->loadTemplate($view);
        echo $template->render($contest);
    }
}