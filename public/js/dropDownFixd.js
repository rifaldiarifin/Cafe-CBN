const btnSettingsNavigation1 = document.getElementById("btnSettingNavigation1");
const btnSettingsNavigation2 = document.getElementById("btnSettingNavigation2");

const btnPaymentNavigation1 = document.getElementById("btnPaymentNavigation1");
const btnPaymentNavigation2 = document.getElementById("btnPaymentNavigation2");


const Settings = document.querySelector(".box-settings");
const Payment = document.querySelector(".box-tab-fixd.history");

btnSettingsNavigation1.addEventListener("click", function(){
    if(btnSettingsNavigation1.classList.contains("nonactive")){
        btnSettingsNavigation1.classList.remove("nonactive");
        btnSettingsNavigation2.classList.remove("nonactive");

        btnSettingsNavigation1.classList.add("active");
        btnSettingsNavigation2.classList.add("active");

        Settings.classList.remove("hide");
        Settings.classList.add("dsp-block");
        Settings.classList.add("scale-in");
        setTimeout(() => {
            Settings.classList.remove("scale-in");
        }, 0500);
    }
});

btnSettingsNavigation2.addEventListener("click", function(){
    if(btnSettingsNavigation2.classList.contains("active")){
        btnSettingsNavigation2.classList.remove("active");
        btnSettingsNavigation2.classList.add("nonactive");

        btnSettingsNavigation1.classList.remove("active");
        btnSettingsNavigation1.classList.add("nonactive");

        Settings.classList.add("scale-out");

        setTimeout(() => {
            Settings.classList.remove("dsp-block");
            Settings.classList.add("hide");
            Settings.classList.remove("scale-out");
        }, 0500);
    }
});

btnPaymentNavigation1.addEventListener("click", function(){
    if(btnPaymentNavigation1.classList.contains("nonactive")){
        btnPaymentNavigation1.classList.remove("nonactive");
        btnPaymentNavigation2.classList.remove("nonactive");

        btnPaymentNavigation1.classList.add("active");
        btnPaymentNavigation2.classList.add("active");

        Payment.classList.remove("hide");
        Payment.classList.add("dsp-block");
        Payment.classList.add("scale-in");
        setTimeout(() => {
            Payment.classList.remove("scale-in");
        }, 0500);
    }
});

btnPaymentNavigation2.addEventListener("click", function(){
    if(btnPaymentNavigation2.classList.contains("active")){
        btnPaymentNavigation2.classList.remove("active");
        btnPaymentNavigation2.classList.add("nonactive");

        btnPaymentNavigation1.classList.remove("active");
        btnPaymentNavigation1.classList.add("nonactive");

        Payment.classList.add("scale-out");

        setTimeout(() => {
            Payment.classList.remove("dsp-block");
            Payment.classList.add("hide");
            Payment.classList.remove("scale-out");
        }, 0500);
    }
});