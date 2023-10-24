<?php 

if (isset($_GET['delete'])) {
    // Supprimer l'article de la base de données
    $id=intval($_GET['delete']);
    $sql = "DELETE FROM produits WHERE id_produit = :id_produit";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id_produit', $id);
    $stmt->execute();
 
}

// Requête pour récupérer les articles depuis la base de données
$sql = "SELECT * FROM produits";
$result = $bdd->query($sql);

if ($result && $result->rowCount() > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nom</th><th>Description</th><th>Prix</th><th>Poids(kg)</th><th>Stock</th><th>Can</th><th>Bottle</th><th>Modifier</th><th>Supprimer</th></tr>';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['id_produit'] . '</td>';
        echo '<td>' . $row['nom_produit'] . '</td>';
        echo '<td class="description_p">' . $row['description_produit'] . '</td>';
        echo '<td>' . $row['prix_produit'] . '</td>';
        echo '<td>' . $row['poids_produit'] . '</td>';
        echo '<td>' . $row['stock_produit'] . '</td>';
        echo '<td>' . $row['can'] . '</td>';
        echo '<td>' . $row['bottle'] . '</td>';
        // echo '<td><img src="' . $row['image'] . '" alt="' . $row['titre'] . '" style="width:100px"></td>';
        echo '<td><a href="index.php?page=6&c=3&id=' . $row['id_produit'] . '"><i class="fa-solid fa-gears" style="color: orange;"></i>
        </i></a></td>';
        echo '<td>
                <a href="index.php?page=6&c=2&delete=' . $row['id_produit'] . '" onclick="return(confirm(\'Voulez-vous supprimer ?\'))">
                <i class="fa-solid fa-trash" style="color: red;"></i>
                </a>
            </td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "Aucun produit trouvé.";
}
?>