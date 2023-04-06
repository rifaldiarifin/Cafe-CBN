const btn_mode_input = document.getElementById("togl-mode");
const btn_mode_pr = document.querySelector(".tab-box .toggle-mode");
const mode_theme = document.querySelector("html");
const label_mode = document.querySelector(".tab-box p");
const screen_mode = document.getElementById("screenMode");
const body_scroll = document.querySelector("body");
const text_label = document.getElementById("label-mode");

btn_mode_pr.addEventListener("click", function(){
    // mode_theme.classList.toggle("darkThemeMode");
    if(mode_theme.classList.item(0) === "darkThemeMode"){
        screen_splash_mode2();
        text_label.innerHTML = "LightMode";
        label_mode.innerHTML = "Light Mode";
        mode_theme.removeAttribute("class");
    }
    else
    {
        screen_splash_mode1();
        text_label.innerHTML = "DarkMode";
        label_mode.innerHTML = "Dark Mode";
        mode_theme.setAttribute("class", "darkThemeMode");
    }
});

function screen_splash_mode1(){
    screen_mode.removeAttribute("class");
    if(screen_mode.classList == 0){
        body_scroll.classList.add("scrolling-disabled");
        screen_mode.setAttribute("class", ("screen-change-mode"));

        setTimeout(function(){ 
        screen_mode.removeAttribute("class");
        screen_mode.setAttribute("class", "screen-off");
        body_scroll.classList.remove("scrolling-disabled");
        }, 2200);
    }
}

function screen_splash_mode2(){
    screen_mode.removeAttribute("class");
    if(screen_mode.classList == 0){
        body_scroll.classList.add("scrolling-disabled");
        screen_mode.setAttribute("class", ("screen-change-mode-2"));

        setTimeout(function(){ 
        screen_mode.removeAttribute("class");
        screen_mode.setAttribute("class", "screen-off");
        body_scroll.classList.remove("scrolling-disabled");
        }, 2200);
    }
}