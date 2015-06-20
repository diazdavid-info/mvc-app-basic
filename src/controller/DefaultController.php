<?php
/**
 * Controlador por defecto
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 20:44
 */

namespace Src\Controller;


use App\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * Método con la acción start
     */
    public function start()
    {
        $this->_view->render('start.tmpl', ['name' => 'David']);
    }

}