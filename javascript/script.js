const toggle = document.querySelector(".toggle-menu");
const nav = document.querySelector(".header-nav");
toggle.addEventListener("click", () => {
    nav.classList.toggle("open");
})
