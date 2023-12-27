<?php

include_once __DIR__ . '/../core/Controller.php';

class HomeController extends Controller {

    public function index() {
        // Llama a la vista sin pasar datos
        $this->view('home/index');
    }
    
    public function mostrarDatos() {
        // Realizar la consulta a la base de datos
        $result = $this->db->query("SELECT * FROM Automarket_Invs_web WHERE Photo not in('')");

        // Pasa los resultados a la vista
        $this->view('home/index', ['result' => $result]);
    }
}
