<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php require '../components/head.php';
?>

    
    <?php
    $title = "Vite & Gourmand";
$activePage = 'Contacts';

require '../components/navbar-accueil.php';
?>

<!-- H1 -->
    <main>
        <div class="text-center mt-3 ">
            <h1 class="text-vg-primary">Contactez-nous</h1>
            <p>Nous sommes à votre écoute pour toute demande</p>
            <hr>
        </div>

        <!-- Bloc des coordonnées -->
         <div class="d-flex flex-column flex-lg-row gap-3 mx-1 mb-3">
        <div class="d-flex row bg-custom-light rounded-4 mx-1 col-lg-6">
            <h5 class="text-vg-primary pt-2">Coordonnées</h5>
            <hr>

        <div class="mb-2">
            <i class="bi bi-geo-alt-fill text-vg-primary"></i>
            <span>Bordeaux, France</span>
        </div>

        <div class="mb-2">
            <i class="bi bi-envelope text-vg-primary"></i>
            <a href="mailto:contact@vite-gourmand.fr">contact@vite-gourmand.fr</a>
        </div>

        <div class="mb-2">
            <i class="bi bi-telephone-fill text-vg-primary"></i>
            <a href="tel:+33620304050">+33620304050</a>
        </div>

<img src="/ECF_V1/assets/vitaly-gariev-CCIpBxpKsuc-unsplash.jpg" class="col-md-12 lg-6 mt-3 rounded-5" alt="Julie & José patron de Vite & Gourmand">
<p class="text-center mt-3">Julie & José - Fondateurs de Vite & Gourmand</p>
        </div>

        <!-- Bloc formulaire -->
        <div class="bg-custom-light rounded-3 col-lg-6">
            <form action="/ECF_V1/frontend/pages/contact.php" method="post">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
          
                <div class="my-3">
                    <label class="form-label fw-semibold ps-1" for="titre">Titre:</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                </div>
          
                <div class="my-4">
                    <label class="form-label fw-semibold ps-1" for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="6" required></textarea>
                </div>

                <div class="my-4">
                    <label class="form-label fw-semibold ps-1" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <button type="submit" class="btn bg-custom btn-connexion ms-0 mt-5">Envoyer</button>
          
            </form>

        </div>
</div>

 

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

            <script src="/ECF_V1/JS/main.js"></script>
    </main>

    <!-- Footer -->

        <?php
 require '../components/footer.php';
?>