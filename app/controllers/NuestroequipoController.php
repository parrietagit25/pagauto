<?php
include_once __DIR__ . '/../core/Controller.php';

class NuestroequipoController extends Controller {
    public function index() {
        $this->view('nuestro-equipo/index');
    }
}
