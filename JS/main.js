// Chevron déroulant (flèche qui rotate)

const filtresMobile = document.getElementById("filtresMobile");

filtresMobile.addEventListener("show.bs.collapse", () => {
  document.querySelector(".icon-filtre").style.transform = "rotate(180deg)";
});
filtresMobile.addEventListener("hide.bs.collapse", () => {
  document.querySelector(".icon-filtre").style.transform = "rotate(0deg)";
});

// Curseur "Prix maximum" pour mobile

const mooveCursor = document.getElementById("mooveCursor");

mooveCursor.addEventListener("input", () => {
  const valeur = mooveCursor.value;
  document.querySelector("#moovePrice").textContent =
    "Jusqu'à" + " " + +valeur + "€";
  document.querySelector("#moovePriceMax").value = valeur;
});

// Curseur "Prix maximum" pour Desktop
const mooveCursorDesktop = document.getElementById("mooveCursorDesktop");

mooveCursorDesktop.addEventListener("input", () => {
  const valeurDesktop = mooveCursorDesktop.value;
  document.querySelector("#moovePriceDesktop").textContent =
    "Jusqu'à" + " " + +valeurDesktop + "€";
  document.querySelector("#moovePriceMaxDesktop").value = valeurDesktop;
});

function togglePassword(fieldID) {
  const input = document.getElementById(fieldID);
  const icon = document.getElementById("icon-" + fieldID);

  if (input.type === "password") {
    input.type = "text";
    icon.classList.replace("bi-eye-slash", "bi-eye");
  } else {
    input.type = "password";
    icon.classList.replace("bi-eye", "bi-eye-slash");
  }
}
