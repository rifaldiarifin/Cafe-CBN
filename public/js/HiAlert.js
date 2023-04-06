const hialert = document.querySelector(".box-hialert");
const hialert_button = hialert.querySelector(".button");

const hialert_label = hialert.querySelector("label");
const hialert_parag = hialert.querySelector("p");

const Baseurl = ipaddress;

function HiConfirm(title = 'HiAlert', message = 'Type your message here!', url, value = null) {
    hialert_label.innerHTML = title;
    hialert_parag.innerHTML = message;
    let hialert_toUrl = url;

    const id = value;

    hialert.classList.remove("hide");
    hialert.classList.add("dsp-grid");
    hialert.classList.add("alert-show");
    setTimeout(() => {
        hialert.classList.remove("alert-show");
    }, 0500);

    hialert_button.addEventListener("click", (e) => {
        if (e.target.className == "button primary") {
            location.href = Baseurl + hialert_toUrl;
        } else if (e.target.className == "button secondary") {
            //-----------
            hialert_label.clear();
            hialert_parag.clear();
            hialert_toUrl.clear();
        }
    });
}

function alertHideConfirm() {
    hialert.classList.add("alert-hide");

    setTimeout(() => {
        hialert.classList.remove("dsp-grid");
        hialert.classList.add("hide");
        hialert.classList.remove("alert-hide");
    }, 0500);
}

const hiprompt = document.querySelector(".box-hiprompt");
const hiprompt_field1 = hiprompt.querySelector(".field1");
const hiprompt_button = hiprompt.querySelector(".button");

const hiprompt_label = hiprompt.querySelector("label");
const hiprompt_parag = hiprompt.querySelector("p");

const hiprompt_id = "1";

const Baseurl2 = ipaddress;

function HiPrompt(title = 'HiPrompt', message = 'Type your description here!', url, somefunction) {
    hiprompt_label.innerHTML = title;
    hiprompt_parag.innerHTML = message;

    const hiprompt_toUrl = url;
    let stat = false;

    hiprompt.classList.remove("hide");
    hiprompt.classList.add("dsp-grid");
    hiprompt.classList.add("alert-show");
    setTimeout(() => {
        hiprompt.classList.remove("alert-show");
    }, 0500);


    hiprompt_button.addEventListener("click", (e) => {
        if (e.target.className == "button submit") {
            $.ajax({
                url: Baseurl + hiprompt_toUrl,
                data: {
                    id: hiprompt_field1.value
                },
                method: 'post',
                dataType: 'json',
                success: function (data) {
                    if (data !== false) {
                        const elmn1 = document.getElementById('personalinfo').children[2];
                        const elmn2 = document.getElementById('personalinfo').children[3];

                        $('#user_prof').html(data.username);
                        $('#pass_prof').html(".......");
                        $('#email_prof').html(data.email);
                        $('#phone_prof').html(data.phone);
                        $('#birth_prof').html(data.birth);
                        $('#location_prof').html(data.address);

                        // console.log(this.previousElementSibling);
                        elmn1.removeAttribute("style");
                        elmn2.removeAttribute("style");
                        $('#personalinfo .dp-btn.key-option.lock').remove();
                        alertHidePrompt();
                    } else {
                        hiprompt_field1.value = "";
                        return false;
                    }
                }
            });
        } else if (e.target.className == "close") {
            hiprompt_field1.value = "";
            return false;
        }
    });
}

function alertHidePrompt() {
    hiprompt.classList.add("alert-hide");

    setTimeout(() => {
        hiprompt.classList.remove("dsp-grid");
        hiprompt.classList.add("hide");
        hiprompt.classList.remove("alert-hide");
    }, 0500);
}