<?php 

if (isset($_GET['delete'])) {
    // Supprimer l'article de la base de données
    $id=intval($_GET['delete']);
    $sql = "DELETE FROM images WHERE id_img = :id_img";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_img', $id_img);
    $stmt->execute();
 
}

// Requête pour récupérer les articles depuis la base de données
$sql = "SELECT * FROM images ORDER BY date_creation DESC";
$result = $bdd->query($sql);

if ($result && $result->rowCount() > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nom de l\'image</th><th>Date de création</th><th>Id produit</th><th>Ordre affichage</th><th>Image</th><th>Modifier</th><th>Supprimer</th></tr>';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['id_img'] . '</td>';
        echo '<td>' . $row['nom_img'] . '</td>';
        echo '<td>' . $row['date_creation'] . '</td>';
        echo '<td>' . $row['id_produit'] . '</td>';
        echo '<td>' . $row['ordre_affichage'] . '</td>';
        echo '<td><img src="' . $row['image'] . '" alt="' . $row['nom_img'] . '" style="width:100px"></td>';
        echo '<td><a href="index.php?page=4&c=3&id=' . $row['id_img'] . '"><i class="fa-solid fa-gears" style="color: orange;"></i>
        </i></a></td>';
        echo '<td>
                <a href="index.php?page=4&c=4&delete=' . $row['id_img'] . '" onclick="return(confirm(\'Voulez-vous supprimer ?\'))">
                <i class="fa-solid fa-trash" style="color: red;"></i>
                </a>
            </td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Aucun article trouvé.";
}
?>