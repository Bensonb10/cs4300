<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F & M's</title>
    <link rel="manifest" href="/manifest.json">
    <?php include "components/styles.php" ?>
</head>

<body>
    <!-- <script src="assets/js/sw_register.js"></script> -->
    <?php
    require "config/connection.php";
    include "components/header.php";

    if (substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?")) == "/product") require __DIR__ . '/views/product/index.php';
    else if ($_SERVER['REQUEST_URI'] == "/contact") require __DIR__ . '/views/contact/index.php';
    else if ($_SERVER['REQUEST_URI'] == "/testimonials") require __DIR__ . '/views/testimonials.php';
    else require __DIR__ . '/views/index.php';

    include "components/footer/index.php";
    $conn->close()
    ?>
</body>

</html>