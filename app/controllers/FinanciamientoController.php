<?php
include_once __DIR__ . '/../core/Controller.php';

class FinanciamientoController extends Controller {
    public function index() {
        $this->view('financiamiento/index');
    }
}
