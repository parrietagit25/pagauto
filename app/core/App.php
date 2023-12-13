<?php

class App {
    protected $controller = 'HomeController'; // Controlador predeterminado
    protected $method = 'index'; // Método predeterminado
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Verificar si el controlador existe en la URL
        if (!empty($url[0])) {
            // Capitaliza la primera letra del controlador
            $controllerName = ucfirst($url[0]) . 'Controller';
            
            if (file_exists('../app/controllers/' . $controllerName . '.php')) {
                $this->controller = $controllerName;
                unset($url[0]);
            }
        }

        // Requerir el controlador
        require_once '../app/controllers/' . $this->controller . '.php';

        // Instanciar el controlador
        $this->controller = new $this->controller;

        // Verificar si el método existe en la URL
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Capturar los parámetros restantes
        $this->params = $url ? array_values($url) : [];

        // Llamar al método del controlador con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
