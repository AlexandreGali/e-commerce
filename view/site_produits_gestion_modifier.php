<?php

if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis l'URL
    $id = $_GET['id'];

    // Récupérer les informations de l'article depuis la base de données
    $sql = "SELECT * FROM produits WHERE id_produit = :id_produit";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_produit', $id);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom = $_POST['nom_produit'];
    $description = $_POST['description_produit'];
    $prix = $_POST['prix_produit'];
    $poids = $_POST['poids_produit'];
    $stock = $_POST['stock_produit'];
    $can = $_POST['can'];
    $bottle = $_POST['bottle'];

    if ($can != $produit['can']) {
        if ($can != 1) {
            $can = null; 
        }
    }

    if ($bottle != $produit['bottle']) {
        if ($bottle != 1) {
            $bottle = null; 
        }
    }

    // Mettre à jour l'article dans la base de données
    $sql = "UPDATE produits SET nom_produit = :nom_produit, description_produit = :description_produit, prix_produit = :prix_produit, poids_produit = :poids_produit, stock_produit = :stock_produit, can = :can, bottle = :bottle WHERE id_produit = :id_produit";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':nom_produit', $nom);
    $stmt->bindParam(':description_produit', $description);
    $stmt->bindParam(':prix_produit', $prix);
    $stmt->bindParam(':poids_produit', $poids);
    $stmt->bindParam(':stock_produit', $stock);
    $stmt->bindParam(':can', $can);
    $stmt->bindParam(':bottle', $bottle);
    $stmt->bindParam(':id_produit', $id);
    $stmt->execute();

    // Rediriger vers la page d'accueil ou une autre page de gestion si nécessaire
    header('Location: index.php?page=6&c=2');
    exit();
}
?>

<!-- Afficher le formulaire de modification -->
<html>
<body>
    <h1>Modifier l'article</h1>
    <form method="post">
        <label for="nom_produit">Nom produit :</label>
        <input type="text" name="nom_produit" value="<?= $produit['nom_produit']; ?>" required><br>
        
        <label for="description_produit">Description produit :</label>
        <input type="text" name="description_produit" value="<?= $produit['description_produit']; ?>" required><br>
        
        <label for="prix_produit">Prix produit :</label>
        <input type="number" name="prix_produit" value="<?= $produit['prix_produit']; ?>" required><br>

        <label for="poids_produit">Poids produit :</label>
        <input type="number" name="poids_produit" value="<?= $produit['poids_produit']; ?>" required><br>

        <label for="stock_produit">Stock produit :</label>
        <input type="number" name="stock_produit" value="<?= $produit['stock_produit']; ?>" required><br>

        <label for="can">CAN :</label>
        <input type="number" name="can" value="<?= $produit['can']; ?>"><br>

        <label for="bottle">BOTTLE :</label>
        <input type="number" name="bottle" value="<?= $produit['bottle']; ?>"><br>
        
        <input type="submit" name="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>