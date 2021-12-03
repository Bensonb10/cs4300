const collections = Array.from(document.getElementsByClassName("items"));
collections.forEach(collection => {
    collection.onclick = function () {
        console.log(this)
        window.location.assign("/product?type=" + this.getAttribute("name"));
    }
})