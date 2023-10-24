<?php

if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis l'URL
    $id = $_GET['id'];

    // Récupérer les informations de l'article depuis la base de données
    $sql = "SELECT * FROM articles WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $texte = $_POST['texte'];
    $image = $_POST['image']; // Vous pouvez également gérer l'upload d'une nouvelle image si nécessaire

    // Mettre à jour l'article dans la base de données
    $sql = "UPDATE articles SET titre = :titre, texte = :texte, image = :image WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':titre', $titre);
    $stmt->bindParam(':texte', $texte);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Rediriger vers la page d'accueil ou une autre page de gestion si nécessaire
    header('Location: index.php?page=2&c=2');
    exit();
}
?>

<!-- Afficher le formulaire de modification -->
<html>
<body>
    <h1>Modifier l'article</h1>
    <form method="post">
        <label for="titre">Titre :</label>
        <input type="text" name="titre" value="<?= $article['titre']; ?>" required><br>
        
        <label for="texte">Texte :</label>
        <textarea name="texte" required><?= $article['texte']; ?></textarea><br>
        
        <label for="image">Image :</label>
        <input type="text" name="image" value="<?= $article['image']; ?>"><br>
        
        <input type="submit" name="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>