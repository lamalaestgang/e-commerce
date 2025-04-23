<?php
session_start();
if (isset($_GET['action']))
  if ($_GET["action"] == "deconnexion") {
    session_unset();
    session_destroy();
  }
if (isset($_SESSION['acces'])) {
  if ($_SESSION['acces'] == "oui") {
    include ("inclus/entete2.inc");
  }
}
else
include ("inclus/entete.inc");
?>
<div class="col-12 bord">
  <p class=" center-content">Bonjour,<br><br>
    Pour faire plaisir a mes enfants,et aux amis de mes enfants ,j'ai ouvert cette boutique en 2010 et
    depuis,elle n'a cessé de prendre
    de l'expension ,aujourd'ui ,avec la venu du web ,je suis heureux de vous présenter la nouvelle facon
    de magasiner des bonbons... <br>
  <div class="text-center">Bon magasinage</div>

  </p>
</div>
<?php
if (isset($_SESSION['acces'])) {
  if($_SESSION['acces'] == 'oui')
  {
     include ("inclus/piedspage2.inc");
  }
 
}  
   else
     include ("inclus/piedspage.inc");
 
?>