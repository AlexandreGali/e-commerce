<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $page = $_POST['page'];

    // Vérifions si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];

        // Déplacez le fichier téléchargé vers le répertoire de destination
        $destination = 'public/assets/img/' . $image_name;
        if (move_uploaded_file($image_tmp_name, $destination)) {
            // Le fichier a été téléchargé avec succès, nous pouvons maintenant insérer l'article dans la base de données
            $sql = "INSERT INTO articles (titre, texte, image, page) VALUES (:titre, :texte, :image, :page)";
            $stmt = $bdd->prepare($sql);

            if ($stmt->execute(array(':titre' => $titre, ':texte' => $texte, ':image' => $destination, ':page' => $page))) {
                // L'article a été ajouté avec succès, vous pouvez rediriger l'utilisateur vers la page d'accueil
                header("Location: index.php?page=2&c=1");
                exit();
            } else {
                echo "Erreur lors de l'ajout de l'article.";
            }
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    } else {
        echo "Erreur : Veuillez sélectionner une image à télécharger.";
    }
}

?>

<!-- Le reste du code HTML pour afficher le formulaire -->
<div class="titre-page">
    <h4>Contenu de la page</h4>
    <hr>
    <form method="post" action="index.php?page=2&c=1" enctype="multipart/form-data">
        <div class="from">
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" />
        </div>
        <div class="from">
            <label for="page">Page :</label>
            <select id="page" name="page">
                <option value="home">Home</option>
                <option value="about">About</option>
                <option value="shopall">Shop All</option>
            </select>
        </div>
        <hr class="hr-form">
        <div class="from">
            <label for="texte">Texte :</label>
            <textarea id="texte" name="texte"></textarea>
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