<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F & M's</title>
    <?php include "assets/css/index.php" ?>
</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="logo">
                <img src="assets/img/logo1.png" height="80">
            </a>
            <ul>
                <li class="active">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>

    <?php 
    require "config/connection.php";
    $request = $_SERVER['REQUEST_URI'];

    switch($request){
        case '/':
            require __DIR__ . '/views/index.php';
            break;
        case '/contact.php':
            require __DIR__ . '/views/contact.php';
            break;
        case '/testimonials.php':
            require __DIR__ . '/views/testimonials.php';
            break;
        default:
            http_response_code(404);
            break;
    }?>

    <footer>
        <div id="social-sec">
            <h3 class="f-title">Social Media</h3>
        </div>
        <div class="contact">
            <h3 class="f-title">Contact Us</h3>
            <ul>
                <li>
                    <address>
                        ABC Jewlers <br>
                        XYZ STREET <br>
                        New York
                    </address>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:email@xyz.com">email@xyz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:+123 456 789">+123 456 789</a>
                </li>
            </ul>
        </div>
        <div class="frequently">
            <h3 class="f-title">Frequently asked questions</h3>
            <ul>
                <li>
                    Fusce eget dolor adipiscing
                </li>
                <li>
                    Posuere nisl eu venenatis gravida
                </li>
                <li>
                    Morbi dictum ligula mattis
                </li>
                <li>
                    Etiam diam vel dolor luctus dapibus
                </li>
                <li>
                    Vestibulum ultrices magna
                </li>
            </ul>
        </div>
        <div class="sub-footer">
            <p>Current Time: <span id="time"></span></p>
        </div>
    </footer>
    <?php include "assets/js/index.php" ?>
</body>

</html>