const prc = document.querySelector(".box-field #price");
const lbl_prc = document.getElementById("rp");

function restrictAlphabets(e){
    var x = e.which || e.keycode;
    if(x >= 48 && x <= 57){
        return true;
    }
    else
    {
        return false;
    }
}

prc.addEventListener("focus", function(){
    lbl_prc.style.display = "block";
});

prc.addEventListener("focusout", function(){
    if(prc.value.length == 0){
        lbl_prc.style.display = "none";
    }
    else if(prc.value.length > 0)
    {
        lbl_prc.style.display = "block";
    }
});