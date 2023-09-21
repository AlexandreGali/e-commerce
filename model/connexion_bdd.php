<?php 

$user='root';
$pass='';

try{ 
    $bdd=new PDO('mysql:host=localhost;dbname=e-commerce', $user, $pass); 
}
catch(PDOException $e){ 
    die('Erreur : '. $e->getMessage());
}

?>