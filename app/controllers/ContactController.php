<?php
include_once __DIR__ . '/../core/Controller.php';

class ContactController extends Controller {
    public function index() {
        $this->view('contact/index');
    }
}
