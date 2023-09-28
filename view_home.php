<?php

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>
<html>
<body>

  <div class="photo-accueil-tel">
    <img src="../../e-commerce/public/assets/img/page-accueil/photoAccueilTel.png" alt="photoAccueilTel">
  </div>
<!-- ****************** SLIDER ********************* -->
<div class="slider-container">
        <div class="slider">
            <div class="slide">
                <div class="content">
                    <div class="katy">
                        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil1.png" alt="photo1slide">
                    </div>
                <div class="spritz">
                    <h1>Spritz Up Summer</h1>
                    <p>Fill your glass with botanical booze-free bubbly.</p>
                    <a href="">SHOP NOW</a>
                </div>
                </div>
            </div>
            <div class="slide">
                <div class="content2">
                    <div class="imgslider">
                        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil2.png" alt="photo2slide">
                    </div>
                </div>
            </div>
        </div>

        <div class="position-indicators">
            <div class="indicator"></div>
            <div class="indicator"></div>
        </div>

        <div class="arrow left" id="prevBtn">&#8592;</div>
        <div class="arrow right" id="nextBtn">&#8594;</div>
    </div>

<!-- ************* APERO SEASON**************** -->
    <div class="container-apero">
        <div class="photo-apero">
            <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil3.png" alt="photoAperoSeason">
        </div>
        <div class="texte-apero">
            <h2>DISCOVER CHAMPIGNON DREAMS</h2>
            <h1>It's Apéro Season</h1>
            <p class="p-texte-apero">Made with notes of sticky summer strawberries and bitter grapefruit,<br>Champignon Dreams serves up the perfect summer spritz vibes without the booze.</p>
            <p class="p-texte-apero-tel">Made with notes of sticky summer strawberries and bitter grapefruit, Champignon Dreams serves up the perfect summer spritz vibes without the booze.</p>
            <a href="">SHOP NOW</a>
        </div>
    </div>

    <!-- /*                     *************** REVIEW ************ */ -->
<div class="slider-container2">
  <div class="slider2">
    <div class="slide2">
      <div class="review1">
        <p class="quote">,,</p>
        <p class="texte">Not only do they taste amazing, but I was also<br> stunned by the depth and complexity of the<br> flavors.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review1.png" alt="review1">
    </div>
      <div class="review2">
        <p class="quote">,,</p>
        <p class="texte">De Soi’s drinks are perfect for a drink ritual<br> without alcohol or any of its lingering effects.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review2.png" alt="review2">
      </div>
      <div class="review3">
        <p class="quote">,,</p>
        <p class="texte">From the bottle shape and color of the drinks to<br> the flavors of these apéritifs, it really did emulate<br> the experience of drinking wine. Each one is<br> packed with flavor and depth — there's something<br> for everyone.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review3.png" alt="review3">
      </div>
    </div>
    <div class="slide2">
      <div class="review4">
        <p class="quote">,,</p>
        <p class="texte">From the bottle shape and color of the drinks to<br> the flavors of these apéritifs, it really did emulate<br> the experience of drinking wine. Each one is<br> packed with flavor and depth — there's something<br> for everyone.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review3.png" alt="review3">
      </div>
      <div class="review5">
        <p class="quote">,,</p>
        <p class="texte">Though De Soi touts a lot of adaptogenic<br>benefits, we really just care that it tastes good.<br>We'd say it was a hit.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review4.png" alt="review4">
      </div>
      <div class="review6">
        <p class="quote">,,</p>
        <p class="texte">The Katy Perry co-founded brand serves up<br>adaptogenic sparkling wines that made me<br>almost want to quit booze for good.</p>
        <p class="quote">,,</p>
        <img src="../../e-commerce/public/assets/img/page-accueil/review5.png" alt="review5">
      </div>
    </div>
    
</div>  

    <div class="position-indicators2">
      <div class="indicator2"></div>
      <div class="indicator2"></div>
    </div>
  </div>
