<?php
require '../../../dao.php' ;

$nom= (isset($_POST['nom']) && $_POST['nom'] != "") ? $_POST['nom'] : Null;
$email= (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : Null;
$mdp = (isset($_POST['mdp']) && $_POST['mdp'] != "") ? $_POST['mdp'] : Null ;

if ($email == Null || $mdp == Null || $nom == Null) {
header("Location: ../../../inscription.php") ;
exit() ;
}

$mdp_hash = password_hash($mdp, PASSWORD_DEFAULT);

try {
    inscription($nom, $email, $mdp_hash);
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