<?php

session_start();
// Vider les variables de la session
$_SESSION = [];

// Supprimer le cookie de session
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

session_destroy();
header('Location: /ECF_V1/frontend/index.php');
exit;