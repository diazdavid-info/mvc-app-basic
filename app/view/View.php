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
    protected $_loader;
    /**
     * Atributo que almacena una instancia del contexto de Twig
     * @var
     */
    protected $_twig;

    /**
     * COnstructor
     */
    function __construct()
    {
        $this->_loader = new \Twig_Loader_Filesystem(Main::getRouteViews());
        $this->_twig = new \Twig_Environment($this->_loader);
    }

    /**
     * Método que renderiza una vista
     * @param string $view
     * @param array $contest
     */
    public function render($view, $contest = array())
    {
        $template = $this->_twig->loadTemplate($view);
        echo $template->render($contest);
        exit();
    }
}