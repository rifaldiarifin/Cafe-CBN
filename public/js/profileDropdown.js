const dropDown_profile = document.getElementById("dropdownParent");
const dropDown_Menu = document.getElementById("dropdownMenu");

dropDown_profile.addEventListener("click", function(){
    if(dropDown_profile.classList.item(1) == "profile-nonactive"){
        dropDown_profile.classList.remove("profile-nonactive");
        dropDown_profile.classList.add("profile-active");

        dropDown_Menu.classList.remove("hide");
        dropDown_Menu.classList.add("dp-menu-on");
    }
    else if(dropDown_profile.classList.item(1) == "profile-active")
    {
        dropDown_profile.classList.remove("profile-active");
        dropDown_profile.classList.add("profile-nonactive");

        dropDown_Menu.classList.remove("dp-menu-on");
        dropDown_Menu.classList.add("dp-menu-off");
        setTimeout(function(){
            dropDown_Menu.classList.remove("dp-menu-off");
            dropDown_Menu.classList.add("hide");
        }, 0200);
    }
});

window.addEventListener("click", function(e){

    if((e.target !== dropDown_profile) && (e.target !== dropDown_profile.children[0].children[0]) && (e.target !== dropDown_profile.children[1]) && (e.target !== dropDown_profile.children[2].children[0].children[0]) && (e.target !== dropDown_profile.children[2].children[0]) && (e.target !== dropDown_profile.children[0]) && (e.target !== dropDown_profile.children[1]) && (e.target !== dropDown_profile.children[2]))
    {
        dropDown_profile.classList.remove("profile-active");
        dropDown_profile.classList.add("profile-nonactive");

        dropDown_Menu.classList.remove("dp-menu-on");
        dropDown_Menu.classList.add("dp-menu-off");
        setTimeout(function(){
            dropDown_Menu.classList.remove("dp-menu-off");
            dropDown_Menu.classList.add("hide");
        }, 0200);
    }
});

