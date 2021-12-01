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
    new Card("assets/img/Jan-BirthStone.jpg", "January Birthstone", "Price: 500"),
    new Card("assets/img/feb-birthstone.jpg", "February Birthstone", "Price: 500"),
    new Card("assets/img/Mar-birthStone.jpg", "March Birthstone", "Price: 550"),
    new Card("assets/img/April-birthStone.jpg", "April Birthstone", "Price: 750"),
    new Card("assets/img/Sep-birthstone.jpg", "September Birthstone","Price: 450"),
    new Card("assets/img/Oct-birthstone.jpg", "October Birthstone", "Price: 300"),
    new Card("assets/img/nov-birthStone.jpg", "November Birthstone", "Price: 600"),
    new Card("assets/img/dec-birthstone.jpg", "December Birthstone", "Price: 800")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}