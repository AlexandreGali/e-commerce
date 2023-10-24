<div class="titre-page"><h1>Page des produits</h1></div>

<div class="titre-page">
    <div class="sous-titre">
        <h3><a href="index.php?page=6&c=1">Saisir les produits</a></h3>
        <hr class="hr-st">
        <h3><a href="index.php?page=6&c=2">Gérer les produits</a></h3>
    </div>
</div>

<?php

if(isset($_GET['c'])&& $_GET['c'] !=NULL) {
    $c = intval($_GET['c']);
        if($c == 1){
            include('view/site_produits_saisie.php');
        }
        elseif($c == 2) {
            include('view/site_produits_gestion.php');
        }
        elseif($c == 3) {
            include('view/site_produits_gestion_modifier.php');
        }
        else {
            include('view/site_produits_saisie.php');
        }
    }
    else {
        include('view/site_produits_saisie.php');
    }

?>