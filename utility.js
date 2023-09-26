let images = document.querySelectorAll('img');

console.debug('List of images: ', images);

images.forEach((image, index, list) => {    
    image.onclick = () => {
        document.body.style.backgroundImage = "url(" + image.src + ")";
    };
});


//TODO: DEFINE PROVINCES DROPDOWN AND FILL WITH JAVASCRIPT
function fillProvinces() {
    
}