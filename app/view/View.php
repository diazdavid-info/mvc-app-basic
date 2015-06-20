<?php
/**
 * Interfaz que debe ser implementa por todas las views
 * User: daviddiaz
 * Date: 20/6/15
 * Time: 19:49
 */

namespace App\View;


interface View
{

    /**
     * Método que renderiza una vista
     * @param string $view
     * @param array $contest
     */
    public function render($view, $contest = array());

}