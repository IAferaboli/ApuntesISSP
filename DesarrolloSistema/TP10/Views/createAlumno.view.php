<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos/as</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nif" placeholder="NIF" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido1" placeholder="Apellido1" required>
        <input type="text" name="apellido2" placeholder="Apellido2" required>
        <input type="text" name="ciudad" placeholder="Ciudad" required>
        <input type="text" name="direccion" placeholder="Direccion" required>
        <input type="int" name="telefono" placeholder="Telefono" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha Nacimiento" required>
        <select name="sexo" placeholder="Sexo" required>
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select>
        <div class="row">
            <?php foreach ($asignaturas as $asignatura) { ?>
                <div class="col col-4 col-md-4">
                   <!-- Checkbox list -->
                    <input type="checkbox" name="asignaturasSeleccionadas[]" value="<?= $asignatura->id ?>"><?= $asignatura->nombre ?>
                </div>
            <?php } ?>
        </div>

        <input class="btn btn-primary" type="submit" value="Registrar">
    </form>
</body>
</html>