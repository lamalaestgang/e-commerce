<?php
session_start();
if (isset($_SESSION["acces"])) {
  if ($_SESSION["acces"] != "oui") {
    header("Location:index.php");
  }
} else
  header("Location:index.php");

include ("librairie/fonction.lib.php");

include ("inclus/entete2.inc");

$bd;
connecterBD($bd);
if (isset($_GET['action'])) {
  if ($_GET['action'] == 'ajoute') {
    $fournisseur = $_POST['fournisseur'];
    $quantite = $_POST['quantite'];
    $nomproduit = $_POST['nomproduit'];
    $prix = $_POST['prix'];
    $format = $_POST['format'];
    $description = $_POST['description'];
    ajouterProduit($bd, $prix, $nomproduit, $fournisseur, $format, $description, $quantite);

  }
}

?>


<div class='bord'>
  <div class='row text-center'>
    <h2> Ajouter un produit </h2>
  </div>
  <form action="ajouterProduit.php?action=ajoute" method="post" enctype="multipart/form-data"  name="page">
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">Nom du produit:</span>
      <input type="text" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" maxlength="50" required name="nomproduit">
    </div>
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">Prix:</span>
      <input type="number" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" required name="prix" value="0" min="0" step="0.01" max="32000" >
    </div>
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">Fournisseur:</span>
      <input type="text" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" maxlength="50" name="fournisseur">
    </div>
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">Quantité</span>
      <input type="number" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" required name="quantite" value="0" min="0" max="32000">
    </div>
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">format</span>
      <input type="text" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" maxlength="25" name="format">
    </div>
    <div class="input-group mb-3 p-1">
      <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
      <input type="text" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" name="description">
    </div>
    <div class="input-group mb-3 p-1">
      <input type="file" class="form-control" aria-label="Sizing example input"
        aria-describedby="inputGroup-sizing-default" accept="image/jpeg,image/jpg" name="image" required>
    </div>
    <div class="col-12 m-2">
      <input type="submit" value="Sauvegarder"><input type="reset" value="annuler" class="m-3" onclick="location.href = 'index.php'">
    </div>
</div>
</form>

<?php

include ("inclus/piedspage2.inc");
?>