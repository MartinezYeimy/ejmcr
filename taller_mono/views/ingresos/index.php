<!-- views/ingresos/index.php -->
<h1>Ingresos del día</h1>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Programa</th>
        <th>Fecha Ingreso</th>
        <th>Hora Ingreso</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($ingresos as $ingreso): ?>
    <tr>
        <td><?= htmlspecialchars($ingreso['codigoEstudiante']) ?></td>
        <td><?= htmlspecialchars($ingreso['nombreEstudiante']) ?></td>
        <td><?= htmlspecialchars($ingreso['programa_id']) ?></td>
        <td><?= htmlspecialchars($ingreso['fechaIngreso']) ?></td>
        <td><?= htmlspecialchars($ingreso['horaIngreso']) ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $ingreso['id'] ?>">Editar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?action=create">Registrar Nuevo Ingreso</a>
