const body_accent = document.querySelector("body");

const ac1 = document.querySelector(".tab-2 .box-radio .ac1");
const ac2 = document.querySelector(".tab-2 .box-radio .ac2");
const ac3 = document.querySelector(".tab-2 .box-radio .ac3");

ac1.addEventListener("click", function()
{
    if((body_accent.classList.item(0) == "accent-color-1") || (body_accent.classList.item(0) == "accent-color-2") || (body_accent.classList.item(0) == "accent-color-3"))
    {
        body_accent.setAttribute("class", "accent-color-1");
    }
});

ac2.addEventListener("click", function()
{
    if((body_accent.classList.item(0) == "accent-color-1") || (body_accent.classList.item(0) == "accent-color-2") || (body_accent.classList.item(0) == "accent-color-3"))
    {
        body_accent.setAttribute("class", "accent-color-2");
    }
});

ac3.addEventListener("click", function()
{
    if((body_accent.classList.item(0) == "accent-color-1") || (body_accent.classList.item(0) == "accent-color-2") || (body_accent.classList.item(0) == "accent-color-3"))
    {
        body_accent.setAttribute("class", "accent-color-3");
    }
});