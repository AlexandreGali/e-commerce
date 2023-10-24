<?php

if (isset($_GET['delete'])) {
    // Supprimer l'image de la base de données
    $id=intval($_GET['delete']);
    $sql = "DELETE FROM images WHERE id_img = :id_img";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_img', $id);
    $stmt->execute();
    // Rediriger vers la page de gestion des images ou une autre page si nécessaire
    header('Location: index.php?page=4&c=2');
    exit();
}

if (isset($_GET['id_img'])) {
    // Récupérer l'ID de l'image depuis l'URL
    $id_img = $_GET['id_img'];

    // Récupérer les informations de l'image depuis la base de données
    $sql = "SELECT * FROM images WHERE id_img = :id_img";

    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_img', $id_img);
    $stmt->execute();
    $images = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<html>
<body>
    <h1>Supprimer l'image</h1>
    <p>Voulez-vous vraiment supprimer cette image ?</p>
    <p>Nom de l'image : <?= $images['nom_img']; ?></p>
    <p>Chemin de l'image : <?= $images['image']; ?></p>
    <form method="post">
        <input type="submit" name="submit" value="Confirmer la suppression">
    </form>
</body>
</html>