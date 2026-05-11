<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require '../../backend/database/database.php';

// Vérification de l'id
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: /ECF_V1/frontend/pages/menus.php');
    exit;
}

$id = (int)$_GET['id'];

// Récupération du menu
$stmt = $pdo->prepare('SELECT * FROM menu WHERE menu_id = ?');
$stmt->execute([$id]);
$menu = $stmt->fetch(PDO::FETCH_ASSOC);

// Si menu introuvable
if (!$menu) {
    header('Location: /ECF_V1/frontend/pages/menus.php');
    exit;
}

// Images associées aux menus (selon menu_id)
$images = [
    1 => '/ECF_V1/assets/francky21-food-8192348_1920.jpg',
    2 => '/ECF_V1/assets/emilia_baczynska-happy-easter-4154655_1920.jpg',
    3 => '/ECF_V1/assets/kiberstalker-ai-generated-8346161_1920.jpg',
    4 => '/ECF_V1/assets/u_s3w4e9hqv7-video-9825949_1920.jpg',
];
$image = $images[$id] ?? '/ECF_V1/assets/francky21-food-8192348_1920.jpg';

?>

<?php require '../components/head.php'; ?>

<body>
    <?php
    $title = "Vite & Gourmand";
$activePage = 'menuG';
require '../components/navbar-accueil.php';
?>

    <main class="container py-4">

        <!-- Bouton retour -->
        <a href="/ECF_V1/frontend/pages/menus.php" class="btn btn-connexion bg-custom mb-4">
            <i class="bi bi-arrow-left"></i> Retour aux menus
        </a>

        <!-- Carte détail menu -->
        <div class="card border-0 rounded-4 shadow-sm bg-custom-light p-4">

            <div class="row g-4 align-items-start">

                <!-- Image -->
                <div class="col-12 col-lg-5">
                    <img src="<?= htmlspecialchars($image) ?>"
                         class="img-fluid rounded-4 w-100"
                         style="max-height: 350px; object-fit: cover;"
                         alt="<?= htmlspecialchars($menu['titre']) ?>">
                </div>

                <!-- Infos -->
                <div class="col-12 col-lg-7">
                    <h1 class="text-vg-primary mb-2"><?= htmlspecialchars($menu['titre']) ?></h1>
                    <hr>

                    <p class="mb-3"><?= htmlspecialchars($menu['description']) ?></p>

                    <p class="mb-1"><strong>Personnes minimum :</strong> <?= $menu['nombre_personne_minimum'] ?> personnes</p>
                    <p class="mb-1"><strong>Prix :</strong> À partir de <strong><?= $menu['prix_par_personne'] ?>€</strong> / personne</p>
                    <p class="mb-1"><strong>Régime :</strong> <?= htmlspecialchars($menu['regime'] ?? 'Non précisé') ?></p>

                    <?php if ($menu['quantite_restante'] !== null): ?>
                        <p class="mb-1 fst-italic">Stock : <?= $menu['quantite_restante'] ?> disponibles</p>
                    <?php endif; ?>

                    <hr>

                    <!-- Conditions importantes -->
                    <div class="alert alert-warning rounded-4 small" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Conditions :</strong> Toute commande doit être passée au minimum 48h avant la date de prestation.
                        Le règlement s'effectue à la commande.
                    </div>

                    <!-- Bouton commander -->
                    <div class="d-flex justify-content-end mt-3">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <a href="/ECF_V1/frontend/pages/commande.php?menu_id=<?= $menu['menu_id'] ?>"
                               class="btn bg-custom-green btn-connexion px-4">
                                Commander ce menu
                            </a>
                        <?php else: ?>
                            <div class="text-center">
                                <p class="text-muted small mb-2">Vous devez être connecté pour commander.</p>
                                <a href="/ECF_V1/frontend/pages/create-account.php"
                                   class="btn bg-custom btn-connexion">
                                    Se connecter / S'inscrire
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>

    </main>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script src="/ECF_V1/JS/main.js"></script>

    <?php require '../components/footer.php'; ?>

</body>