let loginPress = document.getElementById("login_btn");
let loginForm = document.getElementById("login_form");

loginPress.onclick = function(){
    if (loginForm.style.visibility === "visible") {
        loginForm.style.visibility=="hidden";
        
    } else{
        loginForm.style.visibility ="visible";
    }
    
}

let reg = document.getElementById("submitReg");
let password = document.getElementById("passwordReg");
let confirmPassword = document.getElementById("confirmPassword");

reg.onclick = function(){

    /*let passwordValue = password.value;
    let confirmPasswordValue = confirmPassword.value;

    if(passwordValue === confirmPasswordValue){
        
    }else{
        alert("Passwords do not match. Please try again.");
        event.preventDefault();
    }*/

    alert("hello");

    
}

