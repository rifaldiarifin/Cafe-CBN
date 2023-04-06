const parrent_box1 = document.getElementById("multifield");
const act_bx = document.getElementById("act-box");
const btn = document.getElementById("btnadd-field");
const btnremove = document.getElementById("btnremove-field");
const imgbox = document.getElementById("img-box-field");
const endb = document.getElementById("endb");
const amountinput = document.getElementById("amount_content");

let add_limit = 1;

if(amountinput.dataset['content'] > 1) {
    add_limit = amountinput.dataset['content'];
    setTimeout(function () {
        btnremove.style.display = "flex";
        btnremove.classList.add("scaling-object");
    }, 0300);
    setTimeout(function () {
        btnremove.classList.remove("scaling-object");
    }, 0500);
}

var limit_value = 8;

btn.addEventListener("click", function () {
    //check length
    const num_set = parrent_box1.querySelectorAll(".tf-default").length;
    const alert_check = parrent_box1.querySelectorAll(".red-alert-text").length;
    if (add_limit < limit_value) {
        //new element
        const new_tf = document.createElement("div");
        const new_p = document.createElement("p");

        const new_boxf = document.createElement("div");
        const new_ipt = document.createElement("input");
        const new_ph = document.createElement("span");

        const num_p = document.createTextNode(num_set + 1);
        const plc = document.createTextNode("Content");

        //setting the element
        new_tf.setAttribute("class", "tf-default scaling-object");

        new_boxf.setAttribute("class", "box-field");
        new_ipt.setAttribute("type", "text");
        new_ipt.setAttribute("maxlength", "15");
        new_ipt.setAttribute("name", "content_" + (add_limit + 1));
        new_ipt.setAttribute("autocomplete", "off");
        new_ipt.setAttribute("required", "true");
        new_ph.appendChild(plc);

        //combine the element
        new_boxf.appendChild(new_ipt);
        new_boxf.appendChild(new_ph);

        new_p.appendChild(num_p);
        new_tf.appendChild(new_p);
        new_tf.appendChild(new_boxf);

        //last

        amountinput.value = add_limit + 1;
        parrent_box1.insertBefore(new_tf, act_bx);
        imgbox.classList.add("btnfield-transform");
        endb.classList.add("btnfield-transform");
        setTimeout(function () {
            new_tf.classList.remove("scaling-object");
            imgbox.classList.remove("btnfield-transform");
            endb.classList.remove("btnfield-transform");
        }, 0300);

    } else if (alert_check == 0) {
        //if has reached limit
        const alert_p = document.createElement("p");
        const alert_text = document.createTextNode("has reached the limit");

        alert_p.appendChild(alert_text);
        alert_p.setAttribute("class", "red-alert-text");

        parrent_box1.appendChild(alert_p);

        const alert_del = parrent_box1.querySelector(".red-alert-text");
        setTimeout(function () {
            parrent_box1.removeChild(alert_del);
        }, 5000);
    }

    if (add_limit < limit_value) {
        btn.classList.add("btnfield-transform");
        btnremove.classList.add("btnfield-transform");
        setTimeout(function () {
            btn.classList.remove("btnfield-transform");
            btnremove.classList.remove("btnfield-transform");
        }, 0300);
    }

    add_limit++;

    if (add_limit == 8) {
        btn.classList.add("scaling-object-out");
        btnremove.classList.add("btnfield-transform3");
        setTimeout(function () {
            btn.style.display = "none";
            btnremove.classList.remove("btnfield-transform3");
            btn.classList.remove("scaling-object-out");
        }, 0500);
    }

    if (num_set == 1) {
        setTimeout(function () {
            btnremove.style.display = "flex";
            btnremove.classList.add("scaling-object");
        }, 0300);
        setTimeout(function () {
            btnremove.classList.remove("scaling-object");
        }, 0500);
    }


});

btnremove.addEventListener("click", function () {
    const num_tf = parrent_box1.querySelectorAll(".tf-default").length;
    if (num_tf > 1) {
        const tf_def = parrent_box1.querySelector(".tf-default:nth-child(" + num_tf + ")");
        tf_def.classList.add("scaling-object-out");
        imgbox.classList.add("btnfield-transform4");
        endb.classList.add("btnfield-transform4");
        setTimeout(function () {
            parrent_box1.removeChild(tf_def);
            imgbox.classList.remove("btnfield-transform4");
            endb.classList.remove("btnfield-transform4");
        }, 0300);
        btn.classList.add("btnfield-transform4");
        btnremove.classList.add("btnfield-transform4");
        setTimeout(function () {
            btn.classList.remove("btnfield-transform4");
            btnremove.classList.remove("btnfield-transform4");
        }, 0300);
        amountinput.value = add_limit - 1;
        add_limit--;
    }

    if (num_tf == 2) {
        btnremove.classList.add("scaling-object-out");
        setTimeout(function () {
            btnremove.style.display = "none";
            btnremove.classList.remove("scaling-object-out");
        }, 0600);
    }

    if (add_limit == 7) {
        btnremove.classList.add("btnfield-transform2");
        btn.style.display = "flex";
        btn.classList.add("scaling-object");
        setTimeout(function () {
            btnremove.classList.remove("btnfield-transform2");
            btn.classList.remove("scaling-object");
        }, 0300);
    }
});