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

// Vérifier si le formulaire de confirmation a été soumis pour supprimer l'article
if (isset($_POST['submit'])) {
    // Supprimer l'article de la base de données
    $sql = "DELETE FROM articles WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Rediriger vers la page d'accueil ou une autre page de gestion si nécessaire
    header('Location: index.php?page=2&c=2');
    exit();
}
?>

<!-- Afficher le formulaire de confirmation pour la suppression -->
<html>
<body>
    <h1>Supprimer l'article</h1>
    <p>Voulez-vous vraiment supprimer cet article ?</p>
    <p>Titre : <?= $article['titre']; ?></p>
    <p>Texte : <?= $article['texte']; ?></p>
    <form method="post">
        <input type="submit" name="submit" value="Confirmer la suppression">
    </form>
</body>
</html>
