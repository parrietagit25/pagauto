<?php
include_once __DIR__ . '/../core/Controller.php';

class ListingController extends Controller {
    public function index() {
        $this->view('listing/index');
    }
}
