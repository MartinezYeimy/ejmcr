<!-- views/ingresos/create.php -->
<h1>Registrar Ingreso</h1>
<form method="post" action="index.php?action=create">
    <label>Código del Estudiante: <input type="text" name="codigoEstudiante" required></label><br>
    <label>Nombre del Estudiante: <input type="text" name="nombreEstudiante" required></label><br>
    <label>Programa ID: <input type="text" name="programa_id" required></label><br>
    <label>Fecha de Ingreso: <input type="date" name="fechaIngreso" required></label><br>
    <label>Hora de Ingreso: <input type="time" name="horaIngreso" required></label><br>
    <label>Responsable ID: <input type="text" name="responsable_id" required></label><br>
    <button type="submit">Guardar</button>
</form>
<a href="index.php">Volver</a>
