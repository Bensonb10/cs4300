<main class="clearfix">
    <?php
    class Product_Card
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

    class Product_Collection
    {
        public $collection;
        function __construct($collection)
        {
            $this->collection = $collection;
        }

        function render()
        {
            foreach ($this->collection as $prod) {
                $prod;
                include "views/product/product_card.php";
            }
        }
    }

    $products = array(
        "BirthstoneRings" => new Product_Collection(array(
            new Product_Card("assets/img/Jan-birthStone.jpg", "January Birthstone", "Price: 500"),
            new Product_Card("assets/img/feb-birthStone.jpg", "February Birthstone", "Price: 500"),
            new Product_Card("assets/img/Mar-birthStone.jpg", "March Birthstone", "Price: 550"),
            new Product_Card("assets/img/April-birthStone.jpg", "April Birthstone", "Price: 750"),
            new Product_Card("assets/img/Sep-birthStone.jpg", "September Birthstone", "Price: 450"),
            new Product_Card("assets/img/Oct-birthStone.jpg", "October Birthstone", "Price: 300"),
            new Product_Card("assets/img/nov-birthStone.jpg", "November Birthstone", "Price: 600"),
            new Product_Card("assets/img/dec-birthStone.jpg", "December Birthstone", "Price: 800")
        )),
        "CladdaghRings" => new Product_Collection(array(
            new Product_Card("assets/img/claddagh.jpg", "Claddagh Ring", "Price: 400"),
            new Product_Card("assets/img/claddagh2.jpg", "Claddagh Ring", "Price: 500"),
            new Product_Card("assets/img/claddagh3.jpg", "Claddagh Ring", "Price: 550"),
            new Product_Card("assets/img/claddagh4.jpg", "Claddagh Ring", "Price: 750"),
            new Product_Card("assets/img/claddagh5.jpg", "Claddagh Ring", "Price: 400"),
            new Product_Card("assets/img/claddagh6.jpg", "Claddagh Ring", "Price: 500"),
            new Product_Card("assets/img/claddagh7.jpg", "Claddagh Ring", "Price: 600"),
            new Product_Card("assets/img/claddagh8.jpg", "Claddagh Ring", "Price: 300")
        )),
        "DiamondEarrings" => new Product_Collection(array(
            new Product_Card("assets/img/earring.jpg", "Stud Earrings", "Price: 4,000"),
            new Product_Card("assets/img/earring2.jpg", "London Blue Topaz and Diamond Earing", "Price: 5,000"),
            new Product_Card("assets/img/earring3.jpg", "Stud Halo Earrings", "Price: 5,500"),
            new Product_Card("assets/img/earring4.jpg", "Duis aute irure", "Price: 7,500"),
            new Product_Card("assets/img/earring5.jpg", "Yolana Diamond Earrings", "Price: 4,500"),
            new Product_Card("assets/img/earring6.jpg", "Blue Nile Diamond Earrings", "Price: 5,000"),
            new Product_Card("assets/img/earring7.jpg", "Drop Swirl Diamond Earring", "Price: 6,000"),
            new Product_Card("assets/img/earring8.jpg", "Antique Drop Diamond Earrings", "Price: 3,000")
        )),
        "HaloEngagementRings" => new Product_Collection(array(
            new Product_Card("assets/img/haloRing.jpg", "Halo Engagement Ring", "Price: 4,000"),
            new Product_Card("assets/img/haloRing2.jpg", "Halo Engagement Ring", "Price: 5,000"),
            new Product_Card("assets/img/haloRing3.jpg", "Halo Engagement Ring", "Price: 5,500"),
            new Product_Card("assets/img/haloRing4.jpg", "Halo Engagement Ring", "Price: 7,500"),
            new Product_Card("assets/img/haloRing5.jpg", "Halo Engagement Ring", "Price: 4,500"),
            new Product_Card("assets/img/haloRing6.jpg", "Halo Engagement Ring", "Price: 5,000"),
            new Product_Card("assets/img/haloRing7.jpg", "Halo Engagement Ring", "Price: 6,000"),
            new Product_Card("assets/img/haloRing8.jpg", "Halo Engagement Ring", "Price: 3,000")
        )),
        "PaveEngagementRings" => new Product_Collection(array(
            new Product_Card("assets/img/paveRing.jpg", "Pave Engagement Ring", "Price: 4,000"),
            new Product_Card("assets/img/paveRing2.jpg", "Pave Engagement Ring", "Price: 5,000"),
            new Product_Card("assets/img/paveRing3.jpg", "Pave Engagement Ring", "Price: 5,500"),
            new Product_Card("assets/img/paveRing4.jpg", "Pave Engagement Ring", "Price: 7,500"),
            new Product_Card("assets/img/paveRing5.jpg", "Pave Engagement Ring", "Price: 4,500"),
            new Product_Card("assets/img/paveRing6.jpg", "Pave Engagement Ring", "Price: 5,000"),
            new Product_Card("assets/img/paveRing7.jpg", "Pave Engagement Ring", "Price: 6,000"),
            new Product_Card("assets/img/paveRing8.jpg", "Pave Engagement Ring", "Price: 3,000")
        )),
        "SolitareEngagementRings" => new Product_Collection(array(
            new Product_Card("assets/img/solitareRing.jpg", "Solitare Engagement Ring ", "Price: 4,000"),
            new Product_Card("assets/img/solitareRing2.jpg", "Solitare Engagement Ring ", "Price: 5,000"),
            new Product_Card("assets/img/solitareRing3.jpg", "Solitare Engagement Ring ", "Price: 5,500"),
            new Product_Card("assets/img/solitareRing4.jpg", "Solitare Engagement Ring ", "Price: 7,500"),
            new Product_Card("assets/img/solitareRing5.jpg", "Solitare Engagement Ring ", "Price: 4,500"),
            new Product_Card("assets/img/solitareRing6.jpg", "Solitare Engagement Ring ", "Price: 5,000"),
            new Product_Card("assets/img/solitareRing7.jpg", "Solitare Engagement Ring ", "Price: 6,000"),
            new Product_Card("assets/img/solitareRing8.jpg", "Solitare Engagement Ring ", "Price: 3,000")
        )),
        "TensionSetEngagementRings" => new Product_Collection(array(
            new Product_Card("assets/img/tensionSet.jpg", "Tension Set Engagement Ring ", "Price: 4,000"),
            new Product_Card("assets/img/tensionSet2.jpg", "Tension Set Engagement Ring ", "Price: 5,000"),
            new Product_Card("assets/img/tensionSet3.jpg", "Tension Set Engagement Ring ", "Price: 5,500"),
            new Product_Card("assets/img/tensionSet4.jpg", "Tension Set Engagement Ring ", "Price: 7,500"),
            new Product_Card("assets/img/tensionSet5.jpg", "Tension Set Engagement Ring ", "Price: 4,500"),
            new Product_Card("assets/img/tensionSet6.jpg", "Tension Set Engagement Ring ", "Price: 5,000"),
            new Product_Card("assets/img/tensionSet7.jpg", "Tension Set Engagement Ring ", "Price: 6,000"),
            new Product_Card("assets/img/tensionSet8.jpg", "Tension Set Engagement Ring ", "Price: 3,000")
        )),
        "WeddingBands" => new Product_Collection(array(
            new Product_Card("assets/img/WeddingBand.jpg", "Eternity Wedding Band", "Price: 650"),
            new Product_Card("assets/img/WeddingBands.jpg", "Oravo Wedding Band", "Price: 500"),
            new Product_Card("assets/img/weddingBand3.jpg", "Kendra Scott Wedding Ring", "Price: 600"),
            new Product_Card("assets/img/weddingBand4.jpg", "Monarch Wedding Band", "Price: 2,000"),
            new Product_Card("assets/img/WeddingBand2.jpg", "14k Gold Wedding Band", "Price: 1,500"),
            new Product_Card("assets/img/WeddingBand5.jpg", "Luxurman Wedding Band", "Price: 2,000"),
            new Product_Card("assets/img/WeddingBand6.jpg", "Cavalier Wedding Band", "Price: 3,000"),
            new Product_Card("assets/img/WeddingBand7.jpg", "Manly Bands", "Price: 1,000")
        ))
    );

    $products[$_GET["type"]]->render();
    ?>
</main>