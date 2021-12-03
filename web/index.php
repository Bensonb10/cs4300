<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F & M's</title>
    <?php include "components/styles.php" ?>
</head>

<body>
    <?php
    require "config/connection.php";
    include "components/header.php";

    $uri = $_SERVER['REQUEST_URI'];
    // $queryPos = strpos($uri, "?");
    // if ($queryPos > 0) {
    //     $uri = substr($uri, 0, $queryPos);
    // }

    $uri = strpos($uri, "?") > 0 ? substr($uri, 0, strpos($uri, "?")) : $uri;

    switch ($uri) {
        case "/product":
            require __DIR__ . '/views/product/index.php';
            break;
        case "/profile":
            require __DIR__ . '/views/profile/index.php';
            break;
        case "/contact":
            require __DIR__ . '/views/contact/index.php';
            break;
        case "/testimonials":
            require __DIR__ . '/views/testimonials.php';
            break;
        default:
            require __DIR__ . '/views/home/index.php';
            break;
    }

    include "components/footer/index.php";
    $conn->close()
    ?>
</body>

</html>