const g1 = document.querySelector(".g1 .btn-filter").parentElement;
const btn_filter = g1.querySelector(".btn-filter");
const dp_filter = g1.querySelector(".box-dropinput");
const icon_filter = btn_filter.lastElementChild;

btn_filter.addEventListener("click", function(){
    if(icon_filter.classList.item(1) == "filter-nonactive"){
        icon_filter.classList.remove("filter-nonactive");
        icon_filter.classList.add("filter-active");

        dp_filter.classList.remove("hide");
        dp_filter.classList.add("dp-menu-filter-on");
    }
    else if(icon_filter.classList.item(1) == "filter-active")
    {
        icon_filter.classList.remove("filter-active");
        icon_filter.classList.add("filter-nonactive");

        dp_filter.classList.remove("dp-menu-filter-on");
        dp_filter.classList.add("dp-menu-filter-off");
        setTimeout(function(){
            dp_filter.classList.remove("dp-menu-filter-off");
            dp_filter.classList.add("hide");
        }, 0200);
    }
});

// window.addEventListener("click", function(h){

//     if((h.target !== btn_filter) && (h.target !== icon_filter))
//     {
//         icon_filter.classList.remove("filter-active");
//         icon_filter.classList.add("filter-nonactive");

//         dp_filter.classList.remove("dp-menu-filter-on");
//         dp_filter.classList.add("dp-menu-filter-off");
//         setTimeout(function(){
//             dp_filter.classList.remove("dp-menu-filter-off");
//             dp_filter.classList.add("hide");
//         }, 0200);
//     }
// });

/////



////


const sprof = document.getElementById("dropdown-sprof");
const btn_sprof = sprof.querySelector(".input-select");
const icon_sprof = sprof.querySelector(".btndropdown");
const dp_sprof = sprof.querySelector(".option-select");
const btnfilter = document.getElementById("usefilter");

btn_sprof.addEventListener("click", function(){
    if(icon_sprof.classList.item(1) == "dpicon-nonactive"){
        icon_sprof.classList.remove("dpicon-nonactive");
        icon_sprof.classList.add("dpicon-active");

        dp_sprof.classList.remove("hide");
        dp_sprof.classList.add("dp-menu-sprof-on");
    }
    else if(icon_sprof.classList.item(1) == "dpicon-active")
    {
        icon_sprof.classList.remove("dpicon-active");
        icon_sprof.classList.add("dpicon-nonactive");

        dp_sprof.classList.remove("dp-menu-sprof-on");
        dp_sprof.classList.add("dp-menu-sprof-off");
        setTimeout(function(){
            dp_sprof.classList.remove("dp-menu-sprof-off");
            dp_sprof.classList.add("hide");
        }, 0200);
    }
});

btnfilter.addEventListener("click", () => {
    icon_sprof.classList.remove("dpicon-active");
    icon_sprof.classList.add("dpicon-nonactive");

    dp_sprof.classList.remove("dp-menu-sprof-on");
    dp_sprof.classList.add("dp-menu-sprof-off");
    setTimeout(function() {
        dp_sprof.classList.remove("dp-menu-sprof-off");
        dp_sprof.classList.add("hide");
    }, 0200);
});

window.addEventListener("click", function(e){

    if((e.target !== btn_sprof) && (e.target !== btn_sprof.children[0]) && (e.target !== btn_sprof.children[1]) && (e.target !== btn_sprof.lastElementChild) && (e.target !== btn_sprof.lastElementChild.children[0]))
    {
        icon_sprof.classList.remove("dpicon-active");
        icon_sprof.classList.add("dpicon-nonactive");

        dp_sprof.classList.remove("dp-menu-sprof-on");
        dp_sprof.classList.add("dp-menu-sprof-off");
        setTimeout(function(){
            dp_sprof.classList.remove("dp-menu-sprof-off");
            dp_sprof.classList.add("hide");
        }, 0200);
    }
});

const dp_default = document.querySelectorAll(".dropdown-default");

for(let i = 0; i < dp_default.length; i++){
    const btndp_default = dp_default[i].querySelector(".inputselect-default");
    const optiondp_default = dp_default[i].querySelector(".optionselect-default");
    const icondp_default = dp_default[i].querySelector(".btnicon-idk");
    btndp_default.addEventListener("click", function(){
        if(icondp_default.classList.item(1) == "dpicon-nonactive"){
            icondp_default.classList.remove("dpicon-nonactive");
            icondp_default.classList.add("dpicon-active");
    
            optiondp_default.classList.remove("hide");
            optiondp_default.classList.add("dp-menu-default-on");
        }
        else if(icondp_default.classList.item(1) == "dpicon-active")
        {
            icondp_default.classList.remove("dpicon-active");
            icondp_default.classList.add("dpicon-nonactive");
    
            optiondp_default.classList.remove("dp-menu-default-on");
            optiondp_default.classList.add("dp-menu-default-off");
            setTimeout(function(){
                optiondp_default.classList.remove("dp-menu-default-off");
                optiondp_default.classList.add("hide");
            }, 0200);
        }
    });

    window.addEventListener("click", function(f){
        if((f.target !== btndp_default) && (f.target !== btndp_default.children[0]) && (f.target !== btndp_default.lastElementChild) && (f.target !== btndp_default.lastElementChild.children[0])){
            icondp_default.classList.remove("dpicon-active");
            icondp_default.classList.add("dpicon-nonactive");
    
            optiondp_default.classList.remove("dp-menu-default-on");
            optiondp_default.classList.add("dp-menu-default-off");
            setTimeout(function(){
                optiondp_default.classList.remove("dp-menu-default-off");
                optiondp_default.classList.add("hide");
            }, 0200);
        }
    });
}