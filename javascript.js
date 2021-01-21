// Function for showing filter content on left menu
function ToggleFunc(event) {
    var content = event.nextElementSibling;
    if (content.style.display === "flex") {
        content.style.display = "none";
    } else {
        content.style.display = "flex";
    }
}

//Function for showing car description
function ShowDescription(event) {
    var content = event.nextElementSibling;
    if (content.style.display === "block") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}

//Function for oppening login form
function LoginForm(event){
    var content = document.getElementById("login-m");
    if(content.style.display == "block"){
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}

//Function for oppening registration form
function RegistrationForm(event){
    var content = document.getElementById("registration-m");
    if(content.style.display == "block"){
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
}
