<!-- https://rickandmortyapi.com/api -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty's Characters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <header>
        <h1>Rick and Morty's Characters</h1>

    </header>

    <div class="container">
        <div class="row justify-content-center">

            <?php foreach ($info['results'] as $personaje) { ?>
                <div class="col-md-3 mx-auto mb-4">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src=<?= $personaje['image'] ?> alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $personaje['name'] ?></h5>
                            <p class="card-text"><b>Estado:</b> <?= $personaje['status'] ?></p>
                            <p class="card-text"><b>Género:</b> <?= $personaje['gender'] ?></p>
                            <p class="card-text"><b>Especie:</b> <?= $personaje['species'] ?></p>
                            <p class="card-text"><b>Tipo:</b> <?= $personaje['type'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <!-- Botones -->
        <div class="row mt-3">
                <div class="col col-12 col-md-6">
                    <form action="" method="post">
                        <input type="hidden" name="prev" value="<?php if (isset($info['info']['prev'])) {
                                                                    echo $info['info']['prev'];
                                                                } else {
                                                                    echo '#';
                                                                } ?>">
                        <button class="btn btn-primary" name="anterior" type="submit">Anterior</button>
                    </form>
                </div>
                <div class="col col-12 col-md-6 text-end">
                    <form action="" method="post">
                        <input type="hidden" name="next" value="<?= $info['info']['next'] ?>">
                        <button class="btn btn-primary" name="siguiente" type="submit">Siguiente</button>
                    </form>
                </div>
        </div>
    </div>

</body>

</html>