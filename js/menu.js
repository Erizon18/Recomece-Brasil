document.onload = loadHtml();

var menuButton;
var navBar;

function loadHtml(){
    navBar = document.getElementsByClassName("nav-bar")[0];
    menuButton = document.getElementsByClassName("menu")[0];
    menuButton.addEventListener('click', menuInteraction);
}

function menuInteraction(){
    if(navBar.classList.contains("active")){
        navBar.classList.remove("active")
    }
    else{
        navBar.classList.add("active")
    }
}