<?php

session_start();

require './database/database.php';

// Vérificaton CSRF
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die('Requête invalide');
}

// Récupération des données
$nom = trim($_POST['name']);
$prenom = trim($_POST['prenom']);
$tel = trim($_POST['tel']);
$email = trim($_POST['email']);
$adresse = trim($_POST['adresse']);
$password = trim($_POST['password']);
$confirm = trim($_POST['confirm']);

// Vérif champs vides
if (empty($nom) || empty($prenom) || empty($tel) || empty($email) || empty($adresse) || empty($password) || empty($confirm)) {
    die('Veuillez remplir tous les champs obligatoire');
}

// Validation email
function validerEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

if (!validerEmail($email)) {
    die('Adresse email invalide');
}

// Validation mot de passe identique
if ($password !== $confirm) {
    die('Les mots de passe ne correspondent pas');
}

// Vérifier la force du mot de passe
if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z0-9]).{10,}$/', $password)) {
    die('Le mot de passe ne respecte pas les critères de sécurité');
}

// Vérifier si l'email existe déjà
$stmt = $pdo->prepare('SELECT email FROM utilisateur WHERE email =?');
$stmt->execute(['email']);

if ($stmt->fetch()) {
    die("Cet email est déjà utilisé");
}

//Hash du mot de passe
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insertion en BDD avec requête préparé (statement(stmt))
try {
    $stmt = $pdo->prepare('INSERT INTO utilisateur(nom, prenom, telephone, email, adresse_postale, password, role_id) VALUES(?, ?, ?, ?, ?, ?, ?)');
    $stmt->execute([$nom, $prenom, $tel, $email, $adresse, $hash, 3]);
} catch (PDOException $e) {
    die('Une erreur est survenue, veuillez réessayer');
}

// Redirigé apres inscription
header('Location: /ECF_V1/frontend/index.php?register=success');
