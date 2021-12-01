class Card {
    src;
    desc;
    constructor(src, desc) {
        this.src = src;
        this.desc = desc;
    }

    toNode() {
        const item = document.createElement("div");
        item.classList.add("items");

        const card = document.createElement("div");
        card.classList.add("card");

        const img = document.createElement("img");
        img.classList.add("card-img");
        img.src = this.src;

        const h3 = document.createElement("h3");
        h3.classList.add("card-title");
        h3.innerText = this.desc;

        item.appendChild(card);
        card.appendChild(img);
        card.appendChild(h3);

        return item;
    }
}

const PRODUCT_DATA = [
    new Card("assets/img/WeddingBand.jpg", "Eternity Wedding Band", "Price: 650"),
    new Card("assets/img/WeddingBands.jpg", "Oravo Wedding Band", "Price: 500"),
    new Card("assets/img/weddingBand3.jpg", "Kendra Scott Wedding Ring", "Price: 600"),
    new Card("assets/img/weddingBand4.jpg", "Monarch Wedding Band", "Price: 2,000"),
    new Card("assets/img/WeddingBand2.jpg", "14k Gold Wedding Band","Price: 1,500"),
    new Card("assets/img/WeddingBand5.jpg", "Luxurman Wedding Band", "Price: 2,000"),
    new Card("assets/img/WeddingBand6.jpg", "Cavalier Wedding Band", "Price: 3,000"),
    new Card("assets/img/earring8.jpg", "Manly Bands", "Price: 1,000")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}