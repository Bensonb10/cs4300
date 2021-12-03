<?php
class Collection
{
    public $src;
    public $name;
    public $friendlyName;

    function __construct($src, $friendlyName, $name)
    {
        $this->src = $src;
        $this->friendlyName = $friendlyName;
        $this->name = $name;
    }
}
$sql = "SELECT Id,Name,FriendlyName,ImgSrc FROM Collection;";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resp = $stmt->get_result();
?>

<main class="clearfix">
    <section class="hero">
        <h1>You Deserve to be Beauty</h1>
    </section>

    <section id="products-sec">
        <h1 class="title">Products</h1>
        <?php
        foreach ($resp as $record) {
            $prod = new Collection($record["ImgSrc"], $record["FriendlyName"], $record["Name"]);
            include "views/home/collection_card.php";
        }
        ?>
    </section>
</main>
<script src="assets/js/products.js"></script>