<?php
// Récupérez les informations du produit depuis votre base de données en fonction de l'ID du produit
$produit = getProduitDetails($_GET['id']); // Cette fonction doit être définie pour récupérer les détails du produit

// Gérez les actions lorsque l'utilisateur ajoute le produit au panier ou à la liste de souhaits
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] === 'ajouter_au_panier') {
        // Ajoutez le produit au panier
    } elseif ($_POST['action'] === 'ajouter_a_la_liste_de_souhaits') {
        // Ajoutez le produit à la liste de souhaits
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $produit['Nom']; ?></title>
    <!-- Styles CSS et JavaScript pour améliorer la convivialité de la page -->
    <!-- ... Votre HTML précédent ... -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').on('submit', function(event) {
            event.preventDefault(); // Empêche la soumission du formulaire par défaut

            var action = $(this).find('input[name="action"]').val(); // Récupère l'action (ajouter au panier ou à la liste de souhaits)
            var produitID = <?php echo $produit['ID']; ?>; // ID du produit

            $.ajax({
                type: 'POST',
                url: 'ajax_actions.php', // Page PHP qui gère les actions AJAX
                data: { action: action, produitID: produitID },
                success: function(response) {
                    // Traitez la réponse du serveur, par exemple, mettez à jour l'icône du panier dans l'interface utilisateur
                }
            });
        });
    });
</script>

<!-- ... Votre HTML précédent ... -->

</head>
<body>
    <!-- Affichez ici les détails du produit, y compris l'image, la description, le prix, les options de personnalisation, etc. -->
    <form method="POST">
        <input type="hidden" name="action" value="ajouter_au_panier">
        <button type="submit">Ajouter au panier</button>
    </form>
    <form method="POST">
        <input type="hidden" name="action" value="ajouter_a_la_liste_de_souhaits">
        <button type="submit">Ajouter à la liste de souhaits</button>
    </form>
</body>
</html>
