const inputsearch = document.getElementById("searchbox");
const dropdown = inputsearch.parentElement.querySelector(".dp-searchbox");
const empty = dropdown.querySelector("box-emptysearch");
const formatPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' });


const mainurl = ipaddress;

function createList(productcode, productname, price, directory, image) {
    //create element
    const list_searchbox = document.createElement("div");
    const img_list = document.createElement("div");
    const search_detail = document.createElement("div");
    const label = document.createElement("label");
    const p = document.createElement("p");
    const lbl = document.createTextNode(productname);
    const parg = document.createTextNode(formatNum.format(price));

    //set attribute
    list_searchbox.classList.add("list-searchbox");
    list_searchbox.setAttribute("data-productcode", productcode);
    list_searchbox.setAttribute("data-productname", productname);
    list_searchbox.setAttribute("data-price", price);

    img_list.classList.add("img-list");
    img_list.setAttribute("style", "background-image: url(" + ipaddress + "'/img/product_images/" + directory + "/" + image + "')");

    search_detail.classList.add("box", "fl-colm", "search-detail");

    label.classList.add("srch-label");
    p.classList.add("srch-p");


    //install element
    list_searchbox.appendChild(img_list);
    list_searchbox.appendChild(search_detail);
    search_detail.appendChild(label);
    search_detail.appendChild(p);

    label.appendChild(lbl);
    p.appendChild(parg);

    dropdown.appendChild(list_searchbox);
}

inputsearch.addEventListener("keyup", () => {
    if (inputsearch.value == '') {
        dropdown.innerHTML = "<div class='box-emptysearch'><p class='color-disabled font-weg-500 mrgn-clear font-14px'>Type something in the search menu.</p><div class='i-editFill'></div></div>";
    }else{
        dropdown.innerHTML = "<div class='list-searchbox dummy'><div class='img-list'></div><div class='box fl-colm search-detail'><label class='srch-label'></label><p class='srch-p'></p></div></div><div class='list-searchbox dummy'><div class='img-list'></div><div class='box fl-colm search-detail'><label class='srch-label'></label><p class='srch-p'></p></div></div><div class='list-searchbox dummy'><div class='img-list'></div><div class='box fl-colm search-detail'><label class='srch-label'></label><p class='srch-p'></p></div></div><div class='list-searchbox dummy'><div class='img-list'></div><div class='box fl-colm search-detail'><label class='srch-label'></label><p class='srch-p'></p></div></div>";
        $.ajax({
            url: mainurl + "/cashier/livesearchmenu",
            method: "post",
            data: { id: inputsearch.value },
            dataType: "json",
            success: function (response) {
                dropdown.innerHTML = '';
                if (response.length == 0) {
                    dropdown.innerHTML = "<div class='box-emptysearch'><p class='color-disabled font-weg-500 mrgn-clear font-14px'>No result for this keyword.</p><div class='i-editFill'></div></div>";
                } else {
                    for (let x = 0; x < response.length; x++) {
                        createList(response[x]['product_code'], response[x]['product_name'], response[x]['price'], response[x]['directory'], response[x]['image']);
                    }
                }
            }
        });
    }
});