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
    new Card("assets/img/haloRing.jpg", "Halo Engagement Ring", "Price: 4,000"),
    new Card("assets/img/haloRing2.jpg", "Halo Engagement Ring", "Price: 5,000"),
    new Card("assets/img/haloRing3.jpg", "Halo Engagement Ring", "Price: 5,500"),
    new Card("assets/img/haloRing4.jpg", "Halo Engagement Ring", "Price: 7,500"),
    new Card("assets/img/haloRing5.jpg", "Halo Engagement Ring","Price: 4,500"),
    new Card("assets/img/haloRing6.jpg", "Halo Engagement Ring", "Price: 5,000"),
    new Card("assets/img/haloRing7.jpg", "Halo Engagement Ring", "Price: 6,000"),
    new Card("assets/img/haloRing8.jpg", "Halo Engagement Ring", "Price: 3,000")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}