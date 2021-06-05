const menu = document.querySelector("nav.menu");

menu.querySelector(".menu-toggle").addEventListener('click', function(event){
    menu.querySelector(".menu-links").classList.toggle("expanded");
    menu.querySelector(".menu-toggle").classList.toggle("open");
});