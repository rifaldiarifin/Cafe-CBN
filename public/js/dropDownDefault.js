function dropDownMenuDefault(dropDownParrent, numClassActive){
    const btn_parrent = document.querySelectorAll(dropDownParrent);
    for(let i = 0; i < btn_parrent.length; i++){
        btn_parrent[i].addEventListener("click", function(){
            if(btn_parrent[i].classList.item(numClassActive - 1) == "dropdown-stndby")
            {
                btn_parrent[i].children[1].classList.remove("hide");
                btn_parrent[i].children[1].classList.add("dsp-flex");
                btn_parrent[i].classList.remove("dropdown-stndby");
                btn_parrent[i].classList.add("dropdown-on");
            }
            else if(btn_parrent[i].classList.item(numClassActive - 1) == "dropdown-on")
            {
                btn_parrent[i].classList.remove("dropdown-on");
                btn_parrent[i].classList.add("dropdown-off");
                setTimeout(function(){
                    btn_parrent[i].children[1].classList.remove("dsp-flex");
                    btn_parrent[i].children[1].classList.add("hide");
                }, 0200);
            }
            else if(btn_parrent[i].classList.item(numClassActive - 1) == "dropdown-off")
            {
                btn_parrent[i].children[1].classList.remove("hide");
                btn_parrent[i].children[1].classList.add("dsp-flex");
                btn_parrent[i].classList.remove("dropdown-off");
                btn_parrent[i].classList.add("dropdown-on");
            }
        });
        window.addEventListener("click", function(e){
            if((e.target !== btn_parrent[i]) && (e.target !== btn_parrent[i].children[0])){
                if(btn_parrent[i].classList.item(numClassActive - 1) == "dropdown-stndby"){
                    btn_parrent[i].classList.remove("dropdown-on");
                    btn_parrent[i].classList.add("dropdown-off");
                    setTimeout(function(){
                        btn_parrent[i].children[1].classList.remove("dsp-flex");
                        btn_parrent[i].children[1].classList.add("hide");
                    }, 0200);
                }
            }
        });
    }
}

dropDownMenuDefault(".dropdown-parrent", 4);