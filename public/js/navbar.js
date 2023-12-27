const openSidebar = document.getElementById("openSidebar");
const logoSidebar = document.getElementById("logo-sidebar");
const closeSidebarBtn = document.getElementById("closeSidebarBtn");

openSidebar.addEventListener("click", () => {
    logoSidebar.classList.remove("-translate-x-full");
});

closeSidebarBtn.addEventListener("click", () => {
    logoSidebar.classList.add("-translate-x-full");
});

const navLinks = document.querySelectorAll('[id="navLink"]');
const navIcons = document.querySelectorAll('[id="navIcon"]');

navLinks.forEach((navLink, index) => {
    navLink.addEventListener("click", () => {
        navIcons.forEach(icon => {
            icon.classList.remove("active");
        });

        navIcons[index].classList.add("active");
    });
});


const openSidebarMini = document.getElementById("openSidebarMini");
const elementsWithTextSidebarMiniId = document.querySelectorAll('[id="textSidebarMini"]');

openSidebarMini.addEventListener("click", () => {
    logoSidebar.classList.toggle("sm:w-16");
    for (const element of elementsWithTextSidebarMiniId) {
        element.classList.toggle("sm:hidden");
    }
});