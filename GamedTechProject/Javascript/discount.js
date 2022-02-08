$(document).ready(function() {
    let promoInput = document.querySelector("#promoInput");
    const promoCodesArr = ["2022", "Web2022", "Javascript" , "JQUERY" , "GamedTech2022" , "10OFF" , "Student10" , "Coding"];
    $("#promoFieldBtn").on("click" , function(){
        applyDiscount();
    });

    $("#js-apply-promo").on("click", function(){
        $("#js-promo-box").fadeToggle();
    });


    function checkDiscount(){
        for (let i = 0 ; i < promoCodesArr.length ; i++){
            if (promoCodesArr[i].match(promoInput.value)){
                return 1;
            }
        }
        return 0;
    }

    function applyDiscount(){
        let flag = checkDiscount();
        let subtotalBeforeDiscount = document.querySelectorAll('.cart-total h3')[0];
        let discount = document.querySelectorAll('.cart-total h3')[1];
        let subtotalAfterDiscount = document.querySelectorAll('.cart-total h3')[2];
        let statusPromo = document.querySelector('.shopping-cart p');
        if (flag == 0 || promoInput.value == ""){
            promoInput.style.borderColor = "red";
            subtotalBeforeDiscount = parseFloat(subtotalBeforeDiscount.innerText.replace( /[^\d\.]*/g, ''));
            discount.innerHTML = `Discount: <span>$0</span>`;
            subtotalAfterDiscount.innerHTML = `Subtotal: <span>$${subtotalBeforeDiscount}</span>`;
            promoInput.value = "";

            statusPromo.style.display = "inline";
            statusPromo.style.fontWeight = "bolder";
            statusPromo.innerText = "Invalid Promo Code";
            statusPromo.style.fontSize = "1.5rem";
            statusPromo.style.color = "red";
            
        }
        else if (flag == 1 && promoInput.value != ""){
            statusPromo.style.display = "none";
            promoInput.style.borderColor = "green";
            subtotalBeforeDiscount = parseFloat(subtotalBeforeDiscount.innerText.replace( /[^\d\.]*/g, ''));
            let discountedPrice = Math.round( ((subtotalBeforeDiscount * 0.1) * 100) / 100).toFixed(2);
            discount.innerHTML = `Discount: <span>-$${discountedPrice}</span>`;
            subtotalAfterDiscount.innerHTML = `Subtotal: <span>$${subtotalBeforeDiscount - discountedPrice}</span>`;
        }

    }

});


