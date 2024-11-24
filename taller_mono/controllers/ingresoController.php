<?php
// controllers/IngresoController.php
require_once 'models/Ingreso.php';

class IngresoController {
    public function index() {
        $ingresos = Ingreso::getAll();
        require 'views/ingresos/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'codigoEstudiante' => $_POST['codigoEstudiante'],
                'nombreEstudiante' => $_POST['nombreEstudiante'],
                'programa_id' => $_POST['programa_id'],
                'fechaIngreso' => $_POST['fechaIngreso'],
                'horaIngreso' => $_POST['horaIngreso'],
                'responsable_id' => $_POST['responsable_id']
            ];
            Ingreso::create($data);
            header('Location: index.php');
        } else {
            require 'views/ingresos/create.php';
        }
    }

    public function edit($id) {
        $ingreso = Ingreso::getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'codigoEstudiante' => $_POST['codigoEstudiante'],
                'nombreEstudiante' => $_POST['nombreEstudiante']
            ];
            Ingreso::update($id, $data);
            header('Location: index.php');
        } else {
            require 'views/ingresos/edit.php';
        }
    }
}
?>
