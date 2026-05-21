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

// Mettre l'input de la page commande par defaut sur 1 avec le prix adequat
document.addEventListener("DOMContentLoaded", () => {
  const numberClient = document.getElementById("numberClient");
  const totalPrice = document.getElementById("totalPrice");
  const totalFinal = document.getElementById("totalFinal");
  // Stock du prix total input pour la fonction de réduction
  const prixTotalInput = document.getElementById("prixTotalInput");
  const fraisLivraison = 7.5;

  function updatePrice() {
    let nb = parseInt(numberClient.value);
    if (nb < 1 || isNaN(nb)) {
      nb = 1;
      numberClient.value = 1;
    }

    let priceOne = nb * prixParPersonne;

    // Appliquer la réduction de 10%
    if (nb >= 9) {
      const calcReduc = priceOne * 0.1;
      priceOne = priceOne - calcReduc;
    }

    const final = priceOne + fraisLivraison;

    totalPrice.innerText = priceOne.toFixed(2) + " €";
    totalFinal.innerText = final.toFixed(2) + " €";
    prixTotalInput.value = final.toFixed(2);
  }

  // Calcul automatique au chargement
  updatePrice();

  // Calcul quand l'utilisateur change le nombre de personnes
  numberClient.addEventListener("input", updatePrice);
});
