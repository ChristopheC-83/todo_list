//animation basiques titres de page
const titreH1 = document.querySelector(".animTitres h1");
const titreH2 = document.querySelector(".animTitres h2");
const titreAcueil = document.querySelectorAll(".titreAcueil");

if (titreH1) {
  gsap.from(titreH1, { x: -100, duration: 1.5, opacity: 0 });
  titreH1.addEventListener("click", () =>
    gsap.from(titreH1, { rotate: 360, duration: 0.5 })
  );
}

  if (titreAcueil) {
    gsap.from(titreAcueil, {
      y : 100,
      duration: 1.5,
      opacity: 0,
      ease: Power4.easeOut,
      stagger:0.25
    });
  }

// Gestion alertes :
window.onload = function () {
  const alerte = document.querySelectorAll(".alert");
  const alerteArray = Array.from(alerte);
  gsap.to(alerteArray, {
    y: -30,
    duration: 1,
    autoAlpha: 0,
    delay: 1,
    stagger: 1,
  });
};