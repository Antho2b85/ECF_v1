const filtresMobile = document.getElementById("filtresMobile");

filtresMobile.addEventListener("show.bs.collapse", () => {
  document.querySelector(".icon-filtre").style.transform = "rotate(180deg)";
});
filtresMobile.addEventListener("hide.bs.collapse", () => {
  document.querySelector(".icon-filtre").style.transform = "rotate(0deg)";
});
