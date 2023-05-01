const toggler = document.querySelector(".hamburger");
const navLinksContainer = document.querySelector(".navlinks-container");

toggler.addEventListener("click", ()=>{
    toggler.classList.toggle('open')
    navLinksContainer.classList.toggle('open')
})