<?php

class Controller {
    // Métodos comunes del controlador... 
    
    protected function view($view, $data = []) {
    
        require_once '../app/views/' . $view . '.php';
    }

}
