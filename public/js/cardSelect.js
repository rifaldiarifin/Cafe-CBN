const barPayDetail = document.getElementById("barPayDetail");
const total_rows = document.querySelector("input[type = 'hidden'][name = 'total_rows']");
const input_group = barPayDetail.querySelector("#inputgroup1");

const cardS = document.querySelectorAll(".card-list-img");

let total_row = 0;

function createItem(ordervalue, pricevalue){
    //create element
    const list_row_default = document.createElement("div");

    const ordername = document.createElement("input");
    const price = document.createElement("input");
    const amount = document.createElement("input");

    const btn_icon = document.createElement("div");
    const i_trash = document.createElement("div");
    
    const list_detail = document.createElement("div");
    const label = document.createElement("label");
    const p = document.createElement("p");

    const btn_number = document.createElement('div');
    
    const upBtn = document.createElement("span");
    const i_subtract = document.createElement("div");
    const pvalue = document.createElement("p");
    const downBtn = document.createElement("span");
    const i_plus = document.createElement("div");

    const odr = document.createTextNode(ordervalue);
    const prc = document.createTextNode(pricevalue);
    const amn = document.createTextNode('1');
    
    //set attribute
    list_row_default.classList.add("list-row-default");

    ordername.setAttribute("type", "hidden");
    ordername.setAttribute("name", "order_0" + total_row);
    ordername.setAttribute("value", ordervalue);

    price.setAttribute("type", "hidden");
    price.setAttribute("name", "price_" + total_row);
    price.setAttribute("value", pricevalue);

    amount.setAttribute("type", "hidden");
    amount.setAttribute("name", "amount_0");
    amount.setAttribute("value", "1");

    btn_icon.classList.add("btn-icon");
    i_trash.classList.add("i-trash");

    list_detail.classList.add("box", "fl-rows", "fl-1", "list-detail");

    btn_number.classList.add("btn-number");
    upBtn.classList.add("upBtn");
    i_subtract.classList.add("i-subtract");
    
    downBtn.classList.add("downBtn");
    i_plus.classList.add("i-plus");

    label.appendChild(odr);
    price.appendChild(prc);
    amount.appendChild(amn);

    //install element to element
    btn_icon.appendChild(i_trash);
    list_detail.appendChild(label);
    list_detail.appendChild(p);
    upBtn.appendChild(i_subtract);
    downBtn.appendChild(i_plus);
    btn_number.appendChild(upBtn);
    btn_number.appendChild(pvalue);
    btn_number.appendChild(downBtn);

    list_row_default.appendChild(btn_icon);
    list_row_default.appendChild(list_detail);
    list_row_default.appendChild(btn_number);

    input_group.appendChild(list_row_default);
}

for (let x = 0; x < cardS.length; x++) {
    const cardIdent = document.querySelectorAll('[ data-productcode = "' + cardS[x].dataset['productcode'] + '"]');
    cardS[x].addEventListener("click", function () {
        for (let y = 0; y < cardIdent.length; y++) {
            cardIdent[y].classList.toggle("card-active");
            // console.log('123');
        }
    });
}