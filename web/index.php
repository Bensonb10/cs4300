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

    echo substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], "?"));

    switch ($_SERVER['REQUEST_URI']) {
        case '/contact':
            require __DIR__ . '/views/contact/index.php';
            break;
        case '/testimonials':
            require __DIR__ . '/views/testimonials.php';
            break;
        case '/product':
            require __DIR__ . '/views/product.php';
            break;
        default:
            require __DIR__ . '/views/index.php';
            break;
    }

    include "components/footer/index.php";
    $conn->close()
    ?>
</body>

</html>