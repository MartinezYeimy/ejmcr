<?php
// models/Ingreso.php
require_once 'config.php';

class Ingreso {
    public $id;
    public $codigoEstudiante;
    public $nombreEstudiante;
    public $programa_id;
    public $fechaIngreso;
    public $horaIngreso;
    public $horaSalida;
    public $responsable_id;
    public $fecha_creacion;
    public $fecha_modificacion;

    public static function getAll() {
        $db = dbConnect();
        $stmt = $db->query("SELECT * FROM ingresos_salas WHERE DATE(fechaIngreso) = CURDATE()");
        return $stmt->fetchAll();
    }

    public static function create($data) {
        $db = dbConnect();
        $stmt = $db->prepare("INSERT INTO ingresos_salas (codigoEstudiante, nombreEstudiante, programa_id, fechaIngreso, horaIngreso, responsable_id, fecha_creacion) VALUES (:codigoEstudiante, :nombreEstudiante, :programa_id, :fechaIngreso, :horaIngreso, :responsable_id, NOW())");
        $stmt->execute($data);
        return $db->lastInsertId();
    }

    public static function update($id, $data) {
        $db = dbConnect();
        $stmt = $db->prepare("UPDATE ingresos_salas SET codigoEstudiante = :codigoEstudiante, nombreEstudiante = :nombreEstudiante, fecha_modificacion = NOW() WHERE id = :id");
        $stmt->execute(array_merge(['id' => $id], $data));
    }

    public static function getById($id) {
        $db = dbConnect();
        $stmt = $db->prepare("SELECT * FROM ingresos_salas WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
?>
