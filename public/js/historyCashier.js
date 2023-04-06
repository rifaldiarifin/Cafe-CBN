const iconApp = document.getElementById("btnPaymentNavigation1").querySelector(".icon-app");
function clearNotifTransaction(id){
    $.ajax({
        url: ipaddress + "/cashier/clearnotifunread",
        method: "post",
        data: { id : id },
        success: function (response) {
            iconApp.classList.add("hide");
            iconApp.setAttribute("data-app", "0");
        }
    });
}