const htmlDoc = document.querySelector("html");
const bodyDoc = document.querySelector("body");
const containerDoc = bodyDoc.querySelector(".container");
const htmlData = htmlDoc.dataset['theme'];

const cardTheme = containerDoc.querySelectorAll(".cardgroup-theme");
const cardThemeSelection = containerDoc.querySelector(".cardgroup-theme.card-selection");

const cardAccentColor = containerDoc.querySelectorAll(".cardgroup-accentcolor");
const cardAccentColorSeletion = containerDoc.querySelector(".cardgroup-accentcolor.card-selection");
const animControl = document.getElementById("animationControl");


const appTheme = [];
const accentColor = [];
const accentColorCSS = [];
const animationTransitionCSS = [];

appTheme.push('Current System', 'Light Mode', 'Dark Mode');
accentColor.push('Coffee Beans', 'Green Mint', 'Fresh Mango', 'Peanut', 'Dark Wood', 'Modern');
accentColorCSS.push('coffeeBeans-color', 'greenMint-color', 'freshMango-color', 'peanut-color', 'darkWood-color', 'modern-color');
animationTransitionCSS.push('disabled-transition', 'slow-transition', 'slowest-transition', 'normal-transition', 'fast-transition', 'fastest-transition');

addCardLabel(accentColor, cardAccentColor);
addCardLabel(appTheme, cardTheme);

// applyingThemeFirst();
// applyingAccentColorFirst(accentColor, cardAccentColorSeletion);
// applyingAnimationTransitionFisrt(animationTransitionCSS, bodyDoc, animControl);

function addCardLabel(arrayName, formCardGroup) {
    for (let cn = 0; cn < formCardGroup.length; cn++) {
        let labelcard = formCardGroup[cn].children[1].outerText;
        arrayName.push(labelcard);
    }
}

// app theme

function currentThemeSystem() {
    if(window.matchMedia('(prefers-color-scheme: dark)').matches == true){
        htmlDoc.classList.add("darkThemeMode");
    } else {
        htmlDoc.classList.remove("darkThemeMode");
    }
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', ({ matches }) => {
        if (matches) {
            htmlDoc.classList.add("darkThemeMode");
            console.log(matches);
        } else {
            console.log(matches);
            htmlDoc.classList.remove("darkThemeMode");
        }
    });
}

function lightTheme() {
    htmlDoc.classList.remove("darkThemeMode");
}

function darkTheme() {
    htmlDoc.classList.add("class", "darkThemeMode");
}



// ---------

function clearClass(arrayCSS, fromElement) {
    for (let acs = 0; acs < arrayCSS.length; acs++) {
        const acCSS = arrayCSS[acs];
        fromElement.classList.remove(acCSS);
    }
}

// accent color

function coffeeBeansColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("coffeeBeans-color");
}

function greenMintColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("greenMint-color");
}

function freshMangoColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("freshMango-color");
}

function peanutColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("peanut-color");
}

function darkWoodColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("darkWood-color");
}

function modernColor() {
    clearClass(accentColorCSS, bodyDoc);
    bodyDoc.classList.add("modern-color");
}

// ------------

// Ajax config data update

function updateConfig(configData, url) {

    const Baseurl = ipaddress;

    $.ajax({
        method: "post",
        url: Baseurl + url,
        data: { configData: configData },
        success: function (data) {
            console.log(data);
        }
    });
}

//---------------

function setSelection(addClass, formClass) {
    for (let cts = 0; cts < formClass.length; cts++) {
        formClass[cts].addEventListener("click", function () {
            formClass[cts].classList.add(addClass);
        });
    }
}

function clearSelection(removeClass, formClass) {
    for (let cts = 0; cts < formClass.length; cts++) {
        formClass[cts].classList.remove(removeClass);
    }
}

function applyingAccentColorFirst(arrayName, formClass) {
    if (formClass.children[1].outerText == arrayName[0]) {
        coffeeBeansColor();
    }
    else if (formClass.children[1].outerText == arrayName[1]) {
        greenMintColor();
    }
    else if (formClass.children[1].outerText == arrayName[2]) {
        freshMangoColor();
    }
    else if (formClass.children[1].outerText == arrayName[3]) {
        peanutColor();
    }
    else if (formClass.children[1].outerText == arrayName[4]) {
        darkWoodColor();
    }
    else if (formClass.children[1].outerText == arrayName[5]) {
        modernColor();
    }
}

