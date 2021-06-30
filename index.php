<?php
require __DIR__ . "/db/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
</head>

<body>
    <main>
        <?php
        foreach ($discs as $disc) {
            include __DIR__ . "/partials/album.php";
        }
        ?>
    </main>
</body>

</html>