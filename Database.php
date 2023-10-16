<?php
// Informations de connexion à la base de données MySQL
$host = 'localhost'; // Adresse du serveur MySQL
$user = 'votre_utilisateur'; // Nom d'utilisateur MySQL
$pass = 'votre_mot_de_passe'; // Mot de passe MySQL
$dbname = 'nom_de_votre_base_de_donnees'; // Nom de la base de données

try {
    // Connexion à la base de données MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Afficher les erreurs de PDO en cas de problème
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création des tables
    $sql = "
    -- Création de la table Utilisateurs
CREATE TABLE Utilisateurs (
    ID_Utilisateur INT PRIMARY KEY,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    Adresse_Email VARCHAR(100) UNIQUE NOT NULL,
    Mot_De_Passe VARCHAR(255) NOT NULL,
    Adresse_Livraison VARCHAR(255),
    Historique_Commandes TEXT
);

-- Création de la table Produits
CREATE TABLE Produits (
    ID_Produit INT PRIMARY KEY,
    Nom_Produit VARCHAR(100) NOT NULL,
    Description TEXT,
    Prix DECIMAL(10, 2) NOT NULL,
    Stock_Disponible INT NOT NULL,
    Categorie VARCHAR(50),
    Image_Produit VARCHAR(255)
);

-- Création de la table Commandes
CREATE TABLE Commandes (
    ID_Commande INT PRIMARY KEY,
    ID_Utilisateur INT,
    Date_Commande DATE,
    Statut_Commande VARCHAR(20),
    Total_Commande DECIMAL(10, 2),
    FOREIGN KEY (ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur)
);

-- Création de la table Details_Commande
CREATE TABLE Details_Commande (
    ID_Detail_Commande INT PRIMARY KEY,
    ID_Commande INT,
    ID_Produit INT,
    Quantite INT,
    Prix_Unitaire_Commande DECIMAL(10, 2),
    Sous_Total DECIMAL(10, 2),
    FOREIGN KEY (ID_Commande) REFERENCES Commandes(ID_Commande),
    FOREIGN KEY (ID_Produit) REFERENCES Produits(ID_Produit)
);

-- Création de la table Panier
CREATE TABLE Panier (
    ID_Panier INT PRIMARY KEY,
    ID_Session VARCHAR(50), -- Pour les utilisateurs non enregistrés
    ID_Utilisateur INT, -- Pour les utilisateurs enregistrés
    ID_Produit INT,
    Quantite INT,
    FOREIGN KEY (ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur),
    FOREIGN KEY (ID_Produit) REFERENCES Produits(ID_Produit)
);

-- Création de la table Avis_Produit
CREATE TABLE Avis_Produit (
    ID_Avis INT PRIMARY KEY,
    ID_Utilisateur INT,
    ID_Produit INT,
    Note INT,
    Commentaire TEXT,
    FOREIGN KEY (ID_Utilisateur) REFERENCES Utilisateurs(ID_Utilisateur),
    FOREIGN KEY (ID_Produit) REFERENCES Produits(ID_Produit)
);

-- Création de la table Categories_Produit
CREATE TABLE Categories_Produit (
    ID_Categorie INT PRIMARY KEY,
    Nom_Categorie VARCHAR(50) UNIQUE
);

-- Création de la table Promotions
CREATE TABLE Promotions (
    ID_Promotion INT PRIMARY KEY,
    Nom_Promotion VARCHAR(100),
    Description_Promotion TEXT,
    Pourcentage_Reduction DECIMAL(5, 2),
    Date_Debut DATE,
    Date_Fin DATE
);

-- Création de la table Codes_Reduction
CREATE TABLE Codes_Reduction (
    ID_Code_Reduction INT PRIMARY KEY,
    Code VARCHAR(20) UNIQUE,
    Pourcentage_Reduction DECIMAL(5, 2),
    Date_Debut_Valide DATE,
    Date_Fin_Valide DATE,
    Utilise BOOLEAN DEFAULT FALSE
);

-- Création de la table Expédition
CREATE TABLE Expedition (
    ID_Expedition INT PRIMARY KEY,
    Nom_Methode VARCHAR(50),
    Cout_Expedition DECIMAL(10, 2),
    Delai_Livraison INT -- ou DATE, selon les besoins
);

-- Création de la table Paiements
CREATE TABLE Paiements (
    ID_Paiement INT PRIMARY KEY,
    Nom_Methode VARCHAR(50),
    Description TEXT,
    -- Autres colonnes pertinentes pour les paiements
);

-- Création de la table Messages_Contact
CREATE TABLE Messages_Contact (
    ID_Message INT PRIMARY KEY,
    Nom_Expediteur VARCHAR(100),
    Adresse_Email_Expediteur VARCHAR(100),
    Sujet VARCHAR(255),
    Message TEXT,
    Date_Envoi TIMESTAMP
);

-- Création de la table Gestion_Stocks
CREATE TABLE Gestion_Stocks (
    ID_Stock INT PRIMARY KEY,
    ID_Produit INT,
    Quantite_En_Stock INT,
    Emplacement_Stockage VARCHAR(255)
);
";

    // Exécution des requêtes SQL
    $pdo->exec($sql);

    echo "Base de données et tables créées avec succès.";

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
