const btn_m = document.querySelectorAll(".btn-carddrop-emp");

for(let i = 0; i < btn_m.length; i++){
    btn_m[i].addEventListener("click", function(){
        if(btn_m[i].classList.item(2) == "empcard-nonactive"){
            btn_m[i].classList.remove("empcard-nonactive");
            btn_m[i].classList.add("empcard-active");

            btn_m[i].children[0].classList.toggle("dropoff-span");
            btn_m[i].children[0].classList.toggle("dropon-span");
    
            btn_m[i].nextElementSibling.classList.remove("hide");
            btn_m[i].nextElementSibling.classList.add("dp-menu-emp-on");
        }
        else if(btn_m[i].classList.item(2) == "empcard-active")
        {
            btn_m[i].classList.remove("empcard-active");
            btn_m[i].classList.add("empcard-nonactive");

            btn_m[i].children[0].classList.toggle("dropon-span");
            btn_m[i].children[0].classList.toggle("dropoff-span");
    
            btn_m[i].nextElementSibling.classList.remove("dp-menu-emp-on");
            btn_m[i].nextElementSibling.classList.add("dp-menu-emp-off");
            setTimeout(function(){
                btn_m[i].nextElementSibling.classList.remove("dp-menu-emp-off");
                btn_m[i].nextElementSibling.classList.add("hide");
            }, 0200);
        }
    });

    window.addEventListener("click", function(e){
        if((e.target !== btn_m[i]) && (e.target !== btn_m[i].children[0]))
        {
            btn_m[i].classList.remove("empcard-active");
            btn_m[i].classList.add("empcard-nonactive");

            if(btn_m[i].children[0].classList.item(0) == "dropon-span"){
                btn_m[i].children[0].classList.remove("dropon-span");
                btn_m[i].children[0].classList.add("dropoff-span");
            }
    
            btn_m[i].nextElementSibling.classList.remove("dp-menu-emp-on");
            btn_m[i].nextElementSibling.classList.add("dp-menu-emp-off");
            setTimeout(function(){
                btn_m[i].nextElementSibling.classList.remove("dp-menu-emp-off");
                btn_m[i].nextElementSibling.classList.add("hide");
            }, 0200);
        }
    });
}