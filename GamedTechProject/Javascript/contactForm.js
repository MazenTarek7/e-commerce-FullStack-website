const formContact = document.getElementById("contactForm");
const nameInput = document.getElementById("nameInput");
const emailInput = document.getElementById("emailInput");
const phoneInput = document.getElementById("phoneInput");
const subjectInput = document.getElementById("subjectInput");
const messageInput = document.getElementById("messageInput");
const statusText = document.getElementById("statusText");

formContact.onsubmit = (e) => {
    let errMessages = [];
    let nameInputFlag = 1;
    let emailInputFlag = 1;
    let phoneInputFlag = 1;
    let subjectInputFlag = 1;
    let messageInputFlag = 1;

    if (nameInput.value === '' || nameInput == null){
        nameInputFlag = 0;
        errMessages.push("Name is required");
        nameInput.style.borderColor = "red";
    }

    if (nameInput.value.length > 15){
        nameInputFlag = 0;
        errMessages.push("Name must be 15 characters or less");
        nameInput.style.borderColor = "red"; 
    }

    if (nameInputFlag == 1){
        nameInput.style.borderColor = "#333333";
    }

    if (emailInput.value === '' || emailInput.value == null){
        emailInputFlag = 0;
        errMessages.push("Email is required");
        emailInput.style.borderColor = "red";
    }

    if (emailInputFlag == 1){
        emailInput.style.borderColor = "#333333";
    }

    if (phoneInput.value === '' || phoneInput == null){
        phoneInputFlag = 0;
        errMessages.push("Phone is required");
        phoneInput.style.borderColor = "red";
    }

    if (phoneInput.value.length != 11){
        phoneInputFlag = 0;
        errMessages.push("Phone number must be 11 digits");
        phoneInput.style.borderColor = "red";
    }

    if (phoneInput.value.substr(0 , 3) == "010" || phoneInput.value.substr(0 , 3) == "011" || phoneInput.value.substr(0 , 3) == "012" || phoneInput.value.substr(0 , 3) == "015"){
        phoneInputFlag = 1;
        phoneInput.style.borderColor = "#333333";
    }

    else {
        phoneInputFlag = 0;
    }

    if (phoneInputFlag == 0){
        phoneInput.style.borderColor = "red";
        errMessages.push("Phone number must start with 010, 011 , 012 , 015")
    }
    
    if (subjectInput.value === '' || subjectInput == null){
        subjectInputFlag = 0;
        errMessages.push("Subject is required");
        subjectInput.style.borderColor = "red";
    }

    if (subjectInput.value.length > 30){
        subjectInputFlag = 0;
        errMessages.push("Subject Field can't be more than 30 characters long");
        subjectInput.style.borderColor = "red";
    }

    if (subjectInputFlag == 1){
        subjectInput.style.borderColor = "#333333";
    }

    if (messageInput.value === '' || messageInput == null){
        messageInputFlag = 0;
        errMessages.push("Message is required");
        messageInput.style.borderColor = "red";
    }

    if (messageInputFlag == 1){
        messageInput.style.borderColor = "#333333";
    }

    if (errMessages.length > 0 ){
        e.preventDefault();
        statusText.innerText = errMessages.join(", ");
        statusText.style.display = "inline";
    }

    else if (errMessages.length == 0){
        Email.send({
            Host: "Enter your Host",
            Username: "Enter Host Username",
            Password: "Enter Host Password",
            To: "xyz@hotmail.com",
            From: emailInput.value,
            Subject: subjectInput.value,
            Body: "Message From: " + nameInput.value + "<br>" + "Phone Number: " + phoneInput.value + "<br>" + "Message is : " + "<br>" + messageInput.value
        }).then(
            msg => swal("Form Submitted Successfully!", "Thank you , we will get in touch as soon as possible", "success")
          );
        //console.log(nameInput.value + "" + emailInput.value + "" + messageInput.value + "" + phoneInput.value);
        statusText.innerText = "Success";
        statusText.style.color = "green";
        statusText.style.display = "inline";
    }
    
    return false;

};

const newsLetterForm = document.getElementById("newsLetterForm");
const newsEmailInput = document.getElementById("newsLetterEmail");
const promoCodesArr = ["2022", "Web2022", "Javascript" , "JQUERY" , "GamedTech2022" , "10OFF" , "Student10" , "Coding"];

newsLetterForm.onsubmit = (evt) => {
    let errMsgs = [];
    let emailFlag = 1;

    if (newsEmailInput.value === '' || newsEmailInput.value == null){
        emailFlag = 0;
        errMsgs.push("Email is required");
        emailInput.style.borderColor = "red";
    }

    if (errMsgs.length > 0){
        evt.preventDefault();
    }

    else if (errMsgs.length == 0){
        Email.send({
            Host: "smtp-mail.outlook.com", // Host smtp server
            Username: "Enter Username of Host",
            Password: "Enter password",
            To: newsEmailInput.value,
            From: "Enter your Email address",
            Subject: "GamedTech Promotional Email",
            Body: `Message From : GamedTech <br> Thank you for subscribing to our newsletter as a thank you we have provided you with a promo code for 10% off your purchase
            <br>  Promocode: ${getRandomPromo()}`
        }).then(
            msg => swal("Form Submitted Successfully!", "Thank you for subscribing to our newsletter , find a promo code attached in your email", "success")
        );
    }
    
    return false;
};

function getRandomPromo(){
    var code = promoCodesArr[Math.floor(Math.random()*promoCodesArr.length)];
    return code;
}







