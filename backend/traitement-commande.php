<?php

session_start();

require './database/database.php';

// Vérificaton CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die('Requête invalide');
}

// Vérification si l'user est bien connécté
if (!isset($_SESSION['user_id'])) {
    header('Location: /ECF_V1/frontend/index.php');
    exit;
}

// Récupération des données
$menu_id = $_POST['menu_id'];
$utilisateur_id = $_SESSION['user_id'];
$csrf = $_POST['csrf_token'];

// Données de calcul
$prix_par_personne = $_POST['prix_par_personne'];
$prix_livraison = $_POST['prix_livraison'];
$prix_total = $_POST['prix_total'];

// Données utilisateur
$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);
$email = trim($_POST['email']);
$tel = trim($_POST['tel']);
$adresse = trim($_POST['adresse']);

// Données de la prestation
$date_prestation = $_POST['date'];
$heure_livraison = $_POST['time'];
$nombre_personne = $_POST['number'];

// Calcul du prix de la commande
if ($nombre_personne <= 0) {
    die("Nombres de personnes invalide");
}
$prix_total = ($prix_par_personne * $nombre_personne) + $prix_livraison;
if (empty($date_prestation) || empty($heure_livraison)) {
    die("Date ou heure manquante");
}

// Insertion en BDD avec requête préparé (statement(stmt))
try {
    $stmt = $pdo->prepare('INSERT INTO commande (date_commande, date_prestation, heure_livraison, prix_menu, nombre_personne, prix_livraison, statut, utilisateur_id, menu_id)
    VALUES(NOW(), ?, ?, ?, ?, ?, "En attente", ?, ?)');
    $stmt->execute([$date_prestation, $heure_livraison, $prix_total, $nombre_personne, $prix_livraison, $utilisateur_id, $menu_id]);
} catch (PDOException $e) {
    die('Une erreur est survenue, veuillez réessayer');
}
header('Location: /ECF_V1/frontend/pages/espace-utilisateur.php?success=1');
exit;
