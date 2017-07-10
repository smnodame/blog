<?php
/**
 * Created by PhpStorm.
 * User: boonprakit
 * Date: 7/2/2017
 * Time: 2:56 PM
 */
class Route
{
    static function start()
    {
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // get controller name
        if ( !empty($routes[2]) )
        {
            $controller_name = $routes[2];
        }

        // get name action
        if ( !empty($routes[3]) )
        {
            $action_name = $routes[3];
        }

        // add prefix
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'action_'.$action_name;

        // load file with model
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path))
        {
            include "application/models/".$model_file;
        }

        // load file this controller class
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = "application/controllers/".$controller_file;
        if(file_exists($controller_path))
        {
            include "application/controllers/".$controller_file;
        }
        else
        {
            // redirect to 404 page
            Route::ErrorPage404();
        }

        // create controller
        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action))
        {
            // call action of controller
            $controller->$action();
        }
        else
        {
            // redirect to 404 page
            Route::ErrorPage404();
        }

    }

    function ErrorPage404()
    {
       header('HTTP/1.1 404 Not Found');
       header("Status: 404 Not Found");
       header('Location:'.$host.'404');
       echo "<h1> Page not found! </h1>";
    }
}
