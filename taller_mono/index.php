<?php
// index.php
require_once 'controllers/IngresoController.php';

$action = $_GET['action'] ?? 'index';
$controller = new IngresoController();

if ($action === 'create') {
    $controller->create();
} elseif ($action === 'edit' && isset($_GET['id'])) {
    $controller->edit($_GET['id']);
} else {
    $controller->index();
}
?>
