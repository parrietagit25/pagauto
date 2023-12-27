<?php
include_once __DIR__ . '/../core/Controller.php';

class DetailController extends Controller {
    public function index() {
        $this->view('detail/index');
    }
}
