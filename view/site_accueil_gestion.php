<?php 

if (isset($_GET['delete'])) {
    // Supprimer l'article de la base de données
    $id=intval($_GET['delete']);
    $sql = "DELETE FROM articles WHERE id = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
 
}

// Requête pour récupérer les articles depuis la base de données
$sql = "SELECT * FROM articles ORDER BY date_creation DESC";
$result = $bdd->query($sql);

if ($result && $result->rowCount() > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Titre</th><th>Texte</th><th>Date de création</th><th>Page</th><th>Photo</th><th>Modifier</th><th>Supprimer</th></tr>';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['titre'] . '</td>';
        echo '<td>' . $row['texte'] . '</td>';
        echo '<td>' . $row['date_creation'] . '</td>';
        echo '<td>' . $row['page'] . '</td>';
        echo '<td><img src="' . $row['image'] . '" alt="' . $row['titre'] . '" style="width:100px"></td>';
        echo '<td><a href="index.php?page=2&c=3&id=' . $row['id'] . '"><i class="fa-solid fa-gears" style="color: orange;"></i>
        </i></a></td>';
        echo '<td>
                <a href="index.php?page=2&c=2&delete=' . $row['id'] . '" onclick="return(confirm(\'Voulez-vous supprimer ?\'))">
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