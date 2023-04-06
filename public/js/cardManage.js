const barPayDetail = document.getElementById("barPayDetail");
const total_rows = document.querySelector("input[type = 'hidden'][name = 'total_rows']");
const total_bills = barPayDetail.querySelector("input[name = 'total_bill']");
const input_group = barPayDetail.querySelector("#inputgroup1");
const detail_group = barPayDetail.querySelector("#inputgroup2");
const subtotal = detail_group.querySelectorAll('p')[0];
const total = detail_group.querySelectorAll('p')[1];
const emptybox = barPayDetail.querySelector(".empty-box");
const btn_pay = detail_group.querySelector('button[type="submit"]');

const searchInput = document.getElementById("searchbox");
const searchclear = searchInput.nextElementSibling;
const dp_searchbox = searchInput.nextElementSibling.nextElementSibling;
const box_empty = dp_searchbox.querySelector(".box-emptysearch");

const cardS = document.querySelectorAll(".card-list-img");


const formatNum = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });

let total_row = 0;

function emptysearch(){
    //create element
    const box_emptysearch = document.createElement("div");
    const p = document.createElement("p");
    const i_editfill = document.createElement("div");
    const ptext = document.createTextNode("Type something in the search menu.");

    //set attribute
    box_emptysearch.classList.add("box-emptysearch");
    p.classList.add("color-disabled", "font-weg-500", "mrgn-clear", "font-14px");
    i_editfill.classList.add("i-editFill");

    //install element
    box_emptysearch.appendChild(p);
    box_emptysearch.appendChild(i_editfill);
    p.appendChild(ptext);
    dp_searchbox.appendChild(box_emptysearch);
}

function renameGroup() {
    let formgroup = document.querySelectorAll(".list-row-default");
    for (let q = 0; q < formgroup.length; q++) {
        let input1 = formgroup[q].querySelectorAll('input[type="hidden"]')[0];
        let input2 = formgroup[q].querySelectorAll('input[type="hidden"]')[1];
        let input3 = formgroup[q].querySelectorAll('input[type="hidden"]')[2];
        let input4 = formgroup[q].querySelectorAll('input[type="hidden"]')[3];
        input1.setAttribute("name", "order_" + (q + 1));
        input2.setAttribute("name", "price_" + (q + 1));
        input3.setAttribute("name", "amount_" + (q + 1));
        input4.setAttribute("name", "prodcode_" + (q + 1));
    }
}

function toggleCard(elmnt, dataname, option = 'toggle') {
    const cardIdent = document.querySelectorAll('.card-list-img[ data-' + dataname + ' = "' + elmnt.dataset[dataname] + '"]');
    if (option == 'create') {
        for (let y = 0; y < cardIdent.length; y++) {
            cardIdent[y].classList.add("card-active");
        }
    } else if (option == 'remove') {
        for (let y = 0; y < cardIdent.length; y++) {
            cardIdent[y].classList.remove("card-active");
        }
    } else if (option == 'toggle') {
        for (let y = 0; y < cardIdent.length; y++) {
            cardIdent[y].classList.toggle("card-active");
        }
    }
}

