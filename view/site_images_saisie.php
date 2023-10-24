<?php
$produits = []; // Initialisation du tableau de produits

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_img = $_POST['nom_img'];
    $id_produit = $_POST['id_produit'];
    $ordre_affichage = $_POST['ordre_affichage'];


    // Vérifions si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

        // Déplacez le fichier téléchargé vers le répertoire de destination
        $destination = '../back-office/public/assets/img/' . $image_name;
        if (move_uploaded_file($image_tmp_name, $destination)) {
            // Le fichier a été téléchargé avec succès, nous pouvons maintenant insérer l'image dans la base de données
            $sql = "INSERT INTO images (nom_img, image, id_produit, ordre_affichage) VALUES (:nom_img, :image, :id_produit, :ordre_affichage)";
            $stmt = $bdd->prepare($sql);

            if ($stmt->execute(array(':nom_img' => $nom_img, ':image' => $destination, ':id_produit' => $id_produit, ':ordre_affichage' => $ordre_affichage))) {
                // L'image a été ajoutée avec succès, vous pouvez rediriger l'utilisateur vers la page d'accueil
                header("Location: index.php?page=4&c=1");
                exit();
            } else {
                echo "Erreur lors de l'ajout de l'image.";
            }
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    } else {
        echo "Erreur : Veuillez sélectionner une image à télécharger.";
    }
}

// Récupérer les produits depuis la base de données
$sql = "SELECT id_produit, nom_produit, can, bottle FROM produits";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Le reste du code HTML pour afficher le formulaire -->
<div class="titre-page">
    <h4>Contenu de la page</h4>
    <hr>
    <form method="post" action="index.php?page=4&c=1" enctype="multipart/form-data">
        <div class="from">
            <label for="nom_img">Nom de l'image :</label>
            <input type="text" id="nom_img" name="nom_img" />
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="id_produit">Produit concerné :</label>
            <select id="id_produit" name="id_produit">
            <?php foreach ($produits as $produit) { ?>
                <option value="<?= $produit['id_produit'] ?>">
                    <?= $produit['nom_produit'] . ' - ' . (isset($produit['can']) && $produit['can'] === '1' ? 'Can' : 'Bottle'); ?>
                </option>
            <?php } ?>
            </select>
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="ordre_affichage">Ordre d'affichage :</label>
            <input id="ordre_affichage" type="text" name="ordre_affichage">
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="image">Image :</label>
            <input id="file" class="input-file" type="file" name="image">
        </div>
        <hr class="hr-form">
        <div class="from">
            <input type="submit" value="Valider la saisie">
        </div>
    </form>
</div>
