<!DOCTYPE html>
<html>
<head>
    <?php
            $pageTitle = "De Soi | Non-alcoholic apéritifs made with natural adaptogens"; 
            if (isset($_GET['page'])) {
                $page = intval($_GET['page']);
                if ($page == 1) {
                    $pageTitle = "De Soi | Non-alcoholic apéritifs made with natural adaptogens";
                } elseif ($page == 2) {
                    $pageTitle = "All beverages - De Soi";
                } elseif ($page == 3) {
                    $pageTitle = "Champignon Dreams - De Soi";
                } elseif ($page == 4) {
                    $pageTitle = "Golden Hour - De Soi";
                } elseif ($page == 5) {
                    $pageTitle = "Très Rosé - De Soi";
                } elseif ($page == 6) {
                    $pageTitle = "Purple Lune - De Soi";
                } elseif ($page == 7) {
                    $pageTitle = "Variety Pack - De Soi";
                } 
            }
            ?>

    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href=".//public/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/assets/css/fontawesome-6.4/css/all.css">
        
    
</head>

    <body>
        
<?php

        require_once('view/composants/view_navbar.php');
        require_once('model/connexion_bdd.php');
        require_once('model/fonctions.php');
        // require_once('public/assets/');


        if(isset($_GET['page']) && $_GET['page'] !=NULL){ 
            $page=intval($_GET['page']); 
            if($page==1){
                include('view/view_home.php'); 
            }
            elseif($page==2){
                include('view/view_all_beverages.php');
            }
            elseif($page == 3){
                if (isset($_GET['product'])) {
                    $product = $_GET['product'];
                    if ($product == 'bottle') {
                        include('view/view_champignon_dreams_bottle.php');
                    } elseif ($product == 'can') {
                        include('view/view_champignon_dreams_can.php');
                    } else {
                        include('view/view_champignon_dreams.php'); 
                    }
                } else {
                    include('view/view_champignon_dreams.php'); 
                }
            }
            elseif($page==4){
                if (isset($_GET['product'])) {
                    $product = $_GET['product'];
                    if ($product == 'bottle') {
                        include('view/view_golden_hour_bottle.php');
                    } elseif ($product == 'can') {
                        include('view/view_golden_hour_can.php');
                    } else {
                        include('view/view_golden_hour.php'); 
                    }
                } else {
                    include('view/view_golden_hour.php'); 
                }
            }
            elseif($page==5){
                if (isset($_GET['product'])) {
                    $product = $_GET['product'];
                    if ($product == 'can') {
                        include('view/view_tres_rose_can.php');
                    } 
                } else {
                    include('view/view_tres_rose.php'); 
                }
            }
            elseif($page==6){
                if (isset($_GET['product'])) {
                    $product = $_GET['product'];
                    if ($product == 'can') {
                        include('view/view_purple_lune_can.php');
                    } 
                } else {
                    include('view/view_purple_lune.php'); 
                }
            }
            elseif($page==7){
                if (isset($_GET['product'])) {
                    $product = $_GET['product'];
                    if ($product == 'starter') {
                        include('view/view_packs_starter.php');
                    } elseif ($product == 'variety') {
                        include('view/view_packs_variety.php');
                    } else {
                        include('view/view_packs.php'); 
                    }
                } else {
                    include('view/view_packs.php'); 
                }
            }
            else {
                include('view/view_home.php');
            }
        }
        else {
            include('view/view_home.php');
        }
    
        require_once('view/composants/view_footer.php');
   
    ?>

<script src=".//public/assets/js/script.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>