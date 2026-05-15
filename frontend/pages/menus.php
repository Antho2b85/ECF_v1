<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php require '../components/head.php';
?>

<body>
    
    <?php
    $title = "Vite & Gourmand";
$activePage = 'menuG';

require '../components/navbar-accueil.php';
?>

    <main class="container-fluid p-0">
        <!-- Titre -->
        <div>
            <h2 class="text-decoration-underline text-vg-primary text-center mt-3 fs-3">Nos menus & événements</h2>
            <p class="text-center small">Découvrez nos offres gourmandes et festives</p>
        </div>
        <hr class="my-1">

   <!-- Filtres (mobile) -->
<div class="d-lg-none mb-3 bg-custom-light rounded-4">

    <!-- Ligne 1 : Titre + Chevron -->
    <div class="d-flex align-items-center justify-content-between px-3 pt-3 pb-2"
         data-bs-toggle="collapse"
         data-bs-target="#filtresMobile"
         aria-expanded="false"
         aria-controls="filtresMobile"
         style="cursor: pointer;">
        <h5 class="fw-bold mb-0">Filtres</h5>
        <i class="bi bi-chevron-down icon-filtre" style="transition: transform 0.25s; font-size: 1.1rem;"></i>
    </div>

    <hr class="mx-3 my-0">


    <!-- Ligne 2 : Prix-->
    <div class="d-flex align-items-center justify-content-between px-3 py-2">
    </div>


    <!-- Contenu déroulant -->
    <div class="collapse" id="filtresMobile">
        <div class="px-3 pb-3">

            <div>
                <h5 class="small">
                    <strong>Prix maximum:</strong>
                    <span class="ms-4" id="moovePrice">Jusqu'à 50€</span>
                </h5>
                <input type="range" class="form-range" id="mooveCursor" min="0" max="100" step="10" value="50">
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Fourchette de prix:</h5>
                <div class="d-flex align-items-center gap-2">
                    <input type="number" class="form-control bg-white" placeholder="Min">
                    <span>→</span>
                    <input type="number" class="form-control bg-white" id="moovePriceMax" placeholder="Max">
                </div>
                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Thémes:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="m-theme1">
                    <label class="form-check-label" for="m-theme1">Classique</label>
                </div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="m-theme2">
                    <label class="form-check-label" for="m-theme2">Noël</label>
                </div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="m-theme3">
                    <label class="form-check-label" for="m-theme3">Pâques</label>
                </div>
                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Régime:</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="m-regime1">
                    <label class="form-check-label" for="m-regime1">Classique</label>
                </div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="m-regime2">
                    <label class="form-check-label" for="m-regime2">Végétarien</label>
                </div>
                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="m-regime3">
                    <label class="form-check-label" for="m-regime3">Vegan</label>
                </div>
                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Nombres de personnes:</h5>
                <input type="number" class="form-control bg-white" placeholder="Minimum">
            </div>
        </div>
    </div>
</div>

        <!-- Navlist -->
        <div class="d-flex justify-content-center gap-4 my-3">
    <span class="text-success fw-semibold text-decoration-underline px-2 bg-light rounded">Tous</span>
    <span class="text-vg-primary">Menus</span>
    <span class="text-vg-primary">Réceptions</span>
    <span class="text-vg-primary">Fêtes</span>
</div>


