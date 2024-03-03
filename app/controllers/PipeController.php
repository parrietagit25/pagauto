<?php include_once __DIR__ . '/../core/Controller.php';

class PipeController extends Controller {
    public function index() {
        $this->view('pipe/index');
    }
} ?>