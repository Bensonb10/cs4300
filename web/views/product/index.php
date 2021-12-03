<main class="clearfix">
    <?php
    class Product
    {
        public $src;
        public $desc;
        public $price;

        function __construct($src = "", $desc = "", $price = 0)
        {
            $this->src = $src;
            $this->desc = $desc;
            $this->price = $price;
        }
    }

    $sql = "SELECT p.Id,p.FriendlyName,p.ImgSrc,p.Price,c.Name as Collection FROM product p LEFT JOIN collection c on p.CollectonId = c.Id WHERE c.Name = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $_GET["type"]);
    $resp = $stmt->execute();

    foreach ($resp as $record) {
        $prod = new Product($record["ImgSrc"], $record["FriendlyName"], $record["Price"]);
        include "views/product/product_card.php";
    }
    // $products[$_GET["type"]]->render();
    ?>
</main>