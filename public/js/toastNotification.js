const tNotif = document.querySelectorAll(".toast-list .i-xmark");
const box_toast = document.querySelector(".box-toast-notif");
for (let x = 0; x < tNotif.length; x++) {
    const close = tNotif[x];
    const progress = tNotif[x].nextElementSibling;
    
    setTimeout(() => {
        close.parentElement.classList.remove("active");
        close.parentElement.classList.add("nonactive");
    }, 5000);

    setTimeout(() => {
        progress.classList.remove("active");
        progress.classList.remove("nonactive");
    }, 5300);

    setTimeout(() => {
        close.parentElement.parentElement.removeChild(close.parentElement);
    }, 6000);

    box_toast.addEventListener("click", (e) => {
        if (e.target == close) {
            const hegboxtoast = box_toast.clientHeight;
            const hegtoast = e.target.parentElement.clientHeight;
            e.target.parentElement.classList.remove("active");
            e.target.parentElement.classList.add("nonactive");

            setTimeout(() => {
                progress.classList.remove("active");
                progress.classList.add("nonactive");
            }, 300);

            setTimeout(() => {
                box_toast.setAttribute("style", "height:" + (hegboxtoast - (hegtoast + 20)) + "px;");
                e.target.parentElement.parentElement.removeChild(close.parentElement);
                clearTimeout;
            }, 400);
        }
    });

}