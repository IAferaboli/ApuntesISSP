<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores/as</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" value="<? $profesor->nif ?>" name="nif" placeholder="NIF" required>
        <input type="text" value="<? $profesor->nombre ?>" name="nombre" placeholder="Nombre" required>
        <input type="text" value="<? $profesor->apellido1 ?>" name="apellido1" placeholder="Apellido1" required>
        <input type="text" value="<? $profesor->apellido2 ?>" name="apellido2" placeholder="Apellido2" required>
        <input type="text" value="<? $profesor->ciudad ?>" name="ciudad" placeholder="Ciudad" required>
        <input type="text" value="<? $profesor->direccion ?>" name="direccion" placeholder="Direccion" required>
        <input type="int" value="<? $profesor->telefono ?>" name="telefono" placeholder="Telefono" required>
        <input type="date" value="<? $profesor->fecha_nacimiento ?>" name="fecha_nacimiento" placeholder="Fecha Nacimiento" required>
        <select name="sexo" placeholder="Sexo" required>
            <?php if($profesor->sexo ==  "H") { ?>
                <option value="H" selected>Hombre</option>
                <option value="M">Mujer</option>
            <?php } else { ?>
                <option value="M" selected>Mujer</option>
                <option value="H">Hombre</option>
            <?php } ?>
        </select>
        <select name="id" placeholder="departamento" required>
            <?php foreach($departamentos as $departamento) : ?>
                <?php if($departamento->id ==  $profesor->id_departamento) { ?>
                    <option value="<?= $departamento->id ?>" selected><?= $departamento->nombre ?></option>
                <?php } else { ?>
                    <option value="<? $departamento->id ?>"><?= $departamento->nombre ?></option>
                <?php } ?>
            <?php endforeach; ?>
        </select>
        <input class="btn btn-primary" type="submit" value="Registrar">
    </form>
</body>
</html>

