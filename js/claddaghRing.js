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
    new Card("assets/img/claddagh.jpg", "Claddagh Ring", "Price: 400"),
    new Card("assets/img/claddagh2.jpg", "Claddagh Ring", "Price: 500"),
    new Card("assets/img/claddagh3.jpg", "Claddagh Ring", "Price: 550"),
    new Card("assets/img/claddagh4.jpg", "Claddagh Ring", "Price: 750"),
    new Card("assets/img/claddagh5.jpg", "Claddagh Ring","Price: 400"),
    new Card("assets/img/claddagh6.jpg", "Claddagh Ring", "Price: 500"),
    new Card("assets/img/claddagh7.jpg", "Claddagh Ring", "Price: 600"),
    new Card("assets/img/claddagh8.jpg", "Claddagh Ring", "Price: 300")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}