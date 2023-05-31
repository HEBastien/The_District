<?php
require '../../../dao.php' ;

$libelle= (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : Null;
$active= (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : Null;
$image = (isset($_POST['image']) && $_POST['image'] != "") ? $_POST['image'] : Null ;
$idcategorie = (isset($_POST['idcategorie']) && $_POST['idcategorie'] != "") ? $_POST['idcategorie'] : Null ;
$prix= (isset($_POST['prix']) && $_POST['prix'] != "") ? $_POST['prix'] : Null ;
$description= (isset($_POST['description']) && $_POST['description'] != "") ? $_POST['description'] : Null ;
$id= (isset($_POST['id']) && $_POST['id'] != "") ? $_POST['id'] : Null ;



    // recuperation image
    $uploads_dir = '../../../assets/images/food';
    if ($_FILES["image"]["error"] != 0) { 
        $image = Null;
     } 
    else {
        $allowed = array('gif', 'png', 'jpg', 'jpeg');
        $image = $_FILES['image']['name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);
        if (!in_array($ext, $allowed)) {
            $image = Null;
        }
        else
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], "$uploads_dir/$image");
        } 
    }


if ($libelle == Null || $active == Null || $id == Null || $idcategorie == Null || $description == Null || $prix == Null) {
header("Location: ../../../update_plat.php?id=" . $id) ;
exit() ;
}



try {
    update_plat($libelle, $active, $image, $id, $idcategorie, $description, $prix);
}

// Gestion des erreurs
catch (Exception $e) {
    var_dump($requete->queryString);
    var_dump($requete->errorInfo());
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script");
}


header("Location: ../../../update_plat.php?id=" . $id);
exit();

?>