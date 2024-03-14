<?php
include_once __DIR__ . '/../core/Controller.php';

class GraciasController extends Controller {
    public function index() {
        $this->view('gracias/index');
    }
}
