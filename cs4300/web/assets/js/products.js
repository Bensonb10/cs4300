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

const PRODUCTS_DATA = [
    new Card("assets/img/product1.jpg", "Wedding Bands"),
    new Card("assets/img/product2.jpg", "Diamond Earrings"),
    new Card("assets/img/product3.jpg", "Birthstone Ring"),
    new Card("assets/img/product4.jpg", "Claddagh Ring"),
    new Card("assets/img/product5.jpg", "Pave Engagement Ring"),
    new Card("assets/img/product6.jpg", "Solitare Engagement Ring"),
    new Card("assets/img/product7.jpg", "Tension Set Engagement Ring"),
    new Card("assets/img/product8.jpg", "Halo Engagement Ring")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}