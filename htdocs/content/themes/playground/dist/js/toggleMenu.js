let mobile = document.getElementById('mobile-menu');
let closeMenuIcon = document.getElementById('closeMenuIcon');
let openMenuIcon = document.getElementById('openMenuIcon');
let buttonBurger = document.getElementById('buttonBurger');

buttonBurger.addEventListener('click', evt => {
    mobile.classList.toggle('hidden')
    closeMenuIcon.classList.toggle('hidden')
    closeMenuIcon.classList.toggle('block')
    openMenuIcon.classList.toggle('hidden')
    openMenuIcon.classList.toggle('block')
})