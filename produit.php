<?php
include ("inclus/entete.inc");
?>
<?php
$bd;
include ("librairie/fonction.lib.php");
connecterBD($bd);
afficherProduits($bd);
?>
<?php
include ("inclus/piedspage.inc");
?>