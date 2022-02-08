let carts = document.querySelectorAll(".add-cart");
let wishs = document.querySelectorAll(".add-wish");



let products = [
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

for (let i = 0 ; i < carts.length ; i++){
    carts[i].addEventListener('click' , () => {
        cartNumbers(products[i]);
        cartTotal(products[i]);
    });
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers){
        document.querySelector('.icons span').textContent = productNumbers;
    }
}

function cartNumbers(product){
    
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers){
        localStorage.setItem('cartNumbers' , productNumbers + 1);
        document.querySelector('.icons span').textContent = productNumbers + 1;
    }
    else {
        localStorage.setItem('cartNumbers' , 1);
        document.querySelector('.icons span').textContent = 1;
    }

    setItems(product);

}

function setItems(product){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    if (cartItems != null){

        if (cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }

        cartItems[product.tag].inCart += 1;
    }
    else{
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart" , JSON.stringify(cartItems));
}


function cartTotal(product){
    let cartCost = localStorage.getItem("totalCost");
    
    if (cartCost != null){
        cartCost = parseFloat(cartCost);
        localStorage.setItem("totalCost" , cartCost + product.price);
    }
    else{
        localStorage.setItem("totalCost" , product.price);
    }

}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let cartContainer = document.querySelector(".box-container.cart");
    let priceContainer = document.querySelector(".cart-total");
    let totalPrice = 0;
    if (cartItems && cartContainer){
        cartContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            cartContainer.innerHTML += `
            <div class = "box">
                <i class="fas fa-times"></i>
                <img src="images/${item.tag}.jpg">
                <div class="content">
                    <h3>${item.name}</h3>
                    <form action="">
                        <span>Quantity: </span>
                        <input type="number" name="" id="" value="${item.inCart}" min="1" readonly>
                    </form>
                    <div class="price">$${item.price}</div>
                </div>
            </div>
            `;
            totalPrice += item.inCart * item.price;
            priceContainer.innerHTML = '';
            priceContainer.innerHTML += `
            <h3>Subtotal: <span>$${Math.floor(totalPrice * 100) / 100}</span></h3>
            <h3>Discount: <span>$0</span></h3>
            <h3>Subtotal: <span>$${Math.floor(totalPrice * 100) / 100}</span></h3>
            <a href="#" class="btn">Checkout</a>
            <a href="#" class="btn" id="clearCart">Clear Cart</a>
            `;
        });

        removeProduct();      
    }
}


function removeProduct(){

    let exitButtons = document.querySelectorAll('.box-container.cart i');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalCost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;
    console.log(cartItems);

    for(let i = 0; i < exitButtons.length; i++) {
        exitButtons[i].addEventListener('click', () => {
            productName = exitButtons[i].parentElement.children[2].innerText.toLowerCase().replace(/ /g,'').split(/\n/)[0];
            console.log(productName);
           
            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);
            localStorage.setItem('totalCost', cartCost - ( cartItems[productName].price * cartItems[productName].inCart));

            delete cartItems[productName];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));

            displayCart();
            onLoadCartNumbers();
            window.location.reload();
        })
    }
}


onLoadCartNumbers();
displayCart();

if (document.querySelector('#clearCart') != null){
    document.querySelector('#clearCart').addEventListener('click' , () => {
        localStorage.clear();
        window.location.reload();
    });
}