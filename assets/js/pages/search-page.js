let searchResult = document.querySelector(".search_result");
let failMsg = document.querySelector(".search_fail_wrapper");

if(!searchResult.contains( searchResult.querySelector(".film-card"))){
    failMsg.classList.remove('hide-msg');
}