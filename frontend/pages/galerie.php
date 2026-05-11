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
    <main>








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