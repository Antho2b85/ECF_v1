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
$activePage = 'Galerie';

require '../components/navbar-accueil.php';
?>

<body>

<div class="text-center mt-3 col-lg-12">
            <h1 class="text-vg-primary">L’univers Vite & Gourmand</h1>
        </div>

    <main>

    <!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/ECF_V1/assets/emilia_baczynska-happy-easter-4154655_1920.jpg" class="d-block h-75 w-100 mx-auto" alt="Menu de Pâques">
      <div class="carousel-caption d-none d-md-block">
        <h5>Menu de Pâques</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/ECF_v1/assets/francky21-food-8192348_1920.jpg" class="d-block h-75 w-100 mx-auto" alt="Menu Gourmand"> 
      <div class="carousel-caption d-none d-md-block">
        <h5>Menu Gourmand</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/ECF_v1/assets/kiberstalker-ai-generated-8346161_1920.jpg" class="d-block h-75 w-100 mx-auto" alt="Menu de Fêtes">
      <div class="carousel-caption d-none d-md-block">
        <h5>Menu de Fêtes</h5>
      </div>
    </div>
     <div class="carousel-item">
      <img src="/ECF_v1/assets/sookie_cfw-buffet-617156_1920.jpg" class="d-block h-75 w-100 mx-auto" alt="Buffet de représentation">
      <div class="carousel-caption d-none d-md-block">
        <h5>Buffet de représentation</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/ECF_V1/assets/stocksnap-food-2616326_1920.jpg" class="d-block h-75 w-100 mx-auto" alt="Nos cuisines">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nos cuisines</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End carousel -->

<?php
 include '../components/footer.php';
?>
 

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

            <script src="/ECF_V1/JS/main.js"></script>


    </main>
</body>