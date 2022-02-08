// Product Details Page image gallery previewer

var previewedImage = document.getElementById("mainImg");
var smallImages = document.getElementsByClassName("small-img");

smallImages[0].onclick = function(){
    previewedImage.src = smallImages[0].src;
}

smallImages[1].onclick = function(){
    previewedImage.src = smallImages[1].src;
}

smallImages[2].onclick = function(){
    previewedImage.src = smallImages[2].src;
}

smallImages[3].onclick = function(){
    previewedImage.src = smallImages[3].src;
}

smallImages[4].onclick = function(){
    previewedImage.src = smallImages[4].src;
}