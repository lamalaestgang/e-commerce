
<?php
session_start();
if(isset($_SESSION["acces"])) 
{
   if($_SESSION["acces"]!="oui"){
    header("Location:index.php");
   }
}
else 
header("Location:index.php");

include ("librairie/fonction.lib.php");

include ("inclus/entete2.inc");

?>
<?php
$bd;
connecterBD($bd);
print ("<div class='bord'>");
print("<div class='bordure'>");
print("<div class='row text-center'>");
print("<h2>Modifier produit </h2>");
print("</div>");
print("<br>");
print("<div class='row text-center'>");
print("<p> &lt;&lt; en construction &gt;&gt; </p>");
print("</div>");
print("</div>");
print("</div>");
?>
<?php
include ("inclus/piedspage2.inc");
?>