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
if (isset($_GET["action"]) ) {
   if ($_GET["action"] == "supprimer")
      supprimerproduit($bd);
     
}

?>

<div class='bord'>
   <div class='bordure m-1'>
      <div class='row text-center m-2'>
         <h2>Supprimer produit </h2>
      
         <form action="SupprimerProduit.php?action=supprimer" method="post">
            <?php
            $requete = "select * from produit";
            $result = mysqli_query($bd, $requete);
           
            print ('<div class="table-responsive">');
            print ("<table  class='table table-bordered table-responsive'>
   <tr>
      <th>&nbsp;</th>
      <th>nom</th>
      <th>Fournisseur</th>
      <th>Quantité</th>
      <th>Prix</th>
      <th>Format</th>
      <th>Description</th>
   </tr>
");
            while ($ligne = mysqli_fetch_array($result)) {
               print ("<tr>");
               print ("<td><input type='checkbox' name='chk$ligne[idProduit]'></td>");
               print ("<td>$ligne[nomProduit]</td>");
               print ("<td>$ligne[fournisseur]</td>");
               print ("<td>$ligne[quantite]</td>");
               print ("<td>$ligne[prix]</td>");
               print ("<td>$ligne[format]</td>");
               print ("<td>$ligne[description]</td>");
               print ("</tr>");
            }
            print ("</table>");
            print ("</div>");
            ?>
            <input type="submit" value="supprimer"  onclick="return verifierSupp();" >
            <input type="reset" value="annuler" > 
         </form>
      </div>
      <br>
      </div>
  
</div>
<script>
   function verifierSupp(){
      var valide=false;
      if(confirm('Êtes-vous sûr de vouloir supprimer cet élément ?'))
        valide=true;
      return valide;
   }
</script>

<?php

include ("inclus/piedspage2.inc");
?>