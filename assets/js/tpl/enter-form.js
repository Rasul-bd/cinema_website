let enterBtn = document.querySelector('#enter-form-btn'),
    closeBtn = document.querySelector('.close-enter-popup'),
    enterForm = document.querySelector(".enter-form-popup");

    enterBtn.addEventListener("click", function(){
        enterForm.classList.remove("hide-enter-form");
    });
    closeBtn.addEventListener("click", function(){
        enterForm.classList.add("hide-enter-form");
    });