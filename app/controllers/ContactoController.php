<?php
include_once __DIR__ . '/../core/Controller.php';

class ContactoController extends Controller {
    public function index() {
        $this->view('contacto/index');
    }
}
