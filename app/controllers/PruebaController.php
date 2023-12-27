<?php
include_once __DIR__ . '/../core/Controller.php';

class PruebaController extends Controller {
    public function index() {
        $this->view('prueba/index');
    }
}
