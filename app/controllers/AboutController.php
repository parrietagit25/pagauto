<?php
include_once __DIR__ . '/../core/Controller.php';

class AboutController extends Controller {
    public function index() {
        $this->view('about/index');
    }
}
