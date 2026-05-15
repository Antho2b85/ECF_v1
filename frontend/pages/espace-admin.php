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
$activePage = 'Espace administrateur';

require '../components/navbar-accueil.php';
?>

    <!-- H1 -->
    <main class="container-fluid px-lg-3 px-1 py-4">
        <div class="text-center mt-3 col-lg-12">
            <h1 class="text-vg-primary">Espace Administrateur</h1>
            <p>Gerez les comptes employés et les statistiques de commandes</p>
            <hr>
        </div>
        <!-- End H1 -->

        <!-- Bloc gestion des employés -->
         <div class="row g-2">
         <div class="border col-12 col-md-6 py-3 bg-custom-light">
<div>
    <h5 class="text-vg-primary text-decoration-underline">Gestion des comptes employés</h5>
    <span class="fw-bold">Créer un compte employé</span>
</div>

<div class="py-3">


    <div class="row">
<div class="col-12 col-md-12 d-flex ">
    <label for="email" class="fw-bold pt-3 pe-3">Email:</label>
    <input type="text" id="email" class="form-control">
</div>
</div>

<div class="row">
    <div class="col-12 col-md-12 d-flex  mt-3">
        <label for="password" class="fw-bold pt-3 text-nowrap pe-2">Mot de passe:</label>
        <input type="password" id="password" class="form-control">
    </div>
    
</div>

<div class="text-center">
<button type="button" class="btn btn-connexion bg-custom mt-3">Créer le compte</button>
</div>

</div>
</div>

<!-- Bloc liste des employés -->
<div class="border col-12 col-md-6 py-3 ps-3 bg-custom-light">
    <span class="text-vg-primary fw-bold text-decoration-underline">Liste des employés</span>

    <div class="col-lg-12 col-12">
        <div class="table-responsive pt-3">
        <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Email</th>
      <th scope="col">Statut</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">marie@exemple.com</th>
      <td>
         <button type="button" class="btn btn-sm btn-success">Actif</button>
      </td>
      <td>
           <button type="button" class="btn btn-sm btn-danger">Désactiver</button>
</td>
    </tr>


    <tr>
      <th scope="row">marie@exemple.com</th>
      <td>
        <button type="button" class="btn btn-sm btn-success">Actif</button>
      </td>
      <td>
          <button type="button" class="btn btn-sm btn-danger">Désactiver</button>
</td>
    </tr>

    
  
    <tr>
      <th scope="row">marie@exemple.com</th>
      <td>
         <button type="button" class="btn btn-sm btn-secondary">Inactif</button>
      </td>
      <td>
          <button type="button" class="btn btn-sm btn-danger">Désactiver</button>
</td>
    </tr>
  </tbody>
</table>
</div>
    </div>
</div>
</div>

<!-- Bloc statistiques -->
<div class="row my-3">
    
    <div class="col-12 col-lg-6">
    <h5 class="text-vg-primary text-decoration-underline">Statistiques des commandes:</h5>
  <canvas id="myChart"></canvas>
</div>

<!-- Blov chiffres d'affaires -->
<div class="col-12 col-lg-6 py-3">
    <h5 class="text-vg-primary text-decoration-underline">Chiffre d'affaires:</h5>
    

    <div class="row">
    <div class="col-12 col-md-12 col-lg-6">
    <label for="client" class="fw-bold pt-3 text-nowrap pe-2">Filtrer par menu:</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Tous</option>
        <option value="1">Gourmand</option>
        <option value="2">Fête</option>
        <option value="3">Pâques</option>
        <option value="4">Récéption</option>
    </select>
</div>

<div class="col-12 col-md-12 col-lg-6">
        <label for="client" class="fw-bold pt-3 text-nowrap pe-2">Filtrer par période:</label>
        <select class="form-select" aria-label="Default select example">
        <option selected>7 derniers jours</option>
        <option value="1">Janvier</option>
        <option value="2">Fevrier</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Août</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Decembre</option>
    </select>
</div>
</div>
    </div>
</div>
</div>

<!-- Bloc gestion des commandes -->
<div class="py-3">
    <h5 class="text-vg-primary text-decoration-underline">Gestion des commandes:</h5>
</div>

<div class="row container-fluid text-center ms-lg-0 ms-1 pb-3 gap-2 justify-content-evenly">

<div class="border rounded-3 col-12 col-md-12 col-lg-2 py-4 bg-custom-light fw-bold">
    <i class="bi bi-journal-check"></i>
    <span>Commandes à traiter</span>
<div class="text-center mt-2">
    <i class="bi bi-4-square-fill"></i>
    </div>
</div>


<div class="border rounded-3 col-12 col-md-12 col-lg-2 py-4 bg-custom-light fw-bold">
    <i class="bi bi-truck"></i>
    <span>Commandes en livraison</span>
    <div class="text-center mt-2">
    <button type="button" class="btn btn-primary btn-sm btn-connexion">Voir</button>
</div>
</div>

<div class="border rounded-3 col-12 col-md-12 col-lg-2 py-4 bg-custom-light fw-bold">
    <i class="bi bi-arrow-counterclockwise"></i>
    <span>Commandes en attente de retour</span>
    <div class="text-center mt-2">
    <button type="button" class="btn btn-success btn-sm btn-connexion">Valider</button>
</div>
</div>

<div class="border rounded-3 col-12 col-md-12 col-lg-2 py-4 bg-custom-light fw-bold">
    <i class="bi bi-star-fill"></i>
    <span>Avis en attente</span>
    <div class="text-center mt-2">
    <button type="button" class="btn btn-success btn-sm btn-connexion">Valider</button>
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
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Menu Gourmand', 'Menu Fête', 'Menu de Pâques', 'Récéption & séminaire'],
      datasets: [{
        label: 'Nombre de commandes par menu',
        data: [12, 19, 3, 5],
        backgroundColor: ['red','yellow', 'green','orange'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

                
            </body>