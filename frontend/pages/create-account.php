<?php require '../components/head.php';
?>

<body>
    <?php
    $title = "Vite & Gourmand";
    require '../components/navbar-accueil.php';
    ?>

<!-- Title -->
<div class="text-center">
    <h1 class="pt-2">Création de compte</h1>
    <br>
    <p>Remplissez ce formulaire pour créer votre compte</p>
</div>

<!-- Renseignements -->
 <div class="bg-custom-light px-2 pb-2">
<form action="" method="post">

<div>
    <label class="form-label my-2" for="name">Nom:</label>
    <input class="form-control my-2" type="text" id="name">
</div>

<div>
    <label class="form-label my-2" for="prenom">Prénom:</label>
    <input class="form-control my-2" type="text" id="prenom">
</div>

<div>
    <label class="form-label my-2" for="tel">Numéro de téléphone:</label>
    <input class="form-control my-2" type="tel" id="tel">
</div>

<div>
    <label class="form-label my-2" for="email">Adresse mail:</label>
    <input class="form-control my-2" type="email" id="email">
</div>

<div>
    <label class="form-label my-2" for="adresse">Adresse postale:</label>
    <input class="form-control my-2" type="text" id="adresse">
</div>

<div class="position-relative">
    <label class="form-label my-2" for="password">Mot de passe sécurisé:</label>
    <input class="form-control my-2" type="password" id="password">
    <span class="toggle-password position-absolute" onclick="togglePassword('password')">
        <i class="bi bi-eye-slash" id="icon-password"></i>
    </span>
        <p class="small"><em>Minimum 10 caractères (1 majuscule, 1 chiffre, 1 caractère spécial)</em></p>
</div>

<div class="position-relative">
    <label class="form-label my-2" for="confirm">Confirmation mot de passe:</label>
    <input class="form-control my-2" type="password" id="confirm">
    <span class="toggle-password position-absolute" onclick="togglePassword('password')">
        <i class="bi bi-eye-slash" id="icon-password"></i>
    </span>
</div>
</form>
 </div>

<div class="d-flex flex-column align-items-center">
    <button type="button" class="btn bg-custom-green btn-connexion mt-3">
            Créer mon compte
        </button>
        <br>
      <p class="text-center">Un email de bienvenue vous sera envoyé automatiquement</p>
</div>



<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

            <script src="/JS/main.js"></script>
<?php require "../components/footer.php";
     ?>
            </body>