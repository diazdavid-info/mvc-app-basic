<?php
/**
 * Fichero principal de la aplicación
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 19:05
 */

use App\Controller\FrontController;
use App\View\TwigView;

require('vendor/autoload.php');

$frontController = new FrontController();
$frontController->init(new TwigView());