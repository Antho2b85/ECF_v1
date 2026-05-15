

<!-- Navbar de Bootstrap -->
  <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary bg-custom">
    <div class="container-fluid">
      <a class="navbar-brand brand-title" href="#"><?php echo $title ?></a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($activePage === 'Accueil') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($activePage === 'Galerie') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/galerie.php">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($activePage === 'menuG') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/menus.php"
              >Nos menus & événements</a
            >
          </li>
          <li class="nav-item">
            <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1): ?>
            <a class="nav-link <?= ($activePage === 'Espace administrateur') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/espace-admin.php">Espace administrateur</a>
            <?php elseif (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 2): ?>
            <a class="nav-link <?= ($activePage === 'Espace employé') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/espace-employe.php">Espace employé</a>
            <?php elseif (isset($_SESSION['user_id'])): ?>
            <a class="nav-link <?= ($activePage === 'Mon espace') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/espace-utilisateur.php">Mon espace</a>
            <?php else: ?>
            <a class="nav-link <?= ($activePage === 'A propos') ? 'active' : '' ?>" href="/ECF_V1/frontend/pages/a-propos.php">A propos</a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($activePage === 'Contacts') ? 'active' : '' ?>" aria-current="page" href="/ECF_V1/frontend/pages/contact.php">Contacts</a>
          </li>
        </ul>


        <!-- Add button logout -->
<?php if (isset($_SESSION['user_id'])): ?>
  <a href="/ECF_V1/backend/logout.php" class="btn btn-connexion bg-custom-light mx-5">Déconnexion</a>

  <?php else: ?>
        <div class="dropdown dropdown-navbar">
          <button type="button" class="btn btn-connexion bg-custom-light dropdown-toggle" data-bs-toggle="dropdown">Connexion/S'inscrire</button>
<div class="dropdown-menu p-3 mt-2 bg-custom-light text-center text-md-start" data-bs-auto-close="outside" style="width: 260px;">
        <form action="/ECF_V1/backend/login.php" method="post">
          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <div class="mb-3">

                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" required>
            </div>


            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" required>
            </div>

              
            <div class="mb-2 text-center">
            <a href="/ECF_V1/frontend/pages/create-account.php" class="text-vg-dark text-decoration-underline">Pas encore de compte ? S'inscrire</a>
            </div>

            <div class="d-flex justify-content-center gap-2 w-100">
            <button class="btn bg-custom btn-connexion">Connexion</button>
            </div>

            <div class="mt-2 text-center">
            <a href="#" class="text-vg-dark text-decoration-underline">Mot de passe oublié</a>

            </div>

        </form>
    </div>
        </div>
        <?php endif; ?>


      </div>
    </div>
  </nav>
  <!-- End navbar -->

