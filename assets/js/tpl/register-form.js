//Открытие и закрытие формы
let registerBtn = document.querySelector('#register-form-btn'),
    regcloseBtn = document.querySelector('.close-register-popup'),
    registerForm = document.querySelector(".register-form-popup"),
    regForm = document.querySelector("#register-form"),
    regFormBtn = document.querySelector("#register-submit-btn");

    registerBtn.addEventListener("click", function(){
        registerForm.classList.remove("hide-register-form");
    });
    regcloseBtn.addEventListener("click", function(){
        registerForm.classList.add("hide-register-form");
        regForm.reset();
            regFormBtn.setAttribute("disabled", true);
    });

// Проверка логина на латиницу
// let NewLoginInput = document.querySelector("#newlogin").value;



//Проверка пароля

let newPswdInp = document.querySelector("#newpassword"),
    checkNewPswdInp = document.querySelector("#checkpassword");

    checkNewPswdInp.addEventListener("change", function(){
        let value = newPswdInp.value;
        let checkValue = checkNewPswdInp.value;

        if(value === checkValue){
            regFormBtn.removeAttribute("disabled");
        } else{
            alert("Пароли не совпадают")
        }

    });

