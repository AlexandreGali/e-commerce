<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

<!-- ////////// SHOP GOLDEN HOUR ////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="inc/golden-hour">    Golden Hour</a>
</div>

<div class="titre-shop-champignon">
  <h1>Shop Golden Hour</h1>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3><i>Golden</i> Hour</h3>
      <p>- Delicate and lean to sip -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> It’s time to tap into your inner artiste and let loose, baby. Lemon balm and L-theanine enhance focus and promote relaxation for a feel-good night in (or out).</p>
      <div class="trois-ingredients-dessins">
        <div class="ingre-dessin1">
          <img src="../../e-commerce/public/assets/img/golden/lemonbalm.png" alt="lemonBalm">
          <p><b>LEMON BALM</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/golden/l-theanine.png" alt="l-theanine">
          <p><b>L-THEANINE</b></p>
        </div>
      </div>
    </div>
      <div class="flavor-notes">
        <p><b>FLAVOR NOTES</b>: Bright and bracing, with notes of warm citrus, lemongrass, and leafy herbs. The bite you crave, but full of zest.</p>
        <p><b>COMPLEX CITRUS</b></p>
        <div class="barres-flavors-4">
          <div class="barre-flavor-couleur4"></div>
          <div class="barre-flavor-blanc4"></div>
        </div>
        <p><b>HERBACEOUS</b></p>
        <div class="barres-flavors-5">
          <div class="barre-flavor-couleur5"></div>
          <div class="barre-flavor-blanc5"></div>
        </div>
        <p><b>BITTER</b></p>
        <div class="barres-flavors-6">
          <div class="barre-flavor-couleur6"></div>
          <div class="barre-flavor-blanc6"></div>
        </div>
      </div>
    
  </div>
  <div class="presentation-bouteille">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-bottle.png" class="image-bg5" alt="BottleGolden">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-bottle-hover.png" class="image-overlay5" alt="BottleGoldenHover">
    <div class="texte-presentation-bottle">
      <h4>Golden Hour</h4>
      <p>BOTTLE</p>
      <a href="">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-can.png" class="image-bg5" alt="canGolden">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-can-hover.png" class="image-overlay5" alt="canGoldenHover">
    <div class="texte-presentation-can">
      <h4>Golden Hour</h4>
      <p>CAN</p>
      <a href="">SHOP NOW</a>
    </div>
  </div>
</div>

</body>
</html>