</div>


<!-- **************** SHOP APERITIFS ************* -->
<div class="titre-apero">
  <h1>Shop Apéritifs</h1>
</div>

<div class="slider-container3">
  <div class="slider3">

    <div class="slide3">
      <div class="produit1">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp1.png" class="image-bg" alt="produit1carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp1hover.png" class="image-overlay" alt="produit1carrouselhover">
        </div>
        <h4>Le Brunch Bundle</h4>
        <p class="texte-produit-home">Add some booze-free bubbly to brunch with Le Brunch Bundle, featuring our lightest and brightest flavors - Très Rosé, Golden...</p>
        <a href="">SHOP NOW</a>
      </div>

      <div class="produit2">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp2.png" class="image-bg" alt="produit2carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp2hover.png" class="image-overlay" alt="produit2carrouselhover">
        </div>
        <h4>The Picnic Pack</h4>
        <p class="texte-produit-home">Pack a tote with our top summer spritzes Très Rosé and Golden Hour, and be the...</p>
        <a href="">SHOP NOW</a>
      </div>

      <div class="produit3">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp3.png" class="image-bg" alt="produit3carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp3hover.png" class="image-overlay" alt="produit3carrouselhover">
        </div>
        <h4>Spritz Your Way</h4>
        <p class="texte-produit-home">Pick your favorite spritz combo with our bundle featuring Très Rosé and your choice of bright...</p>
        <a href="">SHOP NOW</a>
      </div>

      <div class="produit4">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp4.png" class="image-bg" alt="produit4carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp4hover.png" class="image-overlay" alt="produit4carrouselhover">
        </div>
        <h4>Très Rosé</h4>
        <p class="texte-produit-home">Très Rosé is a bold and balanced summertime sip bursting with notes...</p>
        <a href="">SHOP NOW</a>
      </div>
    </div>

    <div class="slide3">
      <div class="produit5">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp5.png" class="image-bg" alt="produit5carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp5hover.png" class="image-overlay" alt="produit5carrouselhover">
        </div>
        <h4>Champignon Dreams</h4>
        <p class="texte-produit-home">Champignon Dreams is made with a dreamy duo of reishi mushroom and...</p>
        <a href="">SHOP NOW</a>
      </div>
      
      <div class="produit6">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp6.png" class="image-bg" alt="produit6carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp6hover.png" class="image-overlay" alt="produit6carrouselhover">
        </div>
        <h4>Golden Hour</h4>
        <p class="texte-produit-home">Golden Hour is made with lemon balm and L-theanine derived from green...</p>
        <a href="">SHOP NOW</a>
      </div>

      <div class="produit7">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp7.png" class="image-bg" alt="produit7carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp7hover.png" class="image-overlay" alt="produit7carrouselhover">
        </div>
        <h4>Champignon Dreams</h4>
        <p class="texte-produit-home">Champignon Dreams is made with a dreamy duo of reishi mushroom and passion flower to ease you into...</p>
        <a href="">SHOP NOW</a>
      </div>

      <div class="produit8">
        <div class="image-container">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp8.png" class="image-bg" alt="produit8carrousel">
                <img src="../../e-commerce/public/assets/img/page-accueil/carrouselp8hover.png" class="image-overlay" alt="produit8carrouselhover">
        </div>
        <h4>Golden Hour</h4>
        <p class="texte-produit-home">Golden Hour is made with lemon balm and L-theanine derived from green tea, botanicals known to enhancce focus and promote...</p>
        <a href="">SHOP NOW</a>
      </div>

    </div>
  </div>
    <div class="arrow3 left3" id="prevBtn3">&#8592;</div>
    <div class="arrow3 right3" id="nextBtn3">&#8594;</div>
</div>

