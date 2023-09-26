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
  <h1>Shop Champignon Dreams</h1>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3><i>Champignon</i> Dreams</h3>
      <p>- Juicy and balanced -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> Ease into the evening with relaxing reishi mushroom<br> and passion flower. This dreamy duo is meant for kicking back with a snack and chillin’.</p>
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
  <div class="presentation-bouteille" id="bottle-champignon3">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-bottle.png" class="image-bg5" alt="BottleChampignon">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-bottle-hover.png" class="image-overlay5" alt="BottleChampignonHover">
    <div class="texte-presentation-bottle">
      <h4>Champignon dreams</h4>
      <p>BOTTLE</p>
      <a href="index.php?page=3&product=bottle">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-can.png" class="image-bg5" alt="CanChampignon">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-can-hover.png" class="image-overlay5" alt="CanChampignonHover">
    <div class="texte-presentation-can">
      <h4>Champignon dreams</h4>
      <p>CAN</p>
      <a href="index.php?page=3&product=can">SHOP NOW</a>
    </div>
  </div>
</div>

</body>
</html>