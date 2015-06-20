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

    /**
     * Atributo que almacena una instancia del cargador de Twig
     * @var \Twig_Loader_Filesystem
     */
    protected $loader;

    /**
     * COnstructor
     */
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
        $this->loader = new \Twig_Loader_Filesystem(Main::getRouteViews());
        $twig = new \Twig_Environment($this->loader);
        $template = $twig->loadTemplate($view);
        echo $template->render($contest);
    }
}