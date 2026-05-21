<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /ECF_V1/frontend/index.php');
    exit;
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php require '../components/head.php';
require '../../backend/database/database.php';
?>

    
    <?php
    $title = "Tableau de bord";
$activePage = 'Mon espace';

require '../components/navbar-accueil.php';
?>

<!-- Message commande enregistré -->
<?php if (isset($_GET['success'])): ?>
<script>
    alert("Votre commande a bien été enregistrée !");
</script>
<?php endif; ?>
<!-- End message enregistré -->

<!-- Récupération de l'id utilisateur -->
    <?php
    $userId = $_SESSION['user_id'];
?>
<!-- End récupération id utilisateur -->

<!-- Requête pour récuperer les details de la commande utilisateur (avec ALIAS et JOIN) -->
<?php
$stmt = $pdo -> prepare('SELECT c.numero_commande, c.date_commande, c.date_prestation, c.heure_livraison, c.nombre_personne, c.statut, m.titre AS menu_nom
FROM commande c JOIN menu m ON c.menu_id = m.menu_id WHERE c.utilisateur_id = ?
ORDER BY c.date_commande DESC
');
$stmt->execute([$userId]);
$commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!-- End récupération details commande -->


<div class="container-fluid mt-2 border bg-custom-light rounded-4">
    <div class="row align-items-center">

        <!-- Colonne texte -->
        <div class="col py-3">
            <h5 class="fw-bold m-0">Bienvenue, <?= htmlspecialchars($_SESSION['user_prenom']) ?>!</h5><hr>
            <p class="small text-muted mt-1 d-none d-lg-block">Ravi de vous revoir.</p>
        </div>

        <!-- Colonne image en dur (mettre l'input de type file prochainement)-->
        <div class="col-auto py-3 pe-3">
            <img src="/ECF_V1/assets/ernestflowerss-boy-8847075_1920.jpg"
                 class="img-fluid rounded-circle"
                 style="width: 120px; height: 120px; object-fit: cover;"
                 alt="Photo de profil">
        </div>

    </div>
</div>


<div class="container-fluid rounded-4 mt-2">

    
    <div class="d-flex justify-content-between align-items-center">
        
        <h5 class="small m-0 fw-bold">Mes informations :</h5>

        <button type="button" class="btn bg-custom-green btn-connexion mt-2">
            Modifier mes informations
        </button>

    </div>
    <hr>
    
    <p>Nom: <?= htmlspecialchars($_SESSION['user_nom']) ?></p>
    <p>Email: <?= htmlspecialchars($_SESSION['user_email']) ?></p>
    <p>Rôle: <?= $_SESSION['role_id'] == 1 ? 'Administrateur' : ($_SESSION['role_id'] == 2 ? 'Employé' : 'Utilisateur') ?></p>
</div>

<!-- condition pour afficher le menu -->
<?php
$maxBlocs = 2;

$commandesAffichees = array_slice($commandes, 0, $maxBlocs);

// Calcule de combien de blocs vides il faut ajouter
$blocsVides = $maxBlocs - count($commandesAffichees);
?>

<?php foreach ($commandesAffichees as $commande): ?>

<div class="container-fluid bg-custom-light rounded-4 mt-2">
    <div>
        <h5 class="fw-bold pt-3 small">Mes commandes:</h5><hr>
    </div>

    <div class="d-flex flex-column border border-black rounded-3 mb-3 px-1">
        <p class="text-vg-primary">Commande #<?= $commande['numero_commande'] ?></p>
        <p>Date : <?= $commande['date_commande'] ?></p>
        <p>Menu : <?= $commande['menu_nom'] ?></p>

        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-0">Statut : <?= $commande['statut'] ?></p>
            <button type="button" class="btn bg-custom-green btn-connexion align-self-end mb-1">
                Voir le détail
            </button>
        </div>
    </div>
</div>

<?php endforeach; ?>


<?php for ($i = 0; $i < $blocsVides; $i++): ?>

<div class="container-fluid bg-custom-light rounded-4 mt-2">
    <div>
        <h5 class="fw-bold pt-3 small">Mes commandes:</h5><hr>
    </div>

    <div class="d-flex flex-column border border-black rounded-3 mb-3 px-1">
        <p class="text-vg-primary">Commande # — Aucune commande</p>
        <p>Date : —</p>
        <p>Menu : —</p>

        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-0">Statut : —</p>
            <button type="button" class="btn bg-custom-green btn-connexion align-self-end mb-1" disabled>
                Voir le détail
            </button>
        </div>
    </div>
</div>

<?php endfor; ?>

<!-- Bloc action rapide -->
<div class="container-fluid rounded-4 pt-2 mt-2">
    <div>
        <h5 class="fw-bold">Actions rapides</h5>
        <hr>
    </div>

<div class="mb-2 pb-2 d-flex gap-3 justify-content-lg-between">
    <a href="/ECF_V1/frontend/pages/menus.php" class="btn bg-custom-green btn-connexion">Voir tous les menus</a>
    <a href="/ECF_V1/frontend/pages/menus.php" class="btn bg-custom-green btn-connexion">Nouvelle commande</a>
</div>

</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>


    <?php require "../components/footer.php";
?>