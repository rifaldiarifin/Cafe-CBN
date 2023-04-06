let categ1 = ["Filtering", "All"];
    let categ2 = ["Drinks", "Coffee"];
    let categ3 = ["Deserts", "Ice Cream"];

    const categ = document.getElementById("category_label");
    const sub = document.getElementById("subcategory_label");

    function setLabel(arrText, option = true) {
        if (arrText == "1") {
            let category = categ1[0];
            let subcategory = categ1[1];

            categ.innerHTML = category;
            sub.innerHTML = subcategory
        } else if (arrText == "2") {
            let category = categ2[0];
            let subcategory = categ2[1];

            categ.innerHTML = category;
            sub.innerHTML = subcategory
        } else if (arrText == "3") {
            let category = categ3[0];
            let subcategory = categ3[1];

            categ.innerHTML = category;
            sub.innerHTML = subcategory
        }

        if (option == true) {
            categ.classList.add("slideObject");
            sub.classList.add("slideObject");
            setTimeout(() => {
                categ.classList.remove("slideObject");
                sub.classList.remove("slideObject");
            }, 0300);
        }
    }

    function setSub(arrText1, arrText2, text1, text2) {
        if ((arrText1 == "1") && (arrText2 == "1")) {
            categ1[0] = text1;
            categ1[1] = text2;
            setLabel('1', false);
        } else if ((arrText1 == "1") && (arrText2 == "2")) {
            categ1[0] = text1;
            categ1[1] = text2;
            setLabel('1', false);
        } else if ((arrText1 == "1") && (arrText2 == "3")) {
            categ1[0] = text1;
            categ1[1] = text2;
            setLabel('1', false);
        } else if ((arrText1 == "1") && (arrText2 == "4")) {
            categ1[0] = text1;
            categ1[1] = text2;
            setLabel('1', false);
        } else if ((arrText1 == "1") && (arrText2 == "5")) {
            categ1[0] = text1;
            categ1[1] = text2;
            setLabel('1', false);
        } else if ((arrText1 == "2") && (arrText2 == "1")) {
            categ2[0] = text1;
            categ2[1] = text2;
            setLabel('2', false);
        } else if ((arrText1 == "2") && (arrText2 == "2")) {
            categ2[0] = text1;
            categ2[1] = text2;
            setLabel('2', false);
        } else if ((arrText1 == "3") && (arrText2 == "1")) {
            categ3[0] = text1;
            categ3[1] = text2;
            setLabel('3', false);
        } else if ((arrText1 == "3") && (arrText2 == "2")) {
            categ3[0] = text1;
            categ3[1] = text2;
            setLabel('3', false);
        } else if ((arrText1 == "3") && (arrText2 == "3")) {
            categ3[0] = text1;
            categ3[1] = text2;
            setLabel('3', false);
        } else if ((arrText1 == "3") && (arrText2 == "4")) {
            categ3[0] = text1;
            categ3[1] = text2;
            setLabel('3', false);
        }
        sub.classList.add("slideObject");
        setTimeout(() => {
            sub.classList.remove("slideObject");
        }, 0300);
    }

    function openProfile(idelmnt){
        const btnprof = document.getElementById("btnSettingNavigation1");
        const btnlock = document.querySelector(".lock");
        btnprof.click();
        setTimeout(() => {
            btnlock.click();
        }, 0200);
    }