<!-- Container de menus -->
<div class="container-fluid my-4">
    <div class="row">

        <!-- Colonne gauche filtres (only desktop) -->
        <div class="col-lg-2 d-none d-lg-block bg-custom-light rounded-4">
            <h5 class="fw-bold mt-2">Filtres</h5>
            <hr class="col-12">

            <div>
                <h5 class="small">
                    <strong>Prix maximum:</strong>
                    <span class="ms-4" id="moovePriceDesktop">Jusqu'à 50€</span>
                </h5>
                <input type="range" class="form-range" id="mooveCursorDesktop" min="0" max="100" step="10" value="50">
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Fourchette de prix:</h5>
                <div class="d-flex align-items-center gap-2">
                    <input type="number" class="form-control bg-white" placeholder="Min">
                    <span>→</span>
                    <input type="number" class="form-control bg-white" id="moovePriceMaxDesktop" placeholder="Max">
                </div>
                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Thémes:</h5>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="theme1">
                    <label class="form-check-label" for="theme1">Classique</label>
                </div>

                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="theme2">
                    <label class="form-check-label" for="theme2">Noël</label>
                </div>

                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="theme3">
                    <label class="form-check-label" for="theme3">Pâques</label>
                </div>

                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Régime:</h5>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="regime1">
                    <label class="form-check-label" for="regime1">Classique</label>
                </div>

                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="regime2">
                    <label class="form-check-label" for="regime2">Végétarien</label>
                </div>

                <div class="form-check mt-1">
                    <input class="form-check-input" type="checkbox" id="regime3">
                    <label class="form-check-label" for="regime3">Vegan</label>
                </div>

                <hr>
            </div>

            <div>
                <h5 class="small fw-bold mt-3">Nombres de personnes:</h5>
                <div class="d-flex align-items-center gap-2">
                    <input type="number" class="form-control bg-white" placeholder="Minimum">
                </div>
            </div>
        </div>

        <!-- COLONNE MENUS (2 colonnes en desktop) -->
        <div class="col-12 col-lg-10">

            <!-- LIGNE 1 : Menu 1 + Menu 3 -->
            <div class="row g-3">

                <!-- Menu 1 -->
                <div class="col-12 col-lg-6">
                    <div class="card h-100 border-0 rounded-4 p-3 shadow-sm bg-custom-light">
                        <div class="row g-3 align-items-center">

                            <div class="col-12 col-md-5">
                                <img src="/ECF_V1/assets/francky21-food-8192348_1920.jpg"
                                     class="img-fluid rounded-4 w-100"
                                     alt="Menu gourmand">
                            </div>

                            <div class="col-12 col-md-7">
                                <h3 class="text-vg-primary mb-2 text-lg-center">Menu Gourmand</h3>
                                <hr class="mt-0">

                                <p class="mb-1"><strong>Thèmes:</strong> Événements</p>
                                <p class="mb-3"><strong>Régime:</strong> Classique</p>
                                <p class="mb-1">Pour 2 personnes minimum</p>
                                <p class="mb-4">À partir de <strong>25€</strong> / personne</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fst-italic mb-0">Stock: 6 disponibles</p>
                                    <a href="/ECF_v1/frontend/pages/menu-detail.php?id=1" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">Voir le détail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Menu 3 -->
                <div class="col-12 col-lg-6">
                    <div class="card h-100 border-0 rounded-4 p-3 shadow-sm bg-custom-light">
                        <div class="row g-3 align-items-center">

                            <div class="col-md-5">
                                <img src="/ECF_V1/assets/emilia_baczynska-happy-easter-4154655_1920.jpg"
                                     class="img-fluid rounded-4 w-100"
                                     alt="Menu de Pâques">
                            </div>

                            <div class="col-md-7">
                                <h3 class="text-vg-primary mb-2 text-lg-center">Menu de Pâques</h3>
                                <hr class="mt-0">

                                <p class="mb-1"><strong>Thèmes:</strong> Pâques</p>
                                <p class="mb-3"><strong>Régime:</strong> Classique</p>
                                <p class="mb-1">Pour 4 personnes minimum</p>
                                <p class="mb-4">À partir de <strong>30€</strong> / personne</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fst-italic mb-0">
                                        Réservation 2 jours <br> à l'avance
                                    </p>
                                    <a href="/ECF_V1/frontend/pages/menu-detail.php?id=2" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">Voir le détail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- LIGNE 2 : Menu 2 + Menu 4 -->
            <div class="row g-3 mt-3">

                <!-- Menu 2 -->
                <div class="col-12 col-lg-6">
                    <div class="card h-100 border-0 rounded-4 p-3 shadow-sm bg-custom-light">
                        <div class="row g-3 align-items-center">

                            <div class="col-md-5">
                                <img src="/ECF_V1/assets/kiberstalker-ai-generated-8346161_1920.jpg"
                                     class="img-fluid rounded-4 w-100"
                                     alt="Buffet de Noël">
                            </div>

                            <div class="col-md-7">
                                <h3 class="text-vg-primary mb-2 text-lg-center">Buffet de Noël</h3>
                                <hr class="mt-0">

                                <p class="mb-1"><strong>Thèmes:</strong> Noël</p>
                                <p class="mb-3"><strong>Régime:</strong> Classique</p>
                                <p class="mb-1">Pour 6 personnes minimum</p>
                                <p class="mb-4">À partir de <strong>40€</strong> / personne</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fst-italic mb-0">Stock: 8 disponibles</p>
                                    <a href="/ECF_V1/frontend/pages/menu-detail.php?id=3" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">Voir le détail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Menu 4 -->
                <div class="col-12 col-lg-6">
                    <div class="card h-100 border-0 rounded-4 p-3 shadow-sm bg-custom-light">
                        <div class="row g-3 align-items-center">

                            <div class="col-md-5">
                                <img src="/ECF_V1/assets/u_s3w4e9hqv7-video-9825949_1920.jpg"
                                     class="img-fluid rounded-4 w-100"
                                     alt="Réceptions et séminaire">
                            </div>

                            <div class="col-md-7">
                                <h3 class="text-vg-primary mb-2 text-lg-center">Réceptions et séminaire</h3>
                                <hr class="mt-0">

                                <p class="mb-1"><strong>Thèmes:</strong> Réception</p>
                                <p class="mb-3"><strong>Régime:</strong> Varié</p>
                                <p class="mb-1">Pour 10 personnes minimum</p>
                                <p class="mb-4">À partir de <strong>20€</strong> / personne</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="fst-italic mb-0">Idéal pour mariage</p>
                                    <a href="/ECF_V1/frontend/pages/menu-detail.php?id=4" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">Voir le détail</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

    </main>

<!-- Footer -->
 <?php
 include '../components/footer.php';
?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

            <script src="/ECF_V1/JS/main.js"></script>

</body>
