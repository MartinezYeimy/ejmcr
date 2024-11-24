<!-- views/ingresos/edit.php -->
<h1>Editar Ingreso</h1>
<form method="post" action="index.php?action=edit&id=<?= $ingreso['id'] ?>">
    <label>Código del Estudiante: <input type="text" name="codigoEstudiante" value="<?= htmlspecialchars($ingreso['codigoEstudiante']) ?>" required></label><br>
    <label>Nombre del Estudiante: <input type="text" name="nombreEstudiante" value="<?= htmlspecialchars($ingreso['nombreEstudiante']) ?>" required></label><br>
    <button type="submit">Actualizar</button>
</form>
<a href="index.php">Volver</a>
