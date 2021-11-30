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

const EARRINGS_DATA = [
    new Card("assets/img/earring.jpg", "Stud Earrings", "Price: 4,000"),
    new Card("assets/img/earring2.jpg", "London Blue Topaz and Diamond Earing", "Price: 5,000"),
    new Card("assets/img/earring3.jpg", "Stud Halo Earrings", "Price: 5,500"),
    new Card("assets/img/earring4.jpg", "Duis aute irure", "Price: 7,500"),
    new Card("assets/img/earring5.jpg", "Yolana Diamond Earrings","Price: 4,500"),
    new Card("assets/img/earring6.jpg", "Blue Nile Diamond Earrings", "Price: 5,000"),
    new Card("assets/img/earring7.jpg", "Drop Swirl Diamond Earring", "Price: 6,000"),
    new Card("assets/img/earring8.jpg", "Antique Drop Diamond Earrings", "Price: 3,000")
];

const earringsSec = document.getElementById("earrings-sec");
for (const earrings of EARRINGS_DATA) {
    earringSec.appendChild(earrings.toNode());
}