const overlayModifElement = document.querySelector(
  ".overlayElementListeModale"
);

const modaleModifElement = document.querySelectorAll(
  ".modifElementListeModale"
);
const boutonModifElement = document.querySelectorAll(".boutonModifElement");

boutonModifElement.forEach((btn, index) => {
  if (btn) {
    btn.addEventListener("click", () => {
      modaleModifElement[index].classList.remove("dnone");
      overlayModifElement.classList.remove("dnone");
      console.log("click");
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
