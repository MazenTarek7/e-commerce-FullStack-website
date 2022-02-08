const searchProducts = () => {
    const searchBox = document.getElementById("search-box").value.toUpperCase();
    const storeItems = document.getElementById("products-container");
    const product = document.querySelectorAll(".products .box");
    const productName = document.querySelectorAll(".products .box .content h3");

    for (var i = 0 ; i < productName.length ; i++){
        let match = product[i].getElementsByTagName("h3")[0];
        console.log(match);

        if (match){
            let textValue = match.textContent || match.innerHTML;

            if (textValue.toUpperCase().indexOf(searchBox) > -1 ){
                product[i].style.display = "";
            }
            else{
                product[i].style.display = "none";
            }
        }
    }
}