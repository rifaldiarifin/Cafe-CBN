const box = document.querySelectorAll(".box-log");

for(let i = 0; i < box.length; i++){
    box[i].addEventListener("click", function(){
        if(box[i].classList.contains("box-log-nonactive")){
            box[i].classList.remove("box-log-nonactive");
            box[i].classList.add("box-log-active");
            box[i].querySelector(".content-box-2-5 .content-box-2-5 label").innerHTML = "Click to Expand"

            // for(let x = 0; x < box[i].querySelectorAll(".list-log").length; x++){
            //     // box[i].querySelectorAll(".list-log")[x].classList.add("element-text-scale");

            //     setTimeout(function(){
            //         box[i].querySelectorAll(".list-log")[x].classList.add("element-text-scale");
            //     }, 0600);
            // }
        }
        else if(box[i].classList.contains("box-log-active")){
            box[i].classList.remove("box-log-active");
            box[i].classList.add("box-log-nonactive");

            box[i].querySelector(".content-box-2-5 .content-box-2-5 label").innerHTML = "Click to Collapse"
        }
    });
}