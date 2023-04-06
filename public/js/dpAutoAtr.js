function dropDownMenuAutoAtr(dropDownParrent){
    const btn_parrent = document.querySelectorAll(dropDownParrent);
    for(let i = 0; i < btn_parrent.length; i++){
        btn_parrent[i].querySelector(".dp-btn.dp-option").addEventListener("click", function(){
            if(btn_parrent[i].classList.contains("dp-itaa-off"))
            {
                btn_parrent[i].nextElementSibling.classList.remove("dp-box-personal-off");
                btn_parrent[i].nextElementSibling.classList.remove("hide");
                btn_parrent[i].nextElementSibling.classList.add("dsp-block");
                btn_parrent[i].nextElementSibling.classList.add("dp-box-personal-on");
                btn_parrent[i].classList.remove("dp-itaa-off");
                btn_parrent[i].classList.add("dp-itaa-on");
            }
            else if(btn_parrent[i].classList.contains("dp-itaa-on"))
            {
                btn_parrent[i].nextElementSibling.classList.remove("dp-box-personal-on");
                btn_parrent[i].nextElementSibling.classList.add("dp-box-personal-off");
                setTimeout(function(){
                    btn_parrent[i].classList.remove("dp-itaa-on");
                    btn_parrent[i].classList.add("dp-itaa-off");
                    btn_parrent[i].nextElementSibling.classList.remove("dsp-block");
                    btn_parrent[i].nextElementSibling.classList.add("hide");
                }, 0550);
            }
        });
    }
}

dropDownMenuAutoAtr(".dp-icon-text-auto-atr");