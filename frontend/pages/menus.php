<?php include '../components/head.php';
?>

<body>

    <?php include '../components/navbar-menusG.php';
    ?>

    <main class="container-fluid p-0">
        <!-- Titre -->
        <div>
            <h2 class="text-decoration-underline text-vg-primary text-center mt-3 fs-3">Nos menus & événements</h2>
            <p class="text-center small">Découvrez nos offres gourmandes et festives</p>
        </div>
        <hr class="my-1">

        <!-- Filtres (mobile)-->
        <div class="pt-1 bg-light position-relative bg-custom-light d-lg-none">
            <h5 class="mb-3">Filtres</h5>
            <!-- Icone (mobile) -->

            <i class="bi bi-chevron-down position-absolute end-0 me-2 d-lg-none icon-filtre" style="top: 10px;"></i>


            <div class="row align-items-center">
                <div class="col">
                    <span class="text-muted">Prix maximum : jusqu'à 50€</span>
                </div>

                <div class="col-auto">
                    <button class="btn bg-custom btn-connexion btn-outline-success btn-sm d-lg-none rounded-5 btn-mobile-sm">Affiner</button>
                </div>
            </div>
        </div>

        <!-- Navlist -->
        <div class="d-flex justify-content-center gap-4 my-3">
    <a href="#" class="text-success fw-semibold text-decoration-none px-2 bg-light rounded">Tous</a>
    <a href="#" class="text-vg-primary">Menus</a>
    <a href="#" class="text-vg-primary">Réceptions</a>
    <a href="#" class="text-vg-primary">Fêtes</a>
</div>

<!-- Container de menus -->
<div class="container my-4">

<!-- Menu1 -->
    <div class="card border-0 rounded-4 p-3 shadow-sm bg-custom-light">
        <div class="row g-3 align-items-center">

            <!-- Image -->
            <div class="col-md-5">
                <img 
                    src="/assets/francky21-food-8192348_1920.jpg"
                    class="img-fluid rounded-4 w-100"
                    alt="Menu gourmand">
            </div>

            <!-- Texte -->
            <div class="col-md-7">

                <h3 class="text-vg-primary mb-2">
                    Menu Gourmand
                </h3>

                <hr class="mt-0">

                <p class="mb-1">
                    <strong>Thèmes:</strong> Événements
                </p>

                <p class="mb-3">
                    <strong>Régime:</strong> Classique
                </p>

                <p class="mb-1">
                    Pour 2 personnes minimum
                </p>

                <p class="mb-4">
                    À partir de <strong>25€</strong> / personne
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fst-italic mb-0">
                        Stock: 6 disponibles
                    </p>

                    <a href="#" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">
                        Voir le détail
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- Menu2 -->  <div class="card border-0 rounded-4 p-3 shadow-sm bg-custom-light mt-3">
        <div class="row g-3 align-items-center">

            <!-- Image -->
            <div class="col-md-5">
                <img 
                    src="/assets/kiberstalker-ai-generated-8346161_1920.jpg"
                    class="img-fluid rounded-4 w-100"
                    alt="Buffet de Noël">
            </div>

            <!-- Texte -->
            <div class="col-md-7">

                <h3 class="text-vg-primary mb-2">
                    Buffet de Noël
                </h3>

                <hr class="mt-0">

                <p class="mb-1">
                    <strong>Thèmes:</strong> Noël
                </p>

                <p class="mb-3">
                    <strong>Régime:</strong> Classique
                </p>

                <p class="mb-1">
                    Pour 6 personnes minimum
                </p>

                <p class="mb-4">
                    À partir de <strong>40€</strong> / personne
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fst-italic mb-0">
                        Stock: 8 disponibles
                    </p>

                    <a href="#" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">
                        Voir le détail
                    </a>
                </div>

            </div>

        </div>
    </div>

    <!-- Menu3 -->
     <div class="card border-0 rounded-4 p-3 shadow-sm bg-custom-light mt-3">
        <div class="row g-3 align-items-center">

            <!-- Image -->
            <div class="col-md-5">
                <img 
                    src="/assets/emilia_baczynska-happy-easter-4154655_1920.jpg"
                    class="img-fluid rounded-4 w-100"
                    alt="Menu de Pâques">
            </div>

            <!-- Texte -->
            <div class="col-md-7">

                <h3 class="text-vg-primary mb-2">
                    Menu de Pâques
                </h3>

                <hr class="mt-0">

                <p class="mb-1">
                    <strong>Thèmes:</strong> Pâques
                </p>

                <p class="mb-3">
                    <strong>Régime:</strong> Classique
                </p>

                <p class="mb-1">
                    Pour 4 personnes minimum
                </p>

                <p class="mb-4">
                    À partir de <strong>30€</strong> / personne
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fst-italic mb-0">
                       Réservation 2 jours <br>
                       à l'avance
                    </p>

                    <a href="#" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">
                        Voir le détail
                    </a>
                </div>

            </div>

        </div>
    </div>

   <!-- Menu4 -->
     <div class="card border-0 rounded-4 p-3 shadow-sm bg-custom-light mt-3">
        <div class="row g-3 align-items-center">

            <!-- Image -->
            <div class="col-md-5">
                <img 
                    src="/assets/u_s3w4e9hqv7-video-9825949_1920.jpg"
                    class="img-fluid rounded-4 w-100"
                    alt="Menu de Pâques">
            </div>

            <!-- Texte -->
            <div class="col-md-7">

                <h3 class="text-vg-primary mb-2">
                    Menu de Pâques
                </h3>

                <hr class="mt-0">

                <p class="mb-1">
                    <strong>Thèmes:</strong> Réception
                </p>

                <p class="mb-3">
                    <strong>Régime:</strong> Varié
                </p>

                <p class="mb-1">
                    Pour 10 personnes minimum
                </p>

                <p class="mb-4">
                    À partir de <strong>20€</strong> / personne
                </p>

                <div class="d-flex justify-content-between align-items-center">
                    <p class="fst-italic mb-0">
                        Idéal pour mariage
                    </p>

                    <a href="#" class="btn btn-connexion bg-custom rounded-5 btn-mobile-sm">
                        Voir le détail
                    </a>
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

</body>
