<?php
require __DIR__ . "/db/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-dischi</title>
</head>

<body>
    <main>
        <section class="gallery">
            <?php
            foreach ($discs as $disc) {
                include __DIR__ . "/partials/album.php";
            }
            ?>
        </section>
    </main>
</body>

</html>