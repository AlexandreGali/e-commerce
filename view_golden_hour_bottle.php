<html>
<body>

<!-- ////////// PRESENTATION BOUTEILLE GOLDEN////////// -->
<div class="home-champ-dreams">
  <a href="index.php">Home   </a><i class="fa-solid fa-chevron-right fa-2xs"></i><a href="index.php?page=4">    Golden Hour</a>
</div>

<div class="container-description-bottle">
    <div class="container-gauche-bottle">
        <div class="descriptif-produit-bottle">
            <div class="partie-superieure-bottle">
                <span>SPARKLING NON-ALCOHOLIC APÉRITIF</span>
                <<?php
                $sql = "SELECT * FROM produits WHERE id_produit = 3";
                $stmt = $bdd->query($sql);
                $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($produits as $produit) {
                    ?>
                  <h2><?= $produit['nom_produit']; ?></h2>
                <div class="flavor-bottle">- Crisp, citrus zest, herbaceous -</div>
                <p><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i>      126 reviews</p>
            </div>
            <div class="partie-milieu-bottle">
              <p><?= $produit['description_produit']; ?></p>
            </div>
            <?php
                }
          ?>
            <div class="partie-milieu-li-bottle">
                <li>
                    <ul>Non-alcoholic</ul>
                    <ul>30 calories per glass</ul>
                    <ul>No artificial colors or flavors</ul>
                    <ul>Lightly carbonated</ul>
                    <ul>Vegan & gluten-free</ul>
                    <ul>750 ml</ul>
                </li>
            </div>
            <div class="partie-reseaux-bottle">
                <p>Share on 
                    <a href=""><i class="fa-brands fa-square-facebook" style="color: #000000;"></i></a>
                    <a href=""><i class="fa-brands fa-pinterest-p" style="color: #000000;"></i></a>
                    <a href=""><i class="fa-solid fa-envelope" style="color: #000000;"></i></a>
                </p>
            </div>
            <a href="index.php?page=4&product=can" class="partie-lower-bottle" id="can-golden3">
                <p>SHOP THE CAN <div class="arrow-can" id="arrow-shop-can">&#8594;</div></p>
            </a>
        </div>
    </div>

    <?php
        $sql = "SELECT * FROM images WHERE id_produit = 3 LIMIT 4";
        $stmt = $bdd->query($sql);
        $images = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($images as $image) {                  
    ?>
    <div class="container-middle-slider">
  <div class="slider10">
  <?php
    $index = 0; // Initialisation de l'index
    foreach ($images as $image) {
      $index++;
      ?>
    <div class="slide10">
        <div class="content10">
          <img src="back-office/<?= $image['image']; ?>"  alt="<?= $image['nom_img']; ?>">
        </div>
      </div>
      <?php
    }
    ?>

    <div class="slide10">
      <div class="content10">
        <img src="../../e-commerce/public/assets/img/golden/produit-golden-bottle-hover-slider.png" alt="can2" class="img3-slider-can-bottle">
      </div>
    </div>

    <div class="slide10">
      <div class="content10">
        <img src="../../e-commerce/public/assets/img/golden/slider-bottle-golden.png" alt="img3slide">
      </div>
    </div>

    <div class="slide10">
      <div class="content10">
        <img src="../../e-commerce/public/assets/img/golden/slider-bottle-golden2.png" alt="img4slide">
      </div>
    </div>
  </div>

  
</div>
<div class="position-indicators10">
    <div class="indicator10"></div>
    <div class="indicator10"></div>
    <div class="indicator10"></div>
    <div class="indicator10"></div>
  </div>

  <div class="arrow10 left" id="prevBtn10">&#8592;</div>
  <div class="arrow10 right" id="nextBtn10">&#8594;</div>
    
    <div class="container-droite-bottle">
      <div class="descriptif-panier">
        <div class="nb-produit">
          <h6>$25.00 - 1 bottle</h6>
          <div class="free-payment-afterpay">
            <p>or 4 interest-free payments of $6.25 with </p><img src="../../e-commerce/public/assets/img/champignon/afterpay.png" alt="afterpay">
          </div>
        </div>
        <div class="adaptogenic-ingredients">
          <p>ADAPTOGENIC INGREDIENTS</p>
          <div class="trois-ingredients-panier">
            <img src="../../e-commerce/public/assets/img/golden/lemonbalm.png" alt="lemonBalm">Lemon Balm
            <img src="../../e-commerce/public/assets/img/champignon/l-theanine.png" alt="L-Theanine">L-theanine
          </div>
        </div>
        <div class="pack-size">
          <span>PACK SIZE</span>
          <p>One and done. You're one bottle away from free shipping!</p>
        </div>
        <div class="add-to-bag">
          <p>Free domestic shipping on orders over $50</p>
          <a href="">ADD TO BAG</a>
        </div>

      </div>
    </div>
</div>
</div>

<!--                                      VERSION MOBILE -->
<div class="container-description-bottle-tel">
  <div class="container-middle-slider-tel">
    <div class="slider10-tel">
      <div class="slide10-tel">
        <div class="content10-tel">
          <img src="../../e-commerce/public/assets/img/golden/produit-golden-bottle-slider.png" class="img1-slider-champ-bottle-tel" alt="img1slide">
        </div>
      </div>

      <div class="slide10-tel">
        <div class="content10-tel">
          <img src="../../e-commerce/public/assets/img/golden/produit-golden-bottle-hover-slider.png" alt="img2slide">
        </div>
      </div>

      <div class="slide10-tel">
        <div class="content10-tel">
          <img src="../../e-commerce/public/assets/img/golden/slider-bottle-golden.png" alt="img3slide">
        </div>
      </div>

      <div class="slide10-tel">
        <div class="content10-tel">
          <img src="../../e-commerce/public/assets/img/golden/slider-bottle-golden2.png" alt="img4slide">
        </div>
      </div>
    </div>  
  </div>
<div class="position-indicators10-tel">
    <div class="indicator10-tel"></div>
    <div class="indicator10-tel"></div>
    <div class="indicator10-tel"></div>
    <div class="indicator10-tel"></div>
  </div>

  <div class="arrow10-tel left" id="prevBtn10-tel">&#8592;</div>
  <div class="arrow10-tel right" id="nextBtn10-tel">&#8594;</div>
</div>


<div class="container-description-bottle-tel2">
  <div class="first-container-bottle">
    <p>SPARKLING NON-ALCOHOLIC APÉRITIF</p>
    <h3>Golden Hour</h3>
    <p>- Crisp, citrus zest, herbaceous -</p>
    <p><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i><i class="fa-solid fa-star" style="color: #000000;"></i>      135 reviews</p>
  </div>
  <div class="second-container-bottle">
    <h6>$25.00 - 1 bottle</h6>
  </div>
  <div class="third-container-bottle">
    <p>Golden Hour is made with lemon balm and L-theanine derived from green tea, botanicals known to enhance focus and promote relaxation. Bright and bracing, each sunny sip has notes of warm citrus, lemongrass, and leafy herbs. It’s the bite you crave, but full of zest.</p>
      <li>
          <ul>Non-alcoholic</ul>
          <ul>35 calories per glass</ul>
          <ul>No artificial colors or flavors</ul>
          <ul>Lightly carbonated</ul>
          <ul>Vegan & gluten-free</ul>
          <ul>750 ml</ul>
      </li>
  </div>
  <div class="fourth-container-bottle">
    <p>ADAPTOGENIC INGREDIENTS</p>
    <img src="../../e-commerce/public/assets/img/golden/lemonbalm.png" alt="PassionFlower"><p>Lemon Balm</p>
    <img src="../../e-commerce/public/assets/img/champignon/l-theanine.png" alt="L-Theanine"><p>L-theanine</p>
  </div>
  <div class="add-to-bag-tel">
    <p>Free domestic shipping on orders over $50</p>
    <a href="">ADD TO BAG</a>
  </div>
  <div class="partie-reseaux-bottle-tel">
    <p>Share on 
      <a href=""><i class="fa-brands fa-square-facebook" style="color: #000000;"></i></a>
      <a href=""><i class="fa-brands fa-pinterest-p" style="color: #000000;"></i></a>
      <a href=""><i class="fa-solid fa-envelope" style="color: #000000;"></i></a>
    </p>
  </div>
  <a href="index.php?page=4&product=can" class="partie-lower-bottle" id="can-champignon3">
    <p>SHOP THE CAN <div class="arrow-can" id="arrow-shop-can">&#8594;</div></p>
  </a>
  <?php
                }
          ?>
</div>

</body>
</html>