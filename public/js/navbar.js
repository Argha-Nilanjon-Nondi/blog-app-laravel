let menu_collection = document.getElementById("mobile-menu-collection");
let menu_btn = document.getElementById('mobile-menu-btn');
menu_btn.addEventListener('click', () => {
    menu_collection.classList.toggle("block");
    menu_collection.classList.toggle("hidden");
});