function applyingAnimationTransitionFisrt(arrayName, formClass, inputRangeName) {
    clearClass(animationTransitionCSS, bodyDoc);
    if (inputRangeName.value == 0) {
        bodyDoc.classList.add("disabled-transition");
    }
    else if (inputRangeName.value == 1) {
        bodyDoc.classList.add("slowest-transition");
    }
    else if (inputRangeName.value == 2) {
        bodyDoc.classList.add("slow-transition");
    }
    else if (inputRangeName.value == 3) {
        bodyDoc.classList.add("normal-transition");
    }
    else if (inputRangeName.value == 4) {
        bodyDoc.classList.add("fast-transition");
    }
    else if (inputRangeName.value == 5) {
        bodyDoc.classList.add("fastest-transition");
    }
}

function applyingThemeFirst() {
    // if (formClass.children[1].outerText == arrayName[0]) {
    //     currentThemeSystem();
    // }
    // else if (formClass.children[1].outerText == arrayName[1]) {
    //     lightTheme();
    // }
    // else if (formClass.children[1].outerText == arrayName[2]) {
    //     darkTheme();
    // }
    if (htmlData == "currentSystem") {
        currentThemeSystem();
    } else if (htmlData == "light") {
        lightTheme();
    } else if (htmlData == "dark") {
        darkTheme();
    }
}


for (let ct = 0; ct < cardTheme.length; ct++) {
    cardTheme[ct].addEventListener("click", function () {
        if (cardTheme[ct].children[1].outerText == appTheme[0]) {
            updateConfig("currentSystem", "/appearance/updatetheme");
            currentThemeSystem();
        }
        else if (cardTheme[ct].children[1].outerText == appTheme[1]) {
            updateConfig("light", "/appearance/updatetheme");
            lightTheme();
        }
        else if (cardTheme[ct].children[1].outerText == appTheme[2]) {
            updateConfig("dark", "/appearance/updatetheme");
            darkTheme();
        }
        clearSelection("card-selection", cardTheme);
        cardTheme[ct].classList.add("card-selection");
    });
}

for (let ct = 0; ct < cardAccentColor.length; ct++) {
    cardAccentColor[ct].addEventListener("click", function () {
        if (cardAccentColor[ct].children[1].outerText == accentColor[0]) {
            updateConfig("coffeeBeans", "/appearance/updatecolor");
            coffeeBeansColor();
        }
        else if (cardAccentColor[ct].children[1].outerText == accentColor[1]) {
            updateConfig("greenMint", "/appearance/updatecolor");
            greenMintColor();
        }
        else if (cardAccentColor[ct].children[1].outerText == accentColor[2]) {
            updateConfig("freshMango", "/appearance/updatecolor");
            freshMangoColor();
        }
        else if (cardAccentColor[ct].children[1].outerText == accentColor[3]) {
            updateConfig("peanut", "/appearance/updatecolor");
            peanutColor();
        }
        else if (cardAccentColor[ct].children[1].outerText == accentColor[4]) {
            updateConfig("darkWood", "/appearance/updatecolor");
            darkWoodColor();
        }
        else if (cardAccentColor[ct].children[1].outerText == accentColor[5]) {
            updateConfig("modern", "/appearance/updatecolor");
            modernColor();
        }
        clearSelection("card-selection", cardAccentColor);
        cardAccentColor[ct].classList.add("card-selection");
    });
}

// containerDoc.addEventListener("click", function(e){
//     if(e.target.className == "card-img-select cardgroup-accentcolor"){
//         if(e.target.children[1].outerText == "Current System"){
//             currentThemeSystem();
//         }
//         else if(e.target.children[1].outerText == "Light Mode")
//         {
//             lightTheme();
//         }
//         else if(e.target.children[1].outerText == "Dark Mode")
//         {
//             darkTheme();
//         }
//         clearSelection("card-selection", cardTheme);
//         e.target.classList.add("card-selection");
//     }
//     else if(e.target.className == "box fl-center padY-t-10px padX-l-10px padX-r-10px preview-card")
//     {
//         console.log("yeahhh");
//         if(e.target.nextElementSibling.outerText == "Current System"){
//             currentThemeSystem();
//         }
//         else if(e.target.nextElementSibling.outerText == "Light Mode")
//         {
//             lightTheme();
//         }
//         else if(e.target.nextElementSibling.outerText == "Dark Mode")
//         {
//             darkTheme();
//         }
//         clearSelection("card-selection", cardTheme);
//         e.target.parentElement.classList.add("card-selection");
//     }
//     else if(e.target.className == "")
// });


animControl.oninput = () => {
    let value = animControl.value;
    clearClass(animationTransitionCSS, bodyDoc);
    if (value == 0) {
        value = "disabled";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
    else if (value == 1) {
        value = "slowest";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
    else if (value == 2) {
        value = "slow";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
    else if (value == 3) {
        value = "normal";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
    else if (value == 4) {
        value = "fast";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
    else if (value == 5) {
        value = "fastest";
        updateConfig(value, "/appearance/updatetransition");
        bodyDoc.classList.add(value + "-transition");
    }
}

