const collections = Array.from(document.getElementsByClassName("items"));
collections.forEach(collection => {
    collection.onclick = () => {
        console.log(collection)
        // window.location.assign("/product?type=" + collection.name.replace(/\s/g, ""));
    }
})