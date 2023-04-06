const usefilter = document.getElementById("usefilter");
const toElmnt = document.querySelector("#dropdown-sprof");

const datainput = toElmnt.querySelector(".input-select");

const avatar = toElmnt.querySelector(".avatar-input");
const label = toElmnt.querySelector(".name-input");

const day = document.querySelector("#day").parentElement;
const month = document.querySelector("#month").parentElement;
const year = document.querySelector("#year").parentElement;

const tableparent = document.querySelector("#table-parent");
const tableago = document.querySelector("#table-ago");
const tablebody = document.querySelector("#table-body");

function setValueEmp(personalID, name, image) {
    datainput.setAttribute('data-personalid', personalID);
    avatar.setAttribute("style", "background-image: url(" + ipaddress + "'coffeecbn2/public/img/avatar/" + image + "')");
    label.innerHTML = name;
}

function setValueDate(field, to, data) {
    const toElmnt = document.querySelector(to);
    toElmnt.value = field;
    toElmnt.parentElement.setAttribute("data-" + data, field);
}

function createListTable(text1, text2, text3, text4, text5, text6, text7, text8) {
    const tr = document.createElement("tr");

    const td1 = document.createElement("td");
    const td2 = document.createElement("td");
    const td3 = document.createElement("td");
    const td4 = document.createElement("td");
    const td5 = document.createElement("td");
    const td6 = document.createElement("td");
    const td7 = document.createElement("td");
    const td8 = document.createElement("td");

    const tdtext1 = document.createTextNode(text1);
    const tdtext2 = document.createTextNode(text2);
    const tdtext3 = document.createTextNode(text3);
    const tdtext4 = document.createTextNode(text4);
    const tdtext5 = document.createTextNode(text5);
    const tdtext6 = document.createTextNode(text6);
    const tdtext7 = document.createTextNode(text7);
    const tdtext8 = document.createTextNode(text8);


    td8.innerHTML = text8;
    td7.innerHTML = text7;
    td6.innerHTML = text6;
    td5.innerHTML = text5;
    td4.innerHTML = text4;
    td3.innerHTML = text3;
    td2.innerHTML = text2;
    td1.innerHTML = text1;

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(td5);
    tr.appendChild(td6);
    tr.appendChild(td7);
    tr.appendChild(td8);

    tablebody.appendChild(tr);
}

let statustable = false;

usefilter.addEventListener("click", (e) => {
    if (tableago) {
        tableparent.removeChild(tableago);
        statustable = true;
    }
    tableparent.children[0].children[0].innerHTML = 'Wait a second...';
    tablebody.innerHTML = "<tr class='dummy'><td><span>-------------------</span></td><td><span>-----------------</span></td><td><span>---------------------</span></td><td><span>--------</span></td><td><span>--------</span></td><td><span>------------</span></td><td><span>--------</span></td><td><span>----------</span></td></tr><tr class='dummy'><td><span>-------------------</span></td><td><span>-----------------</span></td><td><span>---------------------</span></td><td><span>--------</span></td><td><span>--------</span></td><td><span>------------</span></td><td><span>--------</span></td><td><span>----------</span></td></tr><tr class='dummy'><td><span>-------------------</span></td><td><span>-----------------</span></td><td><span>---------------------</span></td><td><span>--------</span></td><td><span>--------</span></td><td><span>------------</span></td><td><span>--------</span></td><td><span>----------</span></td></tr><tr class='dummy'><td><span>-------------------</span></td><td><span>-----------------</span></td><td><span>---------------------</span></td><td><span>--------</span></td><td><span>--------</span></td><td><span>------------</span></td><td><span>--------</span></td><td><span>----------</span></td></tr>";
    $.ajax({
        url: ipaddress + "/manager/livesearchtransaction",
        method: "post",
        data: {
            personalid: datainput.dataset['personalid'],
            day: day.dataset['day'],
            month: month.dataset['month'],
            year: year.dataset['year']
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            tablebody.innerHTML = '';
            tableparent.children[0].children[0].innerHTML = 'Search result : ' + response.length + ' rows';
            if (response.length == 0) {
                tableparent.children[0].children[0].innerHTML = 'Empty result :(';
                tablebody.innerHTML = "<div class='box fl-colm'><span class='mY-dl-10'></span><p class='color-disabled font-weg-600 mrgn-clear font-16px'>No result with this filter.</p><span class='mY-dl-10'></span></div>";
            } else {
                for (let x = 0; x < response.length; x++) {
                    createListTable(response[x]['employee_name'], response[x]['no_order'], response[x]['ordered_items'].replace(/[,]/g, ',<br>'), response[x]['amount'].replace(/[,]/g, ',<br>'), response[x]['price'].replace(/[,]/g, ',<br>'), response[x]['date'], response[x]['time'], response[x]['total_bill']);
                }
            }

        }
    });
});