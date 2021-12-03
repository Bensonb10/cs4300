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
        item.onclick = () => {
            window.location.pathname = "/product"
        }

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