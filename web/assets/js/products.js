const PRODUCTS_DATA = [
    new Card("/assets/img/product1.jpg", "Wedding Bands"),
    new Card("/assets/img/product2.jpg", "Diamond Earrings"),
    new Card("/assets/img/product3.jpg", "Birthstone Rings"),
    new Card("/assets/img/product4.jpg", "Claddagh Rings"),
    new Card("/assets/img/product5.jpg", "Pave Engagement Rings"),
    new Card("/assets/img/product6.jpg", "Solitare Engagement Rings"),
    new Card("/assets/img/product7.jpg", "Tension Set Engagement Rings"),
    new Card("/assets/img/product8.jpg", "Halo Engagement Rings")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}