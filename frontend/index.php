<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>


<!doctype html>
<html lang="fr">
  <?php require './components/head.php';
?>
  <body>
    <?php
    $title = "Vite & Gourmand";
$activePage = "Accueil";

require './components/navbar-accueil.php';
?>
    
    <main>
      <div class="position-relative hero" style="height: 350px">
        <img
          src="/ECF_V1/assets/nikolayfrolochkin-buffet-3085114_1920.jpg"
          class="w-100 h-100 object-fit-cover"
          alt="Hero"
        />

        <!-- Overlay sombre -->
        <div
          class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"
        ></div>

        <!-- Titre centré -->
        <div class="hero-text text-white">
          <h1>Vite & Gourmand</h1>
          <p>
            Julie et José vous accueillent autour d’une cuisine <br />
            généreuse et authentique
          </p>

         <a href="/ECF_V1/frontend/pages/commande.php" class="btn btn-connexion mt-3 mt-lg-5">Reserver</a>
          </button>
        </div>
      </div>

      <section class="container py-5">
        <!-- TITRE PRINCIPAL -->
        <div class="d-flex align-items-center justify-content-center mb-5">
          <span class="flex-grow-1 border-top border-2 border-vg"></span>
          <h2 class="text-center mx-3 text-vg-primary">
            Bienvenue chez Vite & Gourmand
          </h2>
          <span class="flex-grow-1 border-top border-2 border-vg"></span>
        </div>
        <div class="row">
          <!-- ========================= -->
          <!-- COLONNE GAUCHE -->
          <!-- ========================= -->
          <div class="col-md-6">
            <div class="row row-equal">
              <!-- IMAGE 1 -->
              <div class="col-6 col-md-6 order-1 d-flex">
                <img
                  src="/ECF_V1/assets/stocksnap-food-2616326_1920.jpg"
                  class="img-fluid rounded img-equal-mobile"
                  alt="Présentation"
                />
              </div>

              <!-- TEXTE -->
              <div
                class="col-6 col-md-6 d-flex flex-column justify-content-center order-2 order-md-2"
              >
                <p>
                  Bienvenue sur le site de Vite & Gourmand. <br />
                </p>
                <p>
                  Nous mettons tout notre savoir-faire au service de vos
                  événements.
                </p>
                <p class="mt-3">
                  Depuis plus de 25 ans, Julie et José accompagnent leurs
                  clients avec sérieux et passion. Leur expérience, leur
                  organisation et leur sens du détail garantissent des
                  prestations soignées et adaptées à chaque événement.
                </p>

                <!-- Bouton desktop -->
                <a href="/ECF_V1/frontend/pages/menus.php" class="btn btn-connexion d-none d-md-inline-block mt-3">
                  Nos menus
                </a>
              </div>

              <!-- BOUTON MOBILE (sous image + texte) -->
              <div class="col-12 d-md-none text-center order-3">
                <a href="/ECF_V1/frontend/pages/menus.php" class="btn btn-connexion mt-3 mx-auto d-block">
                  Nos menus
                </a>
              </div>
            </div>
          </div>

          <!-- ========================= -->
          <!-- COLONNE DROITE -->
          <!-- ========================= -->
          <div class="col-md-6">
            <!-- TITRE DU BLOC 2 -->
            <div
              class="d-flex align-items-center justify-content-center mb-4 mt-3"
            >
              <span
                class="d-none d-md-block flex-grow-1 border-top border-2 border-vg"
              ></span>
              <h2 class="text-center text-vg-primary mx-3">
                Nos menus de fêtes
              </h2>
              <span
                class="d-none d-md-block flex-grow-1 border-top border-2 border-vg"
              ></span>
            </div>
            <div class="row row-equal">
              <!-- IMAGE 2 -->
              <div class="col-6 col-md-6 order-1 d-flex">
                <img
                  src="/ECF_V1/assets/sookie_cfw-buffet-617156_1920.jpg"
                  class="img-fluid rounded img-equal-mobile"
                  alt="Présentation"
                />
              </div>

              <!-- TEXTE -->
              <div
                class="col-6 col-md-6 d-flex flex-column justify-content-center order-2 order-md-2"
              >
                <p>
                  Entre Noël et Pâques, découvrez nos propositions gourmandes
                  pour célébrer vos moments importants. <br />
                  Explorez nos plus beaux buffets, dressages et moments
                  partagés. Un aperçu en images vous attend dans la galerie.
                </p>

                <!-- Bouton desktop -->
                <a href="/ECF_V1/frontend/pages/galerie.php" class="btn btn-connexion d-none d-md-inline-block mt-3">Galerie</a>
              </div>

              <!-- BOUTON MOBILE (sous image + texte) -->
              <div class="col-12 d-md-none text-center order-3">
                <a href="/ECF_V1/frontend/pages/galerie.php" class="btn btn-connexion mt-3">Galerie</a>
              </div>
            </div>
          </div>
        </div>
        <!-- AVIS CLIENTS VALIDÉS -->
        <div class="mt-5">
          <div class="d-flex align-items-center justify-content-center mb-4">
            <span
              class="d-none d-md-block flex-grow-1 border-top border-2 border-vg"
            ></span>
            <h2 class="text-center mx-3 text-vg-primary">Avis clients</h2>
            <span
              class="d-none d-md-block flex-grow-1 border-top border-2 border-vg"
            ></span>
          </div>

          <div class="row g-4">
            <div class="col-md-4">
              <div
                class="p-3 border rounded bg-white shadow-sm bg-custom-light"
              >
                <p class="mb-1"><strong>★★★★★</strong></p>
                <p class="mb-1">
                  “Un service impeccable et une cuisine délicieuse.”
                </p>
                <small class="text-muted"> Marie</small>
              </div>
            </div>

            <div class="col-md-4">
              <div
                class="p-3 border rounded bg-white shadow-sm bg-custom-light"
              >
                <p class="mb-1"><strong>★★★★☆</strong></p>
                <p class="mb-1">“Très bon buffet, organisation parfaite.”</p>
                <small class="text-muted"> Thomas</small>
              </div>
            </div>

            <div class="col-md-4">
              <div
                class="p-3 border rounded bg-white shadow-sm bg-custom-light"
              >
                <p class="mb-1"><strong>★★★★★</strong></p>
                <p class="mb-1">
                  “Julie et José sont adorables, je recommande !”
                </p>
                <small class="text-muted"> Sophie</small>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <?php

    require './components/footer.php';
?>

  </body>
</html>
