// Chevron déroulant de la page "Nos menus ..." et uniquement en mobile (flèche qui rotate)
const filtresMobile = document.getElementById("filtresMobile");
if (filtresMobile) {
  filtresMobile.addEventListener("show.bs.collapse", () => {
    document.querySelector(".icon-filtre").style.transform = "rotate(180deg)";
  });
  filtresMobile.addEventListener("hide.bs.collapse", () => {
    document.querySelector(".icon-filtre").style.transform = "rotate(0deg)";
  });
}

// Curseur "Prix maximum" sur la page "Nos menus ..." pour mobile
const mooveCursor = document.getElementById("mooveCursor");

if (mooveCursor) {
  mooveCursor.addEventListener("input", () => {
    const valeur = mooveCursor.value;

    const moovePrice = document.querySelector("#moovePrice");
    const moovePriceMax = document.querySelector("#moovePriceMax");

    if (moovePrice) {
      moovePrice.textContent = "Jusqu'à " + valeur + "€";
    }

    if (moovePriceMax) {
      moovePriceMax.value = valeur;
    }
  });
}

// Curseur "Prix maximum" sur la page "Nos menus ..." pour Desktop
const mooveCursorDesktop = document.getElementById("mooveCursorDesktop");

if (mooveCursorDesktop) {
  mooveCursorDesktop.addEventListener("input", () => {
    const valeurDesktop = mooveCursorDesktop.value;

    const moovePriceDesktop = document.querySelector("#moovePriceDesktop");
    const moovePriceMaxDesktop = document.querySelector(
      "#moovePriceMaxDesktop",
    );

    if (moovePriceDesktop) {
      moovePriceDesktop.textContent = "Jusqu'à " + valeurDesktop + "€";
    }

    if (moovePriceMaxDesktop) {
      moovePriceMaxDesktop.value = valeurDesktop;
    }
  });
}

// Masquer / demasquer le mot de passe sur la page "create-account"
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

// Sur la page "commande.php" fonction pour que l'input du nombre de personne augmente le prix total change en fonction du nombre de personnes
document.addEventListener("DOMContentLoaded", () => {
  const numberClient = document.getElementById("numberClient");
  const totalPrice = document.getElementById("totalPrice");

  if (!numberClient || !totalPrice) {
    return; // On quitte si on n'est pas sur commande.php
  }

  numberClient.addEventListener("input", () => {
    const valeurClient = Number(numberClient.value);
    const total = valeurClient * prixParPersonne;
    totalPrice.innerText = total + " €";

    const fraisLivraison = 7.5;
    const totalFinal = total + fraisLivraison;

    const totalFinalSpan = document.getElementById("totalFinal");
    if (totalFinalSpan) {
      totalFinalSpan.innerText = totalFinal.toFixed(2) + " €";
    }
  });
});
