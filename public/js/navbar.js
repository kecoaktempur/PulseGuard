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

function toggleDropdown() {
    const dropdown = document.getElementById('dropdown');
    dropdown.classList.toggle('hidden');
}

function selectOption(value) {
    const selectedOptionText = document.getElementById('selectedOptionText');
    selectedOptionText.textContent = value;

    // You can now use the selected value in your component or redirect as needed.
    // For example, you can store the value in a variable or update a component state.
    console.log('Selected Value:', value);

    // Close the dropdown after selection (optional)
    toggleDropdown();
}