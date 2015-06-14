<?php
/**
 * Created by PhpStorm.
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 20:44
 */

namespace controller;


class DefaultController extends Controller
{

    public function start()
    {
        $this->view->render('start.tmpl');
    }

}