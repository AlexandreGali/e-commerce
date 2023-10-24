<div class="titre-page"><h1>Images du site</h1></div>

<div class="titre-page">
    <div class="sous-titre">
        <h3><a href="index.php?page=4&c=1">Saisir les images</a></h3>
        <hr class="hr-st">
        <h3><a href="index.php?page=4&c=2">Gérer les images</a></h3>
    </div>
</div>

<?php

if(isset($_GET['c'])&& $_GET['c'] !=NULL) {
    $c = intval($_GET['c']);
        if($c == 1){
            include('view/site_images_saisie.php');
        }
        elseif($c == 2) {
            include('view/site_images_gestion.php');
        }
        elseif($c == 3) {
            include('view/site_images_gestion_modifier.php');
        }
        elseif($c == 4) {
            include('view/site_images_gestion_supprimer.php');
        }
        else {
            include('view/site_images_saisie.php');
        }
    }
    else {
        include('view/site_images_saisie.php');
    }

?>