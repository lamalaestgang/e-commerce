<?php 
session_start();
include("librairie/fonction.lib.php");
include("inclus/entete.inc");
$message = "";
if (isset($_GET["action"]) && $_GET["action"] == "valide") {
    $bd;
    connecterBD($bd);
    $courriel = $_POST["courriel"];
    $mot_de_passe = $_POST["motdepasse"];
    if (verifierUsager($bd, $courriel, $mot_de_passe)) {
        $_SESSION['acces'] = "oui";
        header("location:ajouterProduit.php");
    } else {
      $message=("&gt;&gt; le courriel ou le mot de passe est incorrect &lt;&lt;");
    
    }
}

?>
<form action="connexion.php?action=valide" name="connexion" method="post">
<div class=" bord p-4">
<div class="row text-center">
<div class="col text-end ">
<label for="">Courriel :</label>
</div>
<div class="col text-start">
<input type="email" name="courriel" >
</div>
</div>
<div class="row text-center">
<div class="col text-end">
<label for="">Mot de passe:</label>
</div>
<div class="col text-start">
<input type="password" name="motdepasse">
</div>
</div>
<br>
<div class="row">
<div class="col-12 text-center">
<input type="submit" value="Se connecter" name="envoi">&nbsp;<input type="reset" value="Annuler">
<br><br>
<div class="col-12 text-center text-danger">
<?php print($message); ?>
</div>
</div>
</div>
</div>
</form>
<?php
    include("inclus/piedspage.inc");
?>