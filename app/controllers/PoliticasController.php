<?php
include_once __DIR__ . '/../core/Controller.php';

class PoliticasController extends Controller {
    public function index() {
        $this->view('politicas/index');
    }
}
