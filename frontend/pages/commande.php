<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: /ECF_V1/frontend/pages/login.php');
    exit;
}


if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!-- Récupération des informations du connécté -->
<?php
$nom = $_SESSION['user_nom'];
$email = $_SESSION['user_email'];
$prenom = $_SESSION['user_prenom'];
$gsm = $_SESSION['user_telephone'];
$adresse = $_SESSION['user_adresse'];
?>

<!-- Récupére l'id d'un menu -->
<?php require '../../backend/database/database.php'; ?>
<?php
if (!isset($_GET['menu_id']) || !is_numeric($_GET['menu_id'])) {
    header('Location: /ECF_V1/frontend/pages/menus.php');
    exit;
}
$menuId = (int)$_GET['menu_id'];
if ($menuId <= 0) {
    header('Location: /ECF_V1/frontend/pages/menus.php');
    exit;
}

?>
<?php
$stmt = $pdo->prepare('SELECT * FROM menu WHERE menu_id = ?');
$stmt->execute([$menuId]);
$menu = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$menu) {
    header('Location: /ECF_V1/frontend/pages/menus.php');
    exit;
}
?>
<!-- End récupération id d'un menu -->


<?php require __DIR__ . '/../components/head.php'; ?>

 <?php
$title = "Vite & Gourmand";
$activePage = "Commande";

require __DIR__ . '/../components/navbar-accueil.php';
?>


        <!-- H1 -->
    <main class="container-fluid px-lg-3 px-1 py-4">
        <div class="text-center mt-3 col-lg-12">
            <h1 class="text-vg-primary">Commande d'un menu</h1>
            <hr class="text-vg-primary">
        </div>
        <!-- End H1 -->

<!-- Bloc informations -->
<div class="d-flex gap-2">
    <i class="bi bi-pen text-success"></i>
    <h5 class="fw-bold text-decoration-underline">Vos informations:</h5>
</div>

<div class="row bg-custom-light">

<div class="col-12 col-lg-6 col-md-12">
    <label for="nom" class="fw-bold pt-3 pe-3">Nom:</label>
    <input type="text" id="nom" class="form-control" name="nom" value="<?= htmlspecialchars($nom) ?>">
</div>

<div class="col-12 col-lg-6 col-md-12">
            <label for="prenom" class="fw-bold pt-3 pe-3">Prenom:</label>
    <input type="text" id="prenom" class="form-control" name="prenom" value="<?= htmlspecialchars($prenom) ?>">
</div>

<div class="col-12 col-lg-6 col-md-12">
    <label for="email" class="fw-bold pt-3 pe-3">Email:</label>
    <input type="email" id="email" class="form-control" name="email" value="<?= htmlspecialchars($email) ?>">
</div>

<div class="col-12 col-lg-6 col-md-12">
    <label for="tel" class="fw-bold pt-3 pe-3">GSM:</label>
    <input type="tel" id="tel" class="form-control" name="tel" value="<?= htmlspecialchars($gsm) ?>">
</div>
</div>
<hr class="text-vg-primary">

<!-- Bloc détails de la préstation -->
 <div class="d-flex gap-2">
    <i class="bi bi-file-check text-success"></i>
    <h5 class="fw-bold text-decoration-underline">Détails de la prestation:</h5>
 </div>

 <div class="row bg-custom-light">

 <div class="col-12 col-lg-6 col-md-12">
    <label for="adresse" class="fw-bold pt-3 pe-3">Adresse de livraison:</label>
    <input type="text" id="adresse" class="form-control" name="adresse" value="<?= htmlspecialchars($adresse) ?>">
</div>

 <div class="col-12 col-lg-6 col-md-12">
<label for="date" class="fw-bold pt-3 pe-3">Date de l'événement:</label>
<input type="date" id="date"  name="date" class="form-control">
</div>

 <div class="col-12 col-lg-6 col-md-12">
    <label for="time" class="fw-bold pt-3 pe-3">Heure souhaitée:</label>
    <input type="time" id="time" class="form-control" name="time">
</div>
</div>
<hr class="text-vg-primary">

<!-- Bloc menu -->
 <div class="d-flex gap-2">
<i class="bi bi-book text-success"></i>
    <h5 class="fw-bold text-decoration-underline">Votre menu:</h5>
 </div>


 <div class="row bg-custom-light">
<div class="mt-3 col-12 col-lg-6 col-md-12">
    <h5 class="text-vg-primary"><?= htmlspecialchars($menu['titre']) ?></h5>
<label for="numberClient" class="fw-bold pt-3 pe-3">Nombre de personnes:</label>
<input type="number" id="numberClient" class="form-control" name="number">
<p class="bg-success-subtle">10% de reduction dès 9 personnes réservés !</p>
</div>
</div>
<hr class="text-vg-primary">

<!-- Blov détails -->
<h5 class="fw-bold text-decoration-underline">Détails du prix:</h5>

<div class="row">
    <div class="mt-3 col-12 col-lg-6 col-md-12">
        <span> <?= htmlspecialchars($menu['titre'])?></span>
    </div>
<div class="mt-3 col-12 col-lg-6 col-md-12">
        <span id="totalPrice"></span>
</div>
</div>
<hr>

<div class="row">
    <div class="mt-3 col-12 col-lg-6 col-md-12">
        <span>Frais de livraison</span>
    </div>
<div class="mt-3 col-12 col-lg-6 col-md-12">
        <span>7,50€</span>
</div>
</div>
<hr>

<div class="row">
    <div class="mt-3 col-12 col-lg-6 col-md-12">
        <span>Total</span>
    </div>
<div class="mt-3 col-12 col-lg-6 col-md-12">
        <span id="totalFinal"></span>
</div>
</div>
<hr>

<p>Livraison hors Bordeaux +0,59€ par km supplémentaire</p>

<div class="text-center py-3">
    <button type="button" class="btn btn-success btn-connexion">Confirmer la commande</button>
</div>
</main> 

<!-- Envoi la valeur de "prix_par_personne" au fichier main.js -->
<script>
    const prixParPersonne = <?= (float)$menu['prix_par_personne'] ?>;
</script>
<!-- ========================================================== -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

            <script src="/ECF_V1/JS/main.js"></script>

<?php
 require '../components/footer.php';
?>