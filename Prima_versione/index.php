<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK TO MY CSS -->
    <link rel="stylesheet" href="/php-ajax-dischi/root/style.css">
    <!-- TITOLO ESERCIZIO -->
    <title>PHP Dischi</title>
</head>

<body>
    <div class="titolo">
        <h1> I MIEI ALBUM </h1>
    </div>
    <div class="card-container">
        <?php
            // Carico il mio database
            include __DIR__ . '/database.php';

            // Ciclo e stampo tutti gli album
            foreach($database as $album) {
                ?>
                    <!-- Prototipo della card -->
                    <div class="card">

                        <!-- Parte superiore della card -->
                        <div class="card-img-container">
                            <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>" />
                        </div>
                        <!-- Parte inferiore della card -->
                        <div class="card-info-container">
                            <h3> <?= $album['title'] ?> </h3>
                            <p> <?= $album['author'] ?> </p>
                            <p> <?= $album['year'] ?> </p>
                            <p> <?= $album['genre'] ?> </p>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>

</body>
</html>