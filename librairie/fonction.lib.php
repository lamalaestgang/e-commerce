<?php
function connecterBD(&$bd)
{
    $bd = mysqli_connect("localhost", "root", "infoWin420", "bonbon");
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion a mysql : " . mysqli_connect_error();
    }
    mysqli_set_charset($bd, 'utf8');
}

function afficherProduits($bd)
{
    $requete = "select * from produit";
    $resultat = mysqli_query($bd, $requete);
    print ('<style>');
    print ('.bordure-double { border: 4px double black; padding: 10px; }');
    print ('</style>');
    print ('<div class="bordure-double">');
    while ($ligne = mysqli_fetch_array($resultat)) {
        print ('<div class="row">');
        print ('<div class="col-3 text-start">');
        print ("<h4>  $ligne[nomProduit] </h4>");
        print ("<img src='images/{$ligne['idProduit']}.jpg' alt='' class='img-fluid' width='250 px' height='200 px'>");
        print ('</div>');
        print ('<div class="col-4" text-start>');
        print ('<br>');
        print ("<p><strong>prix:</strong> $ligne[prix] $ CA</p>");
        print ("<p><strong>disponibilité:</strong> $ligne[quantite]</p>");
        print ("<p><strong>format:</strong> $ligne[format]</p>");
        print ("<p><strong>fournisseur:</strong> $ligne[fournisseur]</p>");
        print ("<p><strong>remarque:</strong> $ligne[description]</p>");
        print ('</div>');
        print ('</div>');
        print ('<hr>');

    }
    print ('</div>');
}
function verifierUsager($bd, $courriel, $mp)
{
    $requete = " SELECT  * FROM usager WHERE courriel ='$courriel'  AND motPasse = '$mp' ";
    $resultat = mysqli_query($bd, $requete);
    if (mysqli_num_rows($resultat) > 0) {
        return true;
    } else {
        return false;
    }
}
function ajouterProduit($bd, $prix, $nomproduit, $fournisseur, $format, $description, $quantite)
{
    $requete = "INSERT INTO produit (nomProduit,fournisseur,quantite,format,prix,description) VALUES
        ('$nomproduit', '$fournisseur', $quantite, '$format', $prix,'$description')";
    $resultat = mysqli_query($bd, $requete);
    $fichier = $_FILES['image']['tmp_name'];
    $id = mysqli_insert_id($bd);
    move_uploaded_file($fichier, "images/" . $id . ".jpg");

}
function supprimerproduit($bd)
{
    $requete = "select * from produit";
    $resultat = mysqli_query($bd, $requete);
    while ($ligne = mysqli_fetch_array($resultat)) {
        $cocher = 'chk' . $ligne['idProduit'];
        if (isset($_POST[$cocher]))
            if ($_POST[$cocher]) {
                $requete2 = "delete from produit where idProduit=$ligne[idProduit]";
                $result2 = mysqli_query($bd, $requete2);
                $image="images/".$ligne['idProduit'].".jpg";
                unlink($image);
            }    
    }
}

?>