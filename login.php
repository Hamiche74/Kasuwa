<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Valider l'adresse e-mail et le mot de passe en comparaison avec la base de données (c'est un exemple fictif)
    $db_host = 'localhost';
    $db_user = 'votre_utilisateur_mysql';
    $db_pass = 'votre_mot_de_passe_mysql';
    $db_name = 'nom_de_votre_base_de_donnees';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

    $sql = "SELECT ID_Utilisateur, Mot_De_Passe FROM Utilisateurs WHERE Adresse_Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if ($stmt->num_rows === 1 && password_verify($password, $hashed_password)) {
        // Authentification réussie
        session_start();
        $_SESSION['user_id'] = $user_id; // Vous pouvez stocker d'autres informations de session si nécessaire
        header("Location: accueil.php"); // Redirigez l'utilisateur vers la page d'accueil
        exit;
    } else {
        // Authentification échouée
        echo "Authentification échouée. Veuillez réessayer.";
    }

    $stmt->close();
    $conn->close();
}
?>
