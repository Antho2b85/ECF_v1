<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php require '../components/head.php';
?>

<body>
    <main>
    
    <?php
    $title = "Vite & Gourmand";
$activePage = 'A propos';

require '../components/navbar-accueil.php';
?>


<section class="container py-4">

  <div class="d-flex align-items-center justify-content-center my-5">
    <span class="flex-grow-1 border-top border-2 border-vg"></span>
    <h2 class="text-center mx-3 text-vg-primary">À propos</h2>
    <span class="flex-grow-1 border-top border-2 border-vg"></span>
  </div>

  <p class="my-5">
    Vite & Gourmand est une entreprise familiale dirigée par Julie et José,
    passionnés par la cuisine depuis plus de 25 ans. Nous proposons une cuisine
    généreuse, authentique et préparée avec soin pour accompagner vos événements.
  </p>

  <p class="mt-3">
    Nous mettons l’accent sur la qualité, la fraîcheur et la convivialité.
    Chaque prestation est pensée pour offrir un moment gourmand, simple et chaleureux.
  </p>

  <p class="mt-3">
    Organisation, ponctualité et écoute sont au cœur de notre travail.
    Nous nous adaptons à chaque demande pour garantir une prestation soignée et sur‑mesure.
  </p>

</section>


<img 
src="/ECF_V1/assets/rebecca-hansen-_WpB9l8_Kn4-unsplash.jpg"
class="w-100 object-fit-cover rounded"
style="max-height: 500px;"
alt="Photo gourmande">
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