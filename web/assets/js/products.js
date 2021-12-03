const collections = Array.from(document.getElementsByClassName("items"));
collections.forEach(collection => {
    collection.onclick = () => {
        window.location.assign("/product?type=" + collection.name);
    }
})