<?php
include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/models/Bed.php";
include_once __DIR__ . "/models/Hygiene.php";
include_once __DIR__ . "/models/Leash.php";
include_once __DIR__ . "/models/PetPorter.php";
include_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer></script>
    <title>Prodotti per cani</title>
</head>

<body>
    <div class="container">
        <h2>Prodotti per animali</h2>
        <hr>
        <?php
        foreach ($products as $product) { ?>
        <ul>
        </ul>
        <hr>
        <?php } ?>
    </div>
</body>

</html>