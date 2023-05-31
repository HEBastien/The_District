<?php
require '../../../dao.php' ;

$nomclient= (isset($_POST['nomprenom']) && $_POST['nomprenom'] != "") ? $_POST['nomprenom'] : Null;
$tel = (isset($_POST['tel']) && $_POST['tel'] != "") ? $_POST['tel'] : Null ;
$adresse= (isset($_POST['adresse']) && $_POST['adresse'] != "") ? $_POST['adresse'] : Null;
$email = (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : Null ;
$quantite = (isset($_POST['quantite']) && $_POST['quantite'] != "") ? $_POST['quantite'] : Null ;
$prix = (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null ;
$idplat = (isset($_POST['idplat']) && $_POST['idplat'] != "") ? $_POST['idplat'] : Null ;

if ($nomclient == Null || $tel == Null || $adresse == Null || $email == Null || $quantite == Null || $prix == Null || $idplat == Null) {
header("Location: ../../../commande.php?id=" . $idplat) ;
exit() ;

}

$etat = "En préparation";
$total = $prix * $quantite;
$date = date("Y-m-d H:i:s");

try {
    verifcommande($idplat, $quantite, $total, $date, $etat,  $nomclient, $tel, $email, $adresse);
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script");
}


header("Location: ../../../acceuil.php");
exit();

?>