function toggleCart(productcode = null, ordervalue = null, pricevalue = null, dataname = null, elmnt = null, option) {
    if (option == 'create') {
        createItem(productcode, ordervalue, pricevalue);
        total_row++;
        toggleEmptyBox();
        sumTotal();
    } else if (option == 'remove') {

        const cartList = input_group.querySelector('.list-row-default[ data-' + dataname + ' = "' + elmnt.dataset[dataname] + '"]');
        cartList.classList.add("scaling-object-out");
        let num0 = cartList.nextElementSibling;
        let num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        setTimeout(() => {
            if (num0 !== null) {
                num[1] = num0.nextElementSibling;
                num0.classList.add('list-down');
                setTimeout(() => {
                    num0.classList.remove("list-down");
                }, 0250);

                if (num[1] !== null) {
                    num[2] = num[1].nextElementSibling;
                    num[1].classList.add('list-down');
                    setTimeout(() => {
                        num[1].classList.remove("list-down");
                    }, 0250);
                    if (num[2] !== null) {
                        num[3] = num[2].nextElementSibling;
                        num[2].classList.add('list-down');
                        setTimeout(() => {
                            num[2].classList.remove("list-down");
                        }, 0250);
                        if (num[3] !== null) {
                            num[4] = num[3].nextElementSibling;
                            num[3].classList.add('list-down');
                            setTimeout(() => {
                                num[3].classList.remove("list-down");
                            }, 0250);
                            if (num[4] !== null) {
                                num[5] = num[4].nextElementSibling;
                                num[4].classList.add('list-down');

                                setTimeout(() => {
                                    num[4].classList.remove("list-down");
                                }, 0250);
                                if (num[5] !== null) {
                                    num[6] = num[5].nextElementSibling;
                                    num[5].classList.add('list-down');
                                    setTimeout(() => {
                                        num[5].classList.remove("list-down");
                                    }, 0250);
                                    if (num[6] !== null) {
                                        num[7] = num[6].nextElementSibling;
                                        num[6].classList.add('list-down');
                                        setTimeout(() => {
                                            num[6].classList.remove("list-down");
                                        }, 0250);
                                        if (num[7] !== null) {
                                            num[8] = num[7].nextElementSibling;
                                            num[7].classList.add('list-down');
                                            setTimeout(() => {
                                                num[7].classList.remove("list-down");
                                            }, 0250);
                                            if (num[8] !== null) {
                                                num[9] = num[8].nextElementSibling;
                                                num[8].classList.add('list-down');
                                                setTimeout(() => {
                                                    num[8].classList.remove("list-down");
                                                }, 0250);
                                                if (num[9] !== null) {
                                                    num[10] = num[9].nextElementSibling;
                                                    num[9].classList.add('list-down');
                                                    setTimeout(() => {
                                                        num[9].classList.remove("list-down");
                                                    }, 0250);
                                                    if (num[10] !== null) {
                                                        num[10].classList.add('list-down');
                                                        setTimeout(() => {
                                                            num[10].classList.remove("list-down");
                                                        }, 0250);

                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            input_group.removeChild(cartList);
        }, 0200);
        total_row--;
    }
    setTimeout(() => {
        renameGroup();
        toggleEmptyBox();
        sumTotal();
    }, 0200);
    total_rows.value = total_row;
}

function createItem(productcode, ordervalue, pricevalue) {
    //create element
    const list_row_default = document.createElement("div");

    const ordername = document.createElement("input");
    const price = document.createElement("input");
    const amount = document.createElement("input");
    const code = document.createElement("input");

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
    const prc = document.createTextNode(formatNum.format(pricevalue));
    const amn = document.createTextNode('1');

    //set attribute
    list_row_default.classList.add("list-row-default", "scaling-object");
    list_row_default.setAttribute("data-productcode", productcode)
    list_row_default.setAttribute("data-price", pricevalue);

    ordername.setAttribute("type", "hidden");
    ordername.setAttribute("name", "null");
    ordername.setAttribute("value", ordervalue);

    price.setAttribute("type", "hidden");
    price.setAttribute("name", "null");
    price.setAttribute("value", pricevalue);

    amount.setAttribute("type", "hidden");
    amount.setAttribute("name", "null");
    amount.setAttribute("value", "1");

    code.setAttribute("type", "hidden");
    code.setAttribute("name", "null");
    code.setAttribute("value", productcode);

    btn_icon.classList.add("btn-icon");
    i_trash.classList.add("i-trash");

    list_detail.classList.add("list-detail", "fl-1");

    btn_number.classList.add("btn-number");
    upBtn.classList.add("upBtn");
    i_subtract.classList.add("i-subtract");

    downBtn.classList.add("downBtn");
    i_plus.classList.add("i-plus");
    pvalue.setAttribute("data-amount", "1");

    label.appendChild(odr);
    p.appendChild(prc);

    //install element to element
    btn_icon.appendChild(i_trash);
    list_detail.appendChild(label);
    list_detail.appendChild(p);
    downBtn.appendChild(i_subtract);
    upBtn.appendChild(i_plus);
    btn_number.appendChild(downBtn);
    btn_number.appendChild(pvalue);
    btn_number.appendChild(upBtn);

    list_row_default.appendChild(ordername);
    list_row_default.appendChild(price);
    list_row_default.appendChild(amount);
    list_row_default.appendChild(code);

    list_row_default.appendChild(btn_icon);
    list_row_default.appendChild(list_detail);
    list_row_default.appendChild(btn_number);

    input_group.appendChild(list_row_default);

    setTimeout(function () {
        list_row_default.classList.remove("scaling-object");
    }, 0400);
}

function toggleEmptyBox() {
    const listRows = input_group.querySelectorAll(".list-row-default");
    if (listRows.length < 1) {
        emptybox.classList.add('nonactive');
        detail_group.classList.add('nonactive');
        btn_pay.classList.add('nonactive');
    } else if (listRows.length > 0) {
        emptybox.classList.remove('nonactive');
        detail_group.classList.remove('nonactive');
        btn_pay.classList.remove('nonactive');
    }
}

function sumTotal() {
    const listRows = input_group.querySelectorAll(".list-row-default");
    let total_price = [];
    let total_bill;
    for (let w = 0; w < listRows.length; w++) {
        const price = listRows[w].children[1].value;
        const pvalue = listRows[w].querySelector('.btn-number p').dataset['amount'];
        total_price.push((price * pvalue));
    }
    total_bill = total_price.reduce((a, b) => { return a + b }, 0);
    total_bills.value = total_bill;
    subtotal.innerHTML = formatNum.format(total_bill);
    total.innerHTML = formatNum.format(total_bill);
}

input_group.addEventListener("click", (e) => {
    if (e.target.className == "i-trash") {
        toggleCart(null, null, null, 'productcode', e.target.parentElement.parentElement, 'remove');
        toggleCard(e.target.parentElement.parentElement, 'productcode', 'remove');
    }

    if (e.target.className == "upBtn") {
        let upvalue = e.target.previousElementSibling.dataset['amount'];
        if (upvalue > 0) {
            e.target.previousElementSibling.dataset['amount']++;
            e.target.parentElement.parentElement.children[2].value++;
            toggleEmptyBox();
            sumTotal();
        }
    } else if (e.target.className == "i-plus") {
        let upvalue = e.target.parentElement.previousElementSibling.dataset['amount'];
        if (upvalue > 0) {
            e.target.parentElement.previousElementSibling.dataset['amount']++;
            e.target.parentElement.parentElement.parentElement.children[2].value++;
            toggleEmptyBox();
            sumTotal();
        }
    }

    if (e.target.className == "downBtn") {
        let downvalue = e.target.nextElementSibling.dataset['amount'];
        if (downvalue > 1) {
            e.target.nextElementSibling.dataset['amount']--;
            e.target.parentElement.parentElement.children[2].value--;
            amount
            toggleEmptyBox();
        }
    } else if (e.target.className == "i-subtract") {
        let downvalue = e.target.parentElement.nextElementSibling.dataset['amount'];
        if (downvalue > 1) {
            e.target.parentElement.nextElementSibling.dataset['amount']--;
            e.target.parentElement.parentElement.parentElement.children[2].value--;
            setTimeout(() => {
                sumTotal();
            }, 0200);
        }
    }
});



for (let x = 0; x < cardS.length; x++) {
    cardS[x].addEventListener("click", function () {
        if (cardS[x].classList.contains("card-active") == true) {
            toggleCard(cardS[x], 'productcode', 'remove');
            toggleCart(null, null, null, 'productcode', cardS[x], 'remove');
        } else {
            toggleCard(cardS[x], 'productcode', 'create');
            toggleCart(cardS[x].dataset['productcode'], cardS[x].dataset['productname'], cardS[x].dataset['price'], null, null, 'create');
        }
    });
}

let cardL = document.querySelectorAll(".list-searchbox");


searchclear.addEventListener("click", () => {
    searchInput.value = '';
    searchInput.focus();
}); 

searchInput.addEventListener("focus", () => {
    if (dp_searchbox.classList.contains('nonactive')) {
        dp_searchbox.classList.remove("nonactive");
        dp_searchbox.classList.add("scale-in");
        setTimeout(() => {
            dp_searchbox.classList.remove("scale-in");
        }, 0400);
    }
});

searchInput.addEventListener("valid", () => {
    if (dp_searchbox.classList.contains('nonactive')) {
        dp_searchbox.classList.remove("nonactive");
        dp_searchbox.classList.add("scale-in");
        setTimeout(() => {
            dp_searchbox.classList.remove("scale-in");
        }, 0400);
    }
});

window.addEventListener("click", (e) => {
    if ((e.target.className !== 'list-searchbox') && (e.target.className !== 'img-list') && (e.target.className !== 'search-clear') && (e.target.className !== 'box fl-colm search-detail') && (e.target.className !== 'srch-p') && (e.target.className !== 'srch-label') && (e.target !== searchInput)) {
        if (searchInput.value == '') {
            dp_searchbox.classList.add("scale-out");
            setTimeout(() => {
                dp_searchbox.classList.remove("scale-out");
                dp_searchbox.classList.add("nonactive");
                dp_searchbox.innerHTML = '';
                emptysearch();
            }, 0400);
        }
    }
});

dp_searchbox.addEventListener("click", (e) => {
    if (e.target.classList.contains('list-searchbox')) {
        let listbox = e.target;
        let dataSet = [listbox.dataset['productcode'], listbox.dataset['productname'], listbox.dataset['price']];

        if (input_group.querySelector(".list-row-default[data-productcode = '" + dataSet[0] + "']") == null) {
            toggleCard(listbox, 'productcode', 'create');
            toggleCart(dataSet[0], dataSet[1], dataSet[2], null, null, 'create');
        } else {
            toggleCard(listbox, 'productcode', 'remove');
            toggleCart(null, null, null, 'productcode', listbox, 'remove');
        }
    } else if (e.target.classList.contains('img-list')) {
        let listbox = e.target.parentElement;
        let dataSet = [listbox.dataset['productcode'], listbox.dataset['productname'], listbox.dataset['price']];

        if (input_group.querySelector(".list-row-default[data-productcode = '" + dataSet[0] + "']") == null) {
            toggleCard(listbox, 'productcode', 'create');
            toggleCart(dataSet[0], dataSet[1], dataSet[2], null, null, 'create');
        } else {
            toggleCard(listbox, 'productcode', 'remove');
            toggleCart(null, null, null, 'productcode', listbox, 'remove');
        }

    } else if (e.target.classList.contains('box')) {
        let listbox = e.target.parentElement;
        let dataSet = [listbox.dataset['productcode'], listbox.dataset['productname'], listbox.dataset['price']];

        if (input_group.querySelector(".list-row-default[data-productcode = '" + dataSet[0] + "']") == null) {
            toggleCard(listbox, 'productcode', 'create');
            toggleCart(dataSet[0], dataSet[1], dataSet[2], null, null, 'create');
        } else {
            toggleCard(listbox, 'productcode', 'remove');
            toggleCart(null, null, null, 'productcode', listbox, 'remove');
        }

    } else if ((e.target.className == 'srch-label') || (e.target.className == 'srch-p')) {
        let listbox = e.target.parentElement.parentElement;
        let dataSet = [listbox.dataset['productcode'], listbox.dataset['productname'], listbox.dataset['price']];

        if (input_group.querySelector(".list-row-default[data-productcode = '" + dataSet[0] + "']") == null) {
            toggleCard(listbox, 'productcode', 'create');
            toggleCart(dataSet[0], dataSet[1], dataSet[2], null, null, 'create');
        } else {
            toggleCard(listbox, 'productcode', 'remove');
            toggleCart(null, null, null, 'productcode', listbox, 'remove');
        }
    }
});