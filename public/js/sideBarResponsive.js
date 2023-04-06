const btnSidebar_header = document.querySelector(".btn-for-sidebar");
const btnSidebar_responsive = document.querySelector(".btn-sidebar-type2");


const sidebar = document.querySelector(".sidebar-type2");

function OpenSidebarType2() {
    if (btnSidebar_header.children[0].children[0].classList.length == 1) {
        btnSidebar_header.children[0].children[0].classList.toggle("i-menu2-active");

        sidebar.classList.remove("bar-type2-nonactive");
        sidebar.classList.add("bar-type2-active");

        btnSidebar_responsive.classList.remove("btn-type2-hide");
        btnSidebar_responsive.classList.add("btn-type2-active");
    }
}

function CloseSidebarType2() {
    btnSidebar_header.children[0].children[0].classList.toggle("i-menu2-active");

    sidebar.classList.remove("bar-type2-active");
    sidebar.classList.add("bar-type2-nonactive");

    btnSidebar_responsive.classList.remove("btn-type2-active");
    btnSidebar_responsive.classList.add("btn-type2-nonactive");
}

btnSidebar_header.addEventListener("click", function () {
    if (window.innerWidth <= 1050) {
        OpenSidebarType2();
    }
});

btnSidebar_responsive.addEventListener("click", function () {
    CloseSidebarType2();
});

window.addEventListener("resize", function () {
    if (sidebar.classList.item(1) == "bar-type2-active") {
        if (this.window.innerWidth > 1050) {
            CloseSidebarType2();
        }
    }
});

