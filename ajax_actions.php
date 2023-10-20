<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && isset($_POST['produitID'])) {
    $action = $_POST['action'];
    $produitID = $_POST['produitID'];

    if ($action === 'ajouter_au_panier') {
        // Gérez l'ajout du produit au panier (ajoutez le produit à la variable de session du panier)
        // Vous pouvez également renvoyer une réponse au client pour indiquer que l'action a réussi
        // Par exemple : echo json_encode(['message' => 'Produit ajouté au panier']);
    } elseif ($action === 'ajouter_a_la_liste_de_souhaits') {
        // Gérez l'ajout du produit à la liste de souhaits (ajoutez le produit à la variable de session de la liste de souhaits)
        // Vous pouvez également renvoyer une réponse au client pour indiquer que l'action a réussi
        // Par exemple : echo json_encode(['message' => 'Produit ajouté à la liste de souhaits']);
    }
}
?>
