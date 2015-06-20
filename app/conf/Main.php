<?php
/**
 * Clase que contiene la configuración de la aplicación
 * User: daviddiaz
 * Date: 13/6/15
 * Time: 19:59
 */

namespace App\Conf;


class Main
{
    /**
     * Método que configura el controlador por defecto
     * @return string
     */
    public static function getDefaultController()
    {
        return self::getRoute()['default'];
    }

    /**
     * Método que contiene la configuración de las rutas de la aplicación.
     * El valor indica la ruta y la key indica el controlador
     * @return array
     */
    public static function getRoute()
    {
        return $conf['route'] = [
            'default' => 'Default',
            'site' => 'Site',
        ];
    }

    /**
     * Método que configura la acción por defecto de los controladores
     * @return string
     */
    public static function getDefaultAction()
    {
        return 'start';
    }

    /**
     * Método donde se declaran las rutas de las vistas
     * @return array
     */
    public static function getRouteViews()
    {
        return [
            'src/views/default',
            'src/views/template',
        ];
    }


}