<!-- ************ Meet our founders ********** -->
<div class="container-founders">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil4.png" alt="photoFounders">
  <div class="partie-droite-founders">
    <h4>Meet our Founders</h4>
    <p>The dynamic duo behind De Soi, Co-Founders Katy Perry and Morgan McLachlan teamed up to make a drink that can take you from long nights to early mornings.</p>
    <a href="">LEARN MORE</a>
  </div>
</div>

<!-- ************** behind the spitz************ -->
<div class="container-behind">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil5.png" alt="photoProduit">
</div>

<div class="container-behind2">
  <div class="container-img-behind3">
    <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil6.png" alt="photoGoldenHour">
  </div>  
  <div class="partie-gauche-behind">
      <div class="p1-behind">BEHIND THE SPRITZ</div>
      <h4>What's a non-alcoholic apéritif ?</h4>
      <p class="p2-behind">Popularized in France, the apéritif is a bittersweet botanical beverage meant for sipping slowly pre-dinner. Our apéritifs are entirely non-alcoholic, so instead of booze, we use natural adaptogens like lion's mane and l-theanine to give you the stress-soothing effect you look for in a complex drink.</p>
      <a href="">LEARN MORE</a>
  </div>
  <div class="container-img-behind2">
    <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil6.png" alt="photoGoldenHour">
  </div>  
</div>

<!-- *********************** natural botanicals ************* -->
<div class="container-botanicals">
  <div class="texte-botanicals">
    <h4>Natural Botanicals</h4>
    <p>Our apéritifs are brimming with the kind of culinary botanicals you’d find on the menu at your favorite local restaurant, from yuzu and lemongrass to dates and rosemary. The secret’s in our adaptogens, mind-mellowing botanicals that put the fun in functional, helping you create, relax, and ease into the night.</p>
    <a href="">BOTANICAL GLOSSARY</a>
  </div>
  <div class="photos-botanicals">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical1.png" alt="botanicalFlavors">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical2.png" alt="botanicalFlavors">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical3.png" alt="botanicalFlavors">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical4.png" alt="botanicalFlavors">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical5.png" alt="botanicalFlavors">
        <img src="../../e-commerce/public/assets/img/page-accueil/botanical6.png" alt="botanicalFlavors">
  </div>
</div>

<!-- **************** photo+pour one out ************ -->
<div class="container-inspired">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil7.png" alt="photo4cans">
</div>
<div class="container-inspired-tel">
  <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil7tel.png" alt="photo4cans">
</div>
<div class="container-apero2">
  <div class="photo-apero">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil3.png" alt="BottleChampignon">
  </div>
  <div class="texte-apero2">
      <h2>RECIPES</h2>
      <h1>Pour one out</h1>
      <p>Our sparkling non-alcoholic apéritifs come pre-spritzed and ready to sip. Doll them up<br> for the party with citrus and herbs, using our Recipes as your guide.</p>
      <a href="" >EXPLORE NOW</a>
  </div>
</div>

<div class="container-refer-a-friend">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil8.png" alt="referAFriend">
</div>

<!-- ************ find your flavor + photos insta ************* -->
<div class="container-flavor">
  <div class="photo-flavor2">
          <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil9.png" alt="photo4cans">
    </div>
  <div class="texte-flavor">
    <h2>FILL UP YOUR OWN CUP.</h2>
    <h1>Find Your Flavor</h1>
    <p>Which of our flavors feels like you? Take our quiz and find out!</p>
    <a href="" >FIND YOUR DE SOI</a>
  </div>
  <div class="photo-flavor">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil9.png" alt="photo4cans">
  </div>
</div>

<div class="join-us">
  <h1>Join Us @<i>drinkdesoi</i></h1>
</div>

<div class="container-photo-insta">
        <img src="../../e-commerce/public/assets/img/page-accueil/imageaccueil10.png" alt="photoInsta">
</div>
<div class="container-photo-insta2">
        <img src="../../e-commerce/public/assets/img/page-accueil/photosinstatel.png" alt="photoInsta">
</div>




</body>
</html>