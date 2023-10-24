<?php

if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis l'URL
    $id = $_GET['id'];

    // Récupérer les informations de l'article depuis la base de données
    $sql = "SELECT * FROM images WHERE id_img = :id_img";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_img', $id);
    $stmt->execute();
    $images = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $nom_img = $_POST['nom_img'];
    $images = $_POST['image'];
    $ordre_affichage = $_POST['ordre_affichage'];
    
    // Vérifier si une nouvelle image a été téléchargée
    if (isset($_FILES['nouvelle_image']) && $_FILES['nouvelle_image']['error'] === UPLOAD_ERR_OK) {
        $nouvelle_image_name = $_FILES['nouvelle_image']['name'];
        $nouvelle_image_tmp_name = $_FILES['nouvelle_image']['tmp_name'];

        // Déplacer le fichier téléchargé vers le répertoire de destination
        $destination = 'public/assets/img/' . $nouvelle_image_name;
        if (move_uploaded_file($nouvelle_image_tmp_name, $destination)) {
            // Mettre à jour l'image dans la base de données avec le nouveau chemin
            $sql = "UPDATE images SET nom_img = :nom_img, image = :image, ordre_affichage = :ordre_affichage WHERE id_img = :id_img";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':nom_img', $nom_img);
            $stmt->bindParam(':image', $destination);
            $stmt->bindParam(':ordre_affichage', $ordre_affichage);
            $stmt->bindParam(':id_img', $id);
            $stmt->execute();
        } else {
            echo "Erreur lors du téléchargement de la nouvelle image.";
        }
    } else {
        // Aucune nouvelle image téléchargée, mettre à jour uniquement les autres champs
        $sql = "UPDATE images SET nom_img = :nom_img, ordre_affichage = :ordre_affichage WHERE id_img = :id_img";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':nom_img', $nom_img);
        $stmt->bindParam(':ordre_affichage', $ordre_affichage);
        $stmt->bindParam(':id_img', $id);
        $stmt->execute();
    }

    // Rediriger vers la page de gestion des images ou une autre page si nécessaire
    header('Location: index.php?page=4&c=2');
    exit();
}

?>

<!-- Afficher le formulaire de modification -->
<html>
<body>
    <h1>Modifier l'image</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="nom_img">Nom de l'image :</label>
        <input type="text" name="nom_img" value="<?= $images['nom_img']; ?>"><br>
        
        <label for="image">Chemin image :</label>
        <input type="text" name="image" value="<?= $images['image']; ?>"><br>

        <label for="nouvelle_image">Nouvelle Image :</label>
        <input type="file" name="nouvelle_image"><br>

        <label for="ordre_affichage">Ordre d'affichage :</label>
        <input type="text" name="ordre_affichage" value="<?= $images['ordre_affichage']; ?>"><br>
        
        <input type="submit" name="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>

