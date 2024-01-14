let loginPress = document.getElementById("login_btn");
let regPress = document.getElementById("register_btn");
let loginForm = document.getElementById("login_form");
let registerForm = document.getElementById("register_form");


loginPress.onclick = function(){
    if (loginForm.style.visibility === "hidden") {
        loginForm.style.visibility="visible";
        registerForm.style.visibility ="hidden";
    } else{
        loginForm.style.visibility ="hidden"
    }
    
}


regPress.onclick = function(){
    if (registerForm.style.visibility === "hidden") {
        registerForm.style.visibility="visible";
        loginForm.style.visibility ="hidden"
    } else{
        registerForm.style.visibility ="hidden";
    }
    
}

