<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>
    
<!-- ////////// SHOP PURPLE LUNE ////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="inc/purple-lune">    Purple Lune</a>
</div>

<div class="titre-shop-champignon">
  <h1>Shop Purple Lune</h1>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3><i>Purple</i> Lune</h3>
      <p>- Rich and Delicate -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> Fight off fatigue with a mind-mellowing mix of<br> ashwagandha and tart cherry. Raise your glass as you feel the stress slip away and <br>your body come back into balance.</p>
      <div class="trois-ingredients-dessins">
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/purple/ashwa.png" alt="ashwa">
          <p><b>ASHWAGANDHA</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/purple/tart-cherry.png" alt="tartCherry">
          <p><b>TART CHERRY</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/purple/l-theanine.png" alt="l-theanine">
          <p><b>L-THEANINE</b></p>
        </div>
        
      </div>
    </div>
      <div class="flavor-notes">
        <p><b>FLAVOR NOTES</b>: Rich and delicate, with notes of blackberry nectar, vanilla oak, and rose petals. Complex, but not exhausting.</p>
        <p><b>COMPLEX CITRUS</b></p>
        <div class="barres-flavors-10">
          <div class="barre-flavor-couleur10"></div>
          <div class="barre-flavor-blanc10"></div>
        </div>
        <p><b>HERBACEOUS</b></p>
        <div class="barres-flavors-11">
          <div class="barre-flavor-couleur11"></div>
          <div class="barre-flavor-blanc11"></div>
        </div>
        <p><b>BITTER</b></p>
        <div class="barres-flavors-12">
          <div class="barre-flavor-couleur12"></div>
          <div class="barre-flavor-blanc12"></div>
        </div>
      </div>
    
  </div>
  <div class="presentation-bouteille">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-bottle.png" class="image-bg5" alt="BottlePurple">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-bottle-hover.png" class="image-overlay5" alt="BottlePurpleHover">
    <div class="texte-presentation-bottle">
      <h4>Purple Lune</h4>
      <p>BOTTLE</p>
      <a href="">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-can.png" class="image-bg5" alt="canPurple">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-can-hover.png" class="image-overlay5" alt="canPurpleHover">
    <div class="texte-presentation-can">
      <h4>Purple Lune</h4>
      <p>CAN</p>
      <a href="">SHOP NOW</a>
    </div>
  </div>
</div>