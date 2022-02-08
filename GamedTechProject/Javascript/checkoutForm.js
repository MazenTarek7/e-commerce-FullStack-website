(function () {
    'use strict'
  
    window.addEventListener('load', function () {
      
      var forms = document.getElementsByClassName('needs-validation')
  
      
      Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    }, false)
}())

const creditCardRadio = document.getElementById('credit');
const cashRadio = document.getElementById('cash');
const paypalRadio = document.getElementById('paypal');


const nameLabel = document.getElementById('creditCardLabel');
const nameInput = document.getElementById('cc-name');
const nameMuted = document.getElementById('cc-muted');

const numberLabel = document.getElementById('cardNumberLabel');
const numberInput = document.getElementById('cc-number');

const expLabel = document.getElementById('cardExpLabel');
const expInput = document.getElementById('cc-expiration');

const cvvLabel = document.getElementById('cvvLabel');
const cvvInput = document.getElementById('cc-cvv');

function checkPressed(){

  if (cashRadio.checked == true || paypalRadio.checked == true){
    nameLabel.style.display = "none";
    nameInput.removeAttribute("required");
    nameInput.style.display = "none";
    nameMuted.style.display = "none";
    numberLabel.style.display = "none";
    numberInput.removeAttribute("required");
    numberInput.style.display = "none";
    expLabel.style.display = "none";
    expInput.removeAttribute("required");
    expInput.style.display = "none";
    cvvLabel.style.display = "none";
    cvvInput.removeAttribute("required");
    cvvInput.style.display = "none";
  }
  else if (creditCardRadio.checked == true){
    nameLabel.style.display = "";
    nameInput.style.display = "";
    nameInput.setAttribute("required" , "");
    nameMuted.style.display = "";
    numberLabel.style.display = "";
    numberInput.style.display = "";
    numberInput.setAttribute("required" , "");
    expLabel.style.display = "";
    expInput.style.display = "";
    expInput.setAttribute("required" , "");
    cvvLabel.style.display = "";
    cvvInput.style.display = "";
    cvvInput.setAttribute("required" , "");
  }
}

const cartCount = document.getElementById('cartItemsQuantity');
cartCount.innerText = localStorage.getItem('cartNumbers');

const totalCostDisplay = document.getElementById('totalCost');


let cartItems = localStorage.getItem("productsInCart");
cartItems = JSON.parse(cartItems);
const productsToDisplay = document.getElementById('ProductsContainer');
if (cartItems && productsToDisplay){
  productsToDisplay.innerHTML = '';
  Object.values(cartItems).map(item => {
      productsToDisplay.innerHTML += `
      <li class="list-group-item d-flex justify-content-between lh-condensed" id="productsInCartContainer">
      <div>
        <img src="images/${item.tag}.jpg" width="50" height = "50">
        <h6 class="my-0">${item.name}</h6>
        <small class="text-muted">Quantity: ${item.inCart}</small>
      </div>
      <span class="text-muted">$${item.price * item.inCart}</span>
      </li>
      `;
  });

  productsToDisplay.innerHTML += `
  <li class="list-group-item d-flex justify-content-between bg-light">
  <div class="text-success">
      <h6 class="my-0">Discount:</h6>
  </div>
  <span class="text-success" id = "discountField"></span>
  </li>
  <li class="list-group-item d-flex justify-content-between">
    <span>Total Price: </span>
    <strong id="totalCost">$${(Math.round(localStorage.getItem('totalCost') * 100) / 100).toFixed(2)}</strong>
  </li>
  `

}

let promoInput = document.getElementById("promoInput");
let promoButton = document.getElementById("promoFieldBtn");
const promoCodesArr = ["2022", "Web2022", "Javascript" , "JQUERY" , "GamedTech2022" , "10OFF" , "Student10" , "Coding"];
let discountedApplied = 0;


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
  let totalbeforeDiscount = document.getElementById('totalCost');
  let discount = document.getElementById('discountField');

  if (promoInput.value == ""){
    discount.innerText = "";
    totalbeforeDiscount.innerText = "$" + localStorage.getItem('totalCost');
    discountedApplied = 0;
  }

  else if (flag == 1 && promoInput.value != "" && discountedApplied == 0){
    let discountedPrice = parseFloat(totalbeforeDiscount.innerText.substring(1));
    discountedPrice = Math.round( ((discountedPrice * 0.1) * 100) / 100).toFixed(2);
    discount.innerText = "-$"+discountedPrice;
    let subtotalAfterDiscount = parseFloat(totalbeforeDiscount.innerText.substring(1)) - discountedPrice;
    totalbeforeDiscount.innerText = "$" + subtotalAfterDiscount;
    discountedApplied = 1;
  }
}




