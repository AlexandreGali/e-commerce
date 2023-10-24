<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom_produit'];
    $description = $_POST['description_produit'];
    $prix = $_POST['prix_produit'];
    $poids = $_POST['poids_produit'];
    $stock = $_POST['stock_produit'];
    $can = $_POST['can'];
    $bottle = $_POST['bottle'];


        // Le fichier a été téléchargé avec succès, nous pouvons maintenant insérer l'article dans la base de données
        $sql = "INSERT INTO produits (nom_produit, description_produit, prix_produit, poids_produit, stock_produit, can, bottle) VALUES (:nom_produit, :description_produit, :prix_produit, :poids_produit, :stock_produit, :can, :bottle)";
        $stmt = $bdd->prepare($sql);

        if (empty($can)) {
            $can = null;
        }
        
        if (empty($bottle)) {
            $bottle = null;
        }

        if ($stmt->execute(array(':nom_produit' => $nom, ':description_produit' => $description, ':prix_produit' => $prix, ':poids_produit' => $poids, ':stock_produit' => $stock, ':can' => $can, ':bottle' => $bottle))) {
            // L'article a été ajouté avec succès, vous pouvez rediriger l'utilisateur vers la page d'accueil
            header("Location: index.php?page=6&c=1");
            exit();
        } else {
            echo "Erreur lors de l'ajout du produit.";
        }
    } 

?>

<div class="titre-page">
    <h4>Contenu de la page</h4>
    <hr>
    <form method="post" action="index.php?page=6&c=1" enctype="multipart/form-data">
        <div class="from">
            <label for="nom_produit">Nom :</label>
            <input type="text" id="nom_produit" name="nom_produit" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="description_produit">Description :</label>
            <input type="text" id="description_produit" name="description_produit" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="prix_produit">Prix :</label>
            <input type="number" id="prix_produit" name="prix_produit" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="poids_produit">Poids :</label>
            <input type="number" id="poids_produit" name="poids_produit" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="stock_produit">Stock :</label>
            <input type="number" id="stock_produit" name="stock_produit" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="can">CAN ("1" ou laisser le champ vide) :</label>
            <input type="number" id="can" name="can" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="bottle">BOTTLE ("1" ou laisser le champ vide) :</label>
            <input type="number" id="bottle" name="bottle" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <input type="submit" value="Valider la saisie">
        </div>
    </form>
</div>