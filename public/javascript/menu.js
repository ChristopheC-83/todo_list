const toggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");
const navOverlay = document.querySelector(".nav-overlay");

toggler.addEventListener("click", ()=>{
    toggler.classList.toggle('open')
    navLinksContainer.classList.toggle('open')
    navOverlay.classList.toggle('dnone')
})

navOverlay.addEventListener("click", ()=>{
    toggler.classList.toggle('open')
    navLinksContainer.classList.toggle('open')
    navOverlay.classList.toggle('dnone')
})