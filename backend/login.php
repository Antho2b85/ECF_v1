<?php

session_start();
require './database/database.php';

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die('Requête invalide');
}


// Vérification qu'ils ne sont pas vides
if (empty($_POST['email']) || (empty($_POST['password']))) {
    echo 'Veuillez remplir les champs';
    exit;
}
// Récupération de email et password
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Vérifier que l'utilisateur existe en BDD
$stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :email");
$stmt->execute(['email' => $_POST['email']]);
$user = $stmt->fetch();

// Vérification mot de passe
if ($user && password_verify($_POST['password'], $user['password'])) {
    // Création de la session utilisateur
    $_SESSION['user_id'] = $user['utilisateur_id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_nom'] = $user['nom'];
    $_SESSION['user_prenom'] = $user['prenom'];
    $_SESSION['role_id'] = $user['role_id'];
    $_SESSION['user_telephone'] = $user['telephone'];
    $_SESSION['user_adresse']   = $user['adresse_postale'];


    // Redirection selon rôle
    if ($user['role_id'] == 1) {
        header('Location: /ECF_V1/frontend/pages/espace-admin.php');
        exit;
    } elseif ($user['role_id'] == 2) {
        header('Location: /ECF_V1/frontend/pages/espace-employe.php');
        exit;
    } elseif ($user['role_id'] == 3) {
        header('Location: /ECF_V1/frontend/pages/espace-utilisateur.php');
        exit;
    }
} else {
    echo 'Identifiants incorrects';
}
