<?php
session_start();
session_destroy();
header("Location: authentification.php"); // Redirigez l'utilisateur vers la page d'authentification après la déconnexion
exit;
?>
