let wishBtns = document.querySelectorAll(".add-wish");

let productsWish = [
    {
        name: "Oppo F9 Smartphone",
        tag: 'oppof9smartphone',
        price: 199.99,
        inCart: 0
    },

    {
        name: "Nikon Camera",
        tag: 'nikoncamera',
        price: 279.99,
        inCart: 0
    },

    {
        name: "Samsung TV",
        tag: 'samsungtv',
        price: 449.99,
        inCart: 0
    },

    {
        name: "JBL Speakers",
        tag: 'jblspeakers',
        price: 79.99,
        inCart: 0
    },

    {
        name: "Echo Dot",
        tag: 'echodot',
        price: 149.99,
        inCart: 0
    },

    {
        name: "Apple Watch Series 6",
        tag: 'applewatchseries6',
        price: 299.99,
        inCart: 0
    },

    {
        name: "Headphones",
        tag: 'headphones',
        price: 159.99,
        inCart: 0
    },

    {
        name: "Samsung Smartphone",
        tag: 'samsungsmartphone',
        price: 499.99,
        inCart: 0
    },

    {
        name: "Camera",
        tag: 'camera',
        price: 199.99,
        inCart: 0
    },

    {
        name: "Iphone 13 Pro Max",
        tag: 'iphone13promax',
        price: 1199.99,
        inCart: 0
    },

    {
        name: "Nvidia RTX 3080TI",
        tag: 'nvidiartx3080ti',
        price: 649.99,
        inCart: 0
    },

    {
        name: "Windows 11 Pro",
        tag: 'windows11pro',
        price: 149.99,
        inCart: 0
    },

    {
        name: "ASUS ROG STRIX",
        tag: 'asusrogstrix',
        price: 1499.99,
        inCart: 0
    },

    {
        name: "Razer Blade 15",
        tag: 'razerblade15',
        price: 1999.99,
        inCart: 0
    },

    {
        name: "Intel Core i7",
        tag: 'intelcorei7',
        price: 349.99,
        inCart: 0
    },

    {
        name: "PS5 Controller",
        tag: 'ps5controller',
        price: 69.99,
        inCart: 0
    },

    {
        name: "Razer Huntsman Elite",
        tag: 'razerhuntsmanelite',
        price: 149.99,
        inCart: 0
    },

    {
        name: "Kasperasky Antivirus",
        tag: 'kasperaskyantivirus',
        price: 59.99,
        inCart: 0
    }

]

for (let i = 0 ; i < wishBtns.length ; i++){
    wishBtns[i].addEventListener('click' , () => {
        wishNumbers(productsWish[i]);
    })
}

function onLoadWishNumbers(){
    let productNumbers = localStorage.getItem('wishNumbers');
    if (productNumbers){
        document.querySelector('#wishlistSpan').textContent = productNumbers;
    }
}

function wishNumbers(product){
    
    let productNumbers = localStorage.getItem('wishNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers){
        localStorage.setItem('wishNumbers' , productNumbers + 1);
        document.querySelector('#wishlistSpan').textContent = productNumbers + 1;
    }
    else {
        localStorage.setItem('wishNumbers' , 1);
        document.querySelector('#wishlistSpan').textContent = 1;
    }

    setWishItems(product);

}

function setWishItems(product){
    let wishItems = localStorage.getItem("productsInWish");
    wishItems = JSON.parse(wishItems);

    if (wishItems != null){

        if (wishItems[product.tag] == undefined){
            wishItems = {
                ...wishItems,
                [product.tag]: product
            }
        }

        wishItems[product.tag].inCart += 1;
    }
    else{
        product.inCart = 1;
        wishItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInWish" , JSON.stringify(wishItems));
}

function displayWish(){
    let wishItems = localStorage.getItem("productsInWish");
    wishItems = JSON.parse(wishItems);
    let wishContainer = document.querySelector(".box-container.wish");
    if (wishItems && wishContainer){
        wishContainer.innerHTML = '';
        Object.values(wishItems).map(item => {
            wishContainer.innerHTML += `
            <div class = "box">
                <i class="fas fa-times"></i>
                <img src="images/${item.tag}.jpg">
                <div class="content">
                    <h3>${item.name}</h3>
                    <form action="">
                    </form>
                </div>
            </div>
            `;
        });
     
        removeProductWish();
    }
}

function removeProductWish(){

    let exitButtons = document.querySelectorAll('.box-container.wish i');
    let productNumbers = localStorage.getItem('wishNumbers');
    let wishItems = localStorage.getItem('productsInWish');
    wishItems = JSON.parse(wishItems);
    let productName;
    console.log(wishItems);

    for(let i = 0; i < exitButtons.length; i++) {
        exitButtons[i].addEventListener('click', () => {
            productName = exitButtons[i].parentElement.children[2].innerText.toLowerCase().replace(/ /g,'').split(/\n/)[0];
            console.log(productName);
           
            localStorage.setItem('wishNumbers', productNumbers - wishItems[productName].inCart);

            delete wishItems[productName];
            localStorage.setItem('productsInWish', JSON.stringify(wishItems));

            displayCart();
            onLoadCartNumbers();
            window.location.reload();
        })
    }
}

onLoadWishNumbers();
displayWish();