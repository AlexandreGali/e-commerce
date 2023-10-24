<?php
if (isset($_POST['password']) && $_POST['identifiant'] != NULL){
    // Identifiants fournis dans le formulaire
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);

    // Identifiant et mot de passe corrects
    if ($identifiant === 'claudy' && $password === 'focan') {
        $_SESSION['connexion'] = 1;
        header("location:index.php");
    } else {
        // Identifiant ou mot de passe incorrect
        header("location:index.php?page=1");
    }
} else {
    // Affichage du formulaire de connexion
    ?>
    <section>
        <form class="mon_formulaire" method="POST" action="#">
            <fieldset>
                <legend>CONNEXION</legend>

                <div class="group">
                    <input type="text" id="identifiant" name="identifiant" placeholder="Identifiant">
                </div>
                <div class="group">
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>
                <div class="group">
                    <input type="submit" class="btn_connexion" value="Se connecter">
                </div>
            </fieldset>
        </form>
    </section>
    <?php
}
?>
