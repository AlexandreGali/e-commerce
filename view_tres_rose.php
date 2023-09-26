<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

<!-- ////////// SHOP TRES ROSE ////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="inc/tres-rose">    Très Rosé</a>
</div>

<div class="titre-shop-champignon">
  <h1>Shop Très Rosé</h1>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3><i>Très</i> Rosé</h3>
      <p>- Crisp and refreshing -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> Unwind and rejuvenate with the uplifting power of lion's mane and saffron. This dynamic duo is all about bringing a mood-boosting buzz without<br> the booze.</p>
      <div class="trois-ingredients-dessins">
        <div class="ingre-dessin1">
          <img src="../../e-commerce/public/assets/img/tres-rose/saffron.png" alt="lionsMane">
          <p><b>LION'S MANE</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/tres-rose/l-theanine.png" alt="l-theanine">
          <p><b>L-THEANINE</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/tres-rose/saffron.png" alt="saffron">
          <p><b>SAFFRON</b></p>
        </div>
      </div>
    </div>
      <div class="flavor-notes">
        <p><b>FLAVOR NOTES</b>: Bold and balanced with notes of tart raspberry and soft, earthy<br> rooibos.</p>
        <p><b>FRUITY</b></p>
        <div class="barres-flavors-7">
          <div class="barre-flavor-couleur7"></div>
          <div class="barre-flavor-blanc7"></div>
        </div>
        <p><b>ACIDIC</b></p>
        <div class="barres-flavors-8">
          <div class="barre-flavor-couleur8"></div>
          <div class="barre-flavor-blanc8"></div>
        </div>
        <p><b>FLORAL</b></p>
        <div class="barres-flavors-9">
          <div class="barre-flavor-couleur9"></div>
          <div class="barre-flavor-blanc9"></div>
        </div>
      </div>
    
  </div>
  <div class="presentation-bouteille">
    <img src="../../e-commerce/public/assets/img/tres-rose/produit-rose-can.png" class="image-bg5" alt="canRose">
    <img src="../../e-commerce/public/assets/img/tres-rose/produit-rose-can-hover.png" class="image-overlay5" alt="canRoseHover">
    <div class="texte-presentation-bottle">
      <h4>Très Rosé</h4>
      <p>CAN</p>
      <a href="index.php?page=5&product=can">SHOP NOW</a>
    </div>
  </div>
  
  <div class="container-photo-rose-produit">
    <img src="../../e-commerce/public/assets/img/tres-rose/photo-rose-produit.png" alt="canRose">
  </div>
</div>

</body>
</html>