<?php

class Controller { 
    protected $db;

    public function __construct() {
        $this->db = $this->connectDB();
    }

    protected function connectDB() {
        $servername = "localhost";
        $username = "autopedro";
        $password = "Chicho1787$$$";
        $dbname = "automarketdev";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("La conexión falló: " . $conn->connect_error);
        }

        return $conn;
    }

    protected function closeDB() {
        $this->db->close();
    }

    protected function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
        $this->closeDB(); // Cierra la conexión 
    }
}