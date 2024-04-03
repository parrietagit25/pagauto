<?php
include_once __DIR__ . '/../core/Controller.php';

class InventarioController extends Controller {
    public function index() {
        $this->view('inventario/index');
    }
}
