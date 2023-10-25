<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

<!-- ////////// SHOP CHAMPIGNON DREAMS ////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="inc/champignon-dreams">    Champignon Dreams</a>
</div>

<div class="titre-shop-champignon">
  <?php
      $sql = "SELECT * FROM produits WHERE id_produit = 2";
      $stmt = $bdd->query($sql);
      $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($produits as $produit) {
          ?>
        <h1>Shop <?= $produit['nom_produit']; ?></h1>
        <?php
                }
            ?>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3><?= $produit['nom_produit']; ?></h3>
      
      <p>- Juicy and balanced -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> Ease into the evening with relaxing reishi mushroom and passion flower. This dreamy duo is meant for kicking back with a snack and chillin’.</p>
      <div class="trois-ingredients-dessins">
        <div class="ingre-dessin1">
          <img src="../../e-commerce/public/assets/img/champignon/reishimushroom.png" alt="ReishiMushroom">
          <p><b>REISHI MUSHROOM</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/champignon/passionflower.png" alt="PassionFlower">
          <p><b>PASSION FLOWER</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/champignon/l-theanine.png" alt="L-Theanine">
          <p><b>L-THEANINE</b></p>
        </div>
      </div>
    </div>
      <div class="flavor-notes">
        <p><b>FLAVOR NOTES</b>: Juicy and balanced, with notes of sticky summer strawberries, bitter grapefruit, and earth. A good time in a glass.</p>
        <p><b>JAMMY FRUIT</b></p>
        <div class="barres-flavors-1">
          <div class="barre-flavor-couleur1"></div>
          <div class="barre-flavor-blanc1"></div>
        </div>
        <p><b>BITTER</b></p>
        <div class="barres-flavors-2">
          <div class="barre-flavor-couleur2"></div>
          <div class="barre-flavor-blanc2"></div>
        </div>
        <p><b>EARTHY</b></p>
        <div class="barres-flavors-3">
          <div class="barre-flavor-couleur3"></div>
          <div class="barre-flavor-blanc3"></div>
        </div>
      </div>
    
  </div>

  <?php

// Récupérez les informations sur le premier produit souhaité
$id_produit1 = 1;
$sql_produit1 = "SELECT * FROM produits WHERE id_produit = :id_produit1";
$stmt_produit1 = $bdd->prepare($sql_produit1);
$stmt_produit1->bindParam(':id_produit1', $id_produit1, PDO::PARAM_INT);
$stmt_produit1->execute();
$produit1 = $stmt_produit1->fetch(PDO::FETCH_ASSOC);

// Récupérez les images associées au premier produit par ordre d'affichage
$sql_images1 = "SELECT * FROM images WHERE id_produit = :id_produit1 ORDER BY ordre_affichage";
$stmt_images1 = $bdd->prepare($sql_images1);
$stmt_images1->bindParam(':id_produit1', $id_produit1, PDO::PARAM_INT);
$stmt_images1->execute();
$images1 = $stmt_images1->fetchAll(PDO::FETCH_ASSOC);

// Récupérez les informations sur le deuxième produit souhaité
$id_produit2 = 2;
$sql_produit2 = "SELECT * FROM produits WHERE id_produit = :id_produit2";
$stmt_produit2 = $bdd->prepare($sql_produit2);
$stmt_produit2->bindParam(':id_produit2', $id_produit2, PDO::PARAM_INT);
$stmt_produit2->execute();
$produit2 = $stmt_produit2->fetch(PDO::FETCH_ASSOC);

// Récupérez les images associées au deuxième produit par ordre d'affichage
$sql_images2 = "SELECT * FROM images WHERE id_produit = :id_produit2 ORDER BY ordre_affichage";
$stmt_images2 = $bdd->prepare($sql_images2);
$stmt_images2->bindParam(':id_produit2', $id_produit2, PDO::PARAM_INT);
$stmt_images2->execute();
$images2 = $stmt_images2->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="presentation-bouteille" id="bottle-champignon3">
    <?php foreach ($images1 as $image) { 
        if ($image['ordre_affichage'] == 1) { ?>
            <img src="back-office/<?= $image['image'] ?>" alt="<?= $image['nom_img'] ?>">
        <?php } 
    } ?>
    <div class="texte-presentation-bottle">
        <h4><?= $produit1['nom_produit']; ?></h4>
        <p>BOTTLE</p>
        <a href="index.php?page=3&product=bottle">SHOP NOW</a>
    </div>
</div>
<div class="presentation-can">
    <?php foreach ($images2 as $image) { 
        if ($image['ordre_affichage'] == 2) { ?>
            <img src="back-office/<?= $image['image'] ?>" alt="<?= $image['nom_img'] ?>">
        <?php } 
    } ?>
    <div class="texte-presentation-can">
        <h4><?= $produit2['nom_produit']; ?></h4>
        <p>CAN</p>
        <a href="index.php?page=3&product=can">SHOP NOW</a>
    </div>
</div>



</div>


</body>
</html>