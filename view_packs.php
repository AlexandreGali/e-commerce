<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

<!-- ////////// SHOP VARIETY PACK ////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="">    Starter Pack</a>
</div>

<div class="titre-shop-champignon">
  <h1>Shop Mixed Packs</h1>
</div>

<div class="presentation-produit-champignon">
  <div class="presentation-texte">
    <div class="titre-produit">
      <h3>Mixed Packs</h3>
      <p>-  A trio of our non-alcoholic apéritifs -</p>
    </div>
    <div class="ingredient-produit">
      <p><b>ADAPTOGENIC INGREDIENTS :</b> Blended with mood-boosting adaptogens like L-theanine and ashwagandha, each of our flavors gives you the buzz you crave without the booze.</p>
      <div class="trois-ingredients-dessins">
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/purple/ashwa.png" alt="ashwa">
          <p><b>ASHWAGANDHA</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/golden/lemonbalm.png" alt="lemonBalm">
          <p><b>LEMON BALM</b></p>
        </div>
        <div class="ingre-dessin1">
            <img src="../../e-commerce/public/assets/img/champignon/passionflower.png" alt="PassionFlower">
          <p><b>PASSION FLOWER</b></p>
        </div>
      </div>
    </div>
      
    
  </div>
  <div class="presentation-bouteille">
    <img src="../../e-commerce/public/assets/img/variety-pack/produit-starter-packs.png" class="image-bg5" alt="bottleVariety">
    <img src="../../e-commerce/public/assets/img/variety-pack/produit-starter-packs-hover.png" class="image-overlay5" alt="bottleVarietyHover">
    <div class="texte-presentation-bottle">
      <h4>Starter Pack</h4>
      <a href="index.php?page=7&product=starter">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/variety-pack/produit-variety-can.png" class="image-bg5" alt="canVariety">
    <img src="../../e-commerce/public/assets/img/variety-pack/produit-variety-can-hover.png" class="image-overlay5" alt="canVariety">
    <div class="texte-presentation-can">
      <h4>Can Variety Pack</h4>
      <a href="index.php?page=7&product=variety">SHOP NOW</a>
    </div>
  </div>
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
            <img src="../../e-commerce/public/assets/img/champignon/l-theanine.png" alt="L-Theanine">
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
      <a href="index.php?page=4&product=bottle">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-can.png" class="image-bg5" alt="canGolden">
    <img src="../../e-commerce/public/assets/img/golden/produit-golden-can-hover.png" class="image-overlay5" alt="canGoldenHover">
    <div class="texte-presentation-can">
      <h4>Golden Hour</h4>
      <p>CAN</p>
      <a href="index.php?page=4&product=can">SHOP NOW</a>
    </div>
  </div>
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
      <a href="index.php?page=6">SHOP NOW</a>
    </div>
  </div>
  <div class="presentation-can">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-can.png" class="image-bg5" alt="canPurple">
    <img src="../../e-commerce/public/assets/img/purple/produit-purple-can-hover.png" class="image-overlay5" alt="canPurpleHover">
    <div class="texte-presentation-can">
      <h4>Purple Lune</h4>
      <p>CAN</p>
      <a href="index.php?page=6">SHOP NOW</a>
    </div>
  </div>
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
  <div class="presentation-bouteille">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-bottle.png" class="image-bg5" alt="BottleChampignon">
    <img src="../../e-commerce/public/assets/img/champignon/produit-champignon-bottle-hover.png" class="image-overlay5" alt="BottleChampignonHover">
    <div class="texte-presentation-bottle">
      <h4>Champignon dreams</h4>
      <p>BOTTLE</p>
      <a href="index.php?page=3&product=can">SHOP NOW</a>
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