<?php require '../components/head.php';
?>

<body>
    
    <?php
    $title = "Tableau de bord";
    require '../components/navbar-accueil.php';
    ?>

<div class="container-fluid mt-2 border bg-custom-light rounded-4">
    <div class="row align-items-center">

        <!-- Colonne texte -->
        <div class="col py-3">
            <h5 class="fw-bold m-0">Bienvenue, Utilisateur !</h5><hr>
            <p class="small text-muted mt-1 d-none d-lg-block">Ravi de vous revoir.</p>
        </div>

        <!-- Colonne image -->
        <div class="col-auto py-3 pe-3">
            <img src="/assets/ernestflowerss-boy-8847075_1920.jpg"
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
    
    <p>Nom:</p>
    <p>Email:</p>
    <p>Rôle:</p>
</div>


<div class="container-fluid bg-custom-light rounded-4 mt-2">
    <div>
    <h5 class="fw-bold pt-3 small">Mes commandes:</h5><hr>
    </div>

    <div class="d-flex flex-column border border-black rounded-3 mb-3">
        <p class="text-vg-primary">Commande #</p>
        <p>Date:</p>
        <p>Menu:</p>

<div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">Statut:</p>
        <button type="button" class="btn bg-custom-green btn-connexion align-self-end mb-1">
            Voir le détail
        </button>
        </div>
    </div>
    
 <div class="d-flex flex-column border border-black rounded-3">
        <p class="text-vg-primary">Commande #</p>
        <p>Date:</p>
        <p>Menu:</p>

<div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">Statut:</p>
        <button type="button" class="btn bg-custom-green btn-connexion align-self-end mb-1">
            Voir le détail
        </button>
        </div>
    </div>
</div>

<div class="container-fluid rounded-4 pt-2 mt-2">
    <div>
        <h5 class="fw-bold">Actions rapides</h5>
        <hr>
    </div>

<div class="mb-2 pb-2 d-flex gap-3 justify-content-lg-between">
    <button class="btn bg-custom-green btn-connexion" type="button">Voir tous les menus</button>
    <button class="btn bg-custom-green btn-connexion" type="button">Nouvelle commande</button>
</div>

</div>


















<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <?php require "../components/footer.php";
     ?>

</body>