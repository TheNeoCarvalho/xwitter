<?php

class Router
{
    public function run()
    {
        $controllerName = 'HomeController';
        $actionName = 'index';

        $controllerFile = '../app/controllers/' . $controllerName . '.php';

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            } else {
                echo "Método não encontrado!";
            }
        } else {
            echo "Controller não encontrado!";
        }
    }
}

