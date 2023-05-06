const overlayModifElement = document.querySelector(
  ".overlayElementListeModale"
);

const modaleModifElement = document.querySelectorAll(
  ".modifElementListeModale"
);
const boutonModifElement = document.querySelectorAll(".boutonModifElement");
const fermerModale = document.querySelectorAll(".fermerModale");

boutonModifElement.forEach((btn, index) => {
  if (btn) {
    btn.addEventListener("click", () => {
      modaleModifElement[index].classList.remove("dnone");
      overlayModifElement.classList.remove("dnone");
    });
  }
});

if (overlayModifElement) {
  overlayModifElement.addEventListener("click", () => {
    modaleModifElement.forEach((modale) => {
      modale.classList.add("dnone");
    });
    overlayModifElement.classList.add("dnone");
  });
}



fermerModale.forEach((btn, index) => {
  if (btn) {
    if (btn) {
      btn.addEventListener("click", () => {
        modaleModifElement[index].classList.add("dnone");
        overlayModifElement.classList.add("dnone");
      });
    }
    btn.addEventListener("click", () => console.log("click2"));
  }
});

const iconeAjouterElementListe = document.querySelector(".iconeAjouterElementListe")
const ajouterElementListe = document.querySelector("#ajouterElementListe")
const overlayAjouterElementListeModale = document.querySelector(".overlayAjouterElementListeModale")

if(iconeAjouterElementListe){
  iconeAjouterElementListe.addEventListener("click", ()=>{
    ajouterElementListe.classList.remove("dnone")
    overlayAjouterElementListeModale.classList.remove("dnone")
  })
}
if(overlayAjouterElementListeModale){
  overlayAjouterElementListeModale.addEventListener("click", ()=>{
    ajouterElementListe.classList.add("dnone")
    overlayAjouterElementListeModale.classList.add("dnone")
  })
}
