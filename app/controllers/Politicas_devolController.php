<?php
include_once __DIR__ . '/../core/Controller.php';

class Politicas_devolController extends Controller {
    public function index() {
        $this->view('politicas_devol/index');
    }
}
