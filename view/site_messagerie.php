<div class="titre-page"><h1>Gestion de la messagerie</h1></div>

<div class="titre-page">
    <div class="sous-titre">
        <h3>Messages reçus</h3>
    </div>
</div>

<?php 

// Récupère tous les utilisateurs de la base de données
$query = "SELECT * FROM clients";
$result = $bdd->query($query);

// Vérifie s'il y a des utilisateurs dans la base de données
if ($result->rowCount() > 0) {
    // Affiche une table pour afficher les utilisateurs
    echo "<h1>Liste des messages reçus :</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Message</th><th>Date d'envoi</th><th>Supprimer</th></tr>";

    // Boucle à travers les résultats et affiche chaque utilisateur dans une ligne de tableau
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo '<td>' . $row['date_envoi'] . '</td>';
        echo "<td><a href='delete_user.php?id=" . $row['id'] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer le message de cet utilisateur ?\")'><i class='fa-solid fa-trash' style='color: red;'></i></a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    // Aucun utilisateur trouvé
    echo "Aucun utilisateur trouvé.";
}

?>