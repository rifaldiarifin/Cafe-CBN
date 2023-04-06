const boxS = document.querySelector(".box-search-slide");

boxS.children[0].addEventListener("click", function(){
    if(boxS.classList.item(1) == "box-srch-nonactive"){
        boxS.children[1].children[0].removeAttribute("disabled");
        boxS.classList.remove("box-srch-nonactive");
        boxS.classList.add("box-srch-active");
    }
    else if(boxS.classList.item(1) == "box-srch-active")
    {
        boxS.children[1].children[0].setAttribute("disabled", "true");
        boxS.classList.remove("box-srch-active");
        boxS.classList.add("box-srch-nonactive");
    }
});

window.addEventListener("click", function(e){
    if((e.target == boxS.children[1]) || (e.target == boxS.children[1].children[0])){
    }
    else if((e.target !== boxS) && (e.target !== boxS.children[0]) && (e.target !== boxS.children[0].children[0]) && (e.target !== boxS.children[1].children[0]) && (e.target !== boxS.children[1])){
        boxS.children[1].children[0].setAttribute("disabled", "true");
        boxS.classList.remove("box-srch-active");
        boxS.classList.add("box-srch-nonactive");
    }
});