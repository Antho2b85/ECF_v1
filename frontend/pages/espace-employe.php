<?php

session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<?php
require '../../backend/database/database.php';
?>

<?php require '../components/head.php';
?>

<body>
    
    <?php
    $title = "Tableau de bord";
$activePage = 'Espace employé';

require '../components/navbar-accueil.php';
?>

    <!-- H1 -->
    <main class="container-fluid px-lg-3 px-1 py-4">
        <div class="text-center mt-3 col-lg-12">
            <h1 class="text-vg-primary">Espace employé</h1>
            <p>Gérez vos commandes, menus et avis clients</p>
            <hr>
        </div>
        <!-- End H1 -->


<section>
    <h5 class="text-vg-primary mb-3">Gestion des commandes</h5>
    
    <!-- Filtres -->
    <div class="row align-items-end mb-4 g-3">
        
        <div class="col-12 col-md-4 col-lg-3">
            <label for="statut" class="text-nowrap fw-bold">Filtre par statut :</label>
            <select class="form-select" id="statut">
                <option selected>Tous</option>
                <option value="1">Accepté</option>
                <option value="2">En préparation</option>
                <option value="3">En cours de livraison</option>
            </select>
        </div>

        <div class="col-12 col-md-5 col-lg-4">
            <label for="client" class="text-nowrap fw-bold">Filtrer par client :</label>
            <input type="text" id="client" class="form-control">
        </div>

        <!-- Bouton mobile -->
      <div class="col-12 text-center mt-3 d-md-none ms-4">
    <button type="button" class="btn btn-connexion me-5">
        Rechercher
    </button>
</div>

<!-- Bouton desktop -->
<div class="col-md-3 col-lg-2 d-none d-md-block">
    <button type="button" class="btn btn-connexion">
        Rechercher
    </button>
</div>
    </div>

<!-- Tableau -->
<div class="row">
    <div class="col-lg-6 col-12 border rounded-3">
        <div class="table-responsive">
        <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Client</th>
      <th scope="col">Statut</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">#1023</th>
      <td>Paul Durand</td>
      <td>
  <select class="form-select form-select-sm select-small me-4">
    <option>En attente</option>
    <option>Accepté</option>
    <option>En préparation</option>
    <option>En livraison</option>
    <option>Livré</option>
    <option>Terminé</option>
  </select>
</td>

   <td>
  <div class="d-flex gap-2 me-2">
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-eye text-primary"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-pencil text-warning"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-trash text-danger"></i></button>
  </div>
</td>

    </tr>
    <tr>
      <th scope="row">#1022</th>
      <td>Sophie Martin</td>
      <td>
        <select class="form-select form-select-sm select-small me-4">
    <option>En attente</option>
    <option>Accepté</option>
    <option>En préparation</option>
    <option>En livraison</option>
    <option>Livré</option>
    <option>Terminé</option>
  </select>
      </td>
      <td><div class="d-flex gap-2 me-2">
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-eye text-primary"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-pencil text-warning"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-trash text-danger"></i></button>
  </div></td>
    </tr>

    <tr>
      <th scope="row">#1018</th>
      <td>Jean Lefévre</td>
      <td><select class="form-select form-select-sm select-small me-4">
    <option>En attente</option>
    <option>Accepté</option>
    <option>En préparation</option>
    <option>En livraison</option>
    <option>Livré</option>
    <option>Terminé</option>
  </select></td>
      <td><div class="d-flex gap-2 me-2">
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-eye text-primary"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-pencil text-warning"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-trash text-danger"></i></button>
  </div></td>
    </tr>

    <tr>
      <th scope="row">#1018</th>
      <td>John Snow</td>
      <td><select class="form-select form-select-sm select-small me-4">
    <option>En attente</option>
    <option>Accepté</option>
    <option>En préparation</option>
    <option>En livraison</option>
    <option>Livré</option>
    <option>Terminé</option>
  </select></td>
      <td><div class="d-flex gap-2 me-2">
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-eye text-primary"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-pencil text-warning"></i></button>
    <button class="btn btn-sm btn-light p-1"><i class="bi bi-trash text-danger"></i></button>
  </div></td>
    </tr>
  </tbody>
</table>
</div>
    </div>


    <!-- Pop-up -->
 <div class="col-12 col-lg-6 text-center mx-auto border rounded-3">
<h5 class="text-vg-primary pt-2">Annuler la commande</h5>
<hr>
<span class="text-start d-block mb-1 fw-bold">Motif d'annulation :</span>

<div class="input-group justify-content-center">
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
<span class="text-start d-block mt-1 fw-bold">Mode de contact :</span>

<div class="d-flex gap-4">
<div class="form-check">
    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
    <label class="form-check-label text-start d-block mt-1" for="radioDefault1">
        Appel GSM
    </label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
    <label class="form-check-label text-start d-block mt-1" for="radioDefault1">
        Mail
    </label>
</div>
</div>

<div class="d-flex gap-5">
<button type="button" class="btn btn-secondary btn-sm text-start d-block my-2 px-3">Annuler</button>
<button type="button" class="btn btn-secondary btn-sm text-start d-block my-2 px-3 btn-danger">Confirmer l'annulation</button>
</div>

</div>
 <!-- End pop-up -->
</div>
</section>
<!-- End tableau -->


<!-- Bloc gestion des menus -->
 <div class="container-fluid py-2">
 <div class="row gap-lg-1 gap-md-1 d-flex justify-content-between">
 <div class="d-flex d-flex flex-column bg-custom-light col-md-4 col-lg-3 rounded-3 mb-2">
    <div class="d-flex">
        <h5 class="text-vg-primary text-center w-100 pt-1">Gestion des menus</h5>
        <hr>
    </div>


    <div class="d-flex justify-content-between">
    <div class="bg-warning-subtle col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
        <i class="bi bi-pen-fill ms-3"></i>
    <button type="button" class="btn btn-sm fw-bold btn-connexion">Modifier</button>
    </div>

<div class="bg-custom col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
    <i class="bi bi-trash text-white ms-2"></i>
    <button type="button" class="btn btn-sm text-white fw-bold btn-connexion">Supprimer</button>
</div>
</div>
</div>
<!-- End bloc des menus -->

<!-- Bloc gestion des plats -->
<div class="d-flex d-flex flex-column bg-custom-light col-md-4 col-lg-3 rounded-3 mb-2">
    <div class="d-flex">
        <h5 class="text-vg-primary text-center w-100 pt-1">Gestion des plats</h5>
        <hr>
    </div>
    
    
    <div class="d-flex justify-content-between">
        <div class="bg-warning-subtle col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
            <i class="bi bi-pen-fill ms-3"></i>
            <button type="button" class="btn btn-sm fw-bold btn-connexion">Modifier</button>
        </div>
        
        <div class="bg-custom col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
            <i class="bi bi-trash text-white ms-2"></i>
            <button type="button" class="btn btn-sm text-white fw-bold btn-connexion">Supprimer</button>
        </div>
    </div>
</div>
<!-- End gestion des plats -->

<!-- Bloc avis Gestion des commandes -->
<div class="d-flex d-flex flex-column bg-custom-light col-md-4 col-lg-3 rounded-3 mb-2">
    <div class="d-flex">
        <h5 class="text-vg-primary text-center w-100 pt-1">Gestion des commandes</h5>
        <hr>
    </div>
    
    
    <div class="d-flex justify-content-between">
        <div class="bg-warning-subtle col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
            <i class="bi bi-pen-fill ms-3"></i>
            <button type="button" class="btn btn-sm fw-bold btn-connexion">Modifier</button>
        </div>
        
        <div class="bg-custom col-md-6 col-6 rounded-3 d-flex justify-content-center align-items-center">
            <i class="bi bi-trash text-white ms-2"></i>
            <button type="button" class="btn btn-sm text-white fw-bold btn-connexion">Supprimer</button>
        </div>
    </div>
</div>
<!-- End bloc Gestion des commandes -->
</div>
</div>
<!-- End bloc div générale des blocs -->

<div class="container-fluid my-3">
    <h5 class="text-vg-primary fw-bold text-decoration-underline">Avis clients en attente</h5>

    <!-- Avis 1 -->
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="me-3">
            <span class="fw-bold me-2">Marie L</span>
            "Très bon service, je recommande !"
        </div>
        <div class="d-flex gap-2 mt-2 mt-md-0">
            <button class="btn btn-sm bg-success text-white btn-connexion">Valider</button>
            <button class="btn btn-sm bg-danger text-white btn-connexion">Refuser</button>
        </div>
    </div>
    <hr>

    <!-- Avis 2 -->
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="me-3">
            <span class="fw-bold me-2">Lucas P</span>
            "Les plats etaient délicieux, merci !"
        </div>
        <div class="d-flex gap-2 mt-2 mt-md-0">
            <button class="btn btn-sm bg-success text-white btn-connexion">Valider</button>
            <button class="btn btn-sm bg-danger text-white btn-connexion">Refuser</button>
        </div>
    </div>
    <hr>

    <!-- Avis 3 -->
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="me-3">
            <span class="fw-bold me-2">John Snow</span>
            "Portions généreuses et livraison nickel !"
        </div>
        <div class="d-flex gap-2 mt-2 mt-md-0">
            <button class="btn btn-sm bg-success text-white btn-connexion">Valider</button>
            <button class="btn btn-sm bg-danger text-white btn-connexion">Refuser</button>
        </div>
    </div>
    <hr>

    <!-- Avis 4 -->
    <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap">
        <div class="me-3">
            <span class="fw-bold me-2">Ned Stark</span>
            "Super accueil, repas vraiment savoureux !"
        </div>
        <div class="d-flex gap-2 mt-2 mt-md-0">
            <button class="btn btn-sm bg-success text-white btn-connexion">Valider</button>
            <button class="btn btn-sm bg-danger text-white btn-connexion">Refuser</button>
        </div>
    </div>
</div>




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