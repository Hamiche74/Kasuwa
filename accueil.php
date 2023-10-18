<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue dans notre boutique en ligne</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        .feature-products {
            margin: 20px 0;
        }
        .promo-section {
            background-color: #f4f4f4;
            padding: 20px;
        }
        .category-section {
            margin: 20px 0;
        }
        .testimonial-section {
            margin: 20px 0;
        }
        .product {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .product-image {
            max-width: 100%;
        }
        .add-to-cart {
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
        }
        .add-to-wishlist {
            color: #007bff;
            text-decoration: none;
            margin-left: 10px;
        }
        .cart-button {
            background-color: #28a745;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
        }
        .wishlist-button {
            color: #28a745;
            text-decoration: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue dans notre boutique en ligne</h1>
        <p>
            Cher client,
            Bienvenue sur notre boutique en ligne. Vous pouvez explorer notre vaste gamme de produits, passer des commandes et profiter de nos offres spéciales.
        </p>

        <!-- Produits en vedette -->
        <div class="feature-products">
            <h2>Produits en vedette</h2>
            <p>Découvrez nos produits les plus populaires, choisis avec soin pour vous offrir la meilleure qualité.</p>

            <div class="product">
                <img src="product1.jpg" alt="Produit 1" class="product-image">
                <h3>Nom du Produit 1</h3>
                <p>Description du Produit 1</p>
                <a href="ajouter_au_panier.php?produit=1" class="add-to-cart">Ajouter au panier</a>
                <a href="ajouter_a_la_liste_de_souhaits.php?produit=1" class="add-to-wishlist">Ajouter à la liste de souhaits</a>
            </div>

            <div class="product">
                <img src="product2.jpg" alt="Produit 2" class="product-image">
                <h3>Nom du Produit 2</h3>
                <p>Description du Produit 2</p>
                <a href="ajouter_au_panier.php?produit=2" class="add-to-cart">Ajouter au panier</a>
                <a href="ajouter_a_la_liste_de_souhaits.php?produit=2" class="add-to-wishlist">Ajouter à la liste de souhaits</a>
            </div>
        </div>

        <!-- Promotions -->
        <div class="promo-section">
            <h2>Promotions en cours</h2>
            <p>Profitez de nos promotions spéciales et économisez sur vos achats.</p>
            <p>10% de réduction sur tous les produits de la catégorie X. Utilisez le code "PROMO10" à la caisse.</p>
        </div>

        <!-- Catégories de produits -->
        <div class="category-section">
            <h2>Catégories de produits</h2>
            <p>Découvrez nos catégories de produits pour trouver ce que vous cherchez plus facilement.</p>
            <a href="categorie.php?nom=category1">Catégorie 1</a>
            <a href="categorie.php?nom=category2">Catégorie 2</a>
        </div>

        <!-- Témoignages clients -->
        <div class="testimonial-section">
            <h2>Témoignages de nos clients</h2>
            <p>Ce que nos clients disent de nous :</p>
            <blockquote>
                "J'adore cette boutique en ligne ! Les produits sont de grande qualité."
                <cite>Client Satisfait 1</cite>
            </blockquote>
            <blockquote>
                "Livraison rapide et excellent service client."
                <cite>Client Satisfait 2</cite>
            </blockquote>
        </div>

        <p>
            N'hésitez pas à parcourir notre boutique et à nous contacter si vous avez des questions. Merci de faire confiance à notre boutique en ligne.
        </p>

        <a href="deconnexion.php">Déconnexion</a> <!-- Lien de déconnexion vers un fichier PHP de déconnexion -->
    </div>
</body>
</html>
