<?php
require ("db.php");
// requête pour tous 
function get_id (){
    if(isset($_GET["id"])){
    $id=$_GET["id"] ;
    }
    else{
    $id=null ;
    }
    return $id;
}
// requête index
function indexcat (){
    $DB = ConnexionDB() ;
    $requete= $DB->query("SELECT libelle, image, id FROM categorie WHERE active='Yes' LIMIT 6") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}


function indexplat (){
    $DB = ConnexionDB() ;
    $requete=$DB->query("SELECT libelle, image, id from plat where active='Yes' LIMIT 3") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

// requete catégorie

function categorie (){
    $DB = ConnexionDB() ;
    $requete=$DB->query("SELECT libelle, image, id from categorie where active='Yes'") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}
//requête catspe
function platcatspe($id){
    $DB = ConnexionDB();
    $requete=$DB->prepare("SELECT libelle, image, description, prix, id FROM plat WHERE id_categorie= :id ") ;
    $requete->bindValue(":id",$id,PDO::PARAM_INT);
    $requete->execute() ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

// requête commande
function commandeplat($id){
    $DB = ConnexionDB();
    $requete=$DB->prepare("SELECT libelle, image, description, prix, id FROM plat WHERE id= :id ") ;
    $requete->bindValue(":id",$id,PDO::PARAM_INT);
    $requete->execute() ;
    $array=$requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

function verifcommande($idplat, $quantite, $total, $date, $etat,  $nomclient, $tel, $email, $adresse) {
    $DB = ConnexionDB();
    $requete = $DB->prepare("INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) 
    VALUES (:idplat, :quantite, :total, :date, :etat, :nom, :tel, :mail, :adresse);");
    $requete -> bindValue (":idplat" , $idplat, PDO::PARAM_STR) ;
    $requete -> bindValue (":quantite" , $quantite, PDO::PARAM_STR) ;
    $requete -> bindValue (":total" , $total, PDO::PARAM_STR) ;
    $requete -> bindValue (":date" , $date, PDO::PARAM_STR) ;
    $requete -> bindValue (":etat" , $etat, PDO::PARAM_STR) ;
    $requete -> bindValue (":nom" , $nomclient, PDO::PARAM_STR) ;
    $requete -> bindValue (":tel" , $tel, PDO::PARAM_STR) ;
    $requete -> bindValue (":mail" , $email, PDO::PARAM_STR) ;
    $requete -> bindValue (":adresse" , $adresse, PDO::PARAM_STR) ;
    $requete -> execute() ;
    $requete -> closeCursor();
}

// requête login

function inscription($nom, $email, $mdp) {
    $DB = ConnexionDB();
    $requete = $DB->prepare("INSERT INTO utilisateur (nom_prenom, email, password) 
    VALUES (:nom, :email, :mdp);");
    $requete -> bindValue (":nom" , $nom, PDO::PARAM_STR) ;
    $requete -> bindValue (":email" , $email, PDO::PARAM_STR) ;
    $requete -> bindValue (":mdp" , $mdp, PDO::PARAM_STR) ;
    $requete -> execute() ;
    $requete -> closeCursor();
}

// requête update

function update_show_categorie ($id){
    $DB = ConnexionDB() ;
    $requete=$DB->prepare("SELECT libelle, image, id, active from categorie WHERE id = :id") ;
    $requete -> bindValue (":id" , $id, PDO::PARAM_STR) ;
    $requete -> execute() ;
    $array=$requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

function distinct_active() {
    $db= ConnexionDB();
    $requete = $db->query("SELECT DISTINCT active FROM categorie ORDER BY id  ASC");
    $array = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $array;
}


function all_categorie (){
    $DB = ConnexionDB() ;
    $requete=$DB->query("SELECT libelle, id from categorie") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

//  requête update categorie

function update_categorie($libelle, $active, $image, $id) {
    if ($image == Null) {
        $DB = ConnexionDB();
        $requete = $DB->prepare("UPDATE categorie SET libelle = :libelle, active = :active WHERE id = :id");
        $requete -> bindValue (":libelle" , $libelle, PDO::PARAM_STR) ;
        $requete -> bindValue (":active" , $active, PDO::PARAM_STR) ;
        $requete -> bindValue (":id" , $id, PDO::PARAM_STR) ;
        $requete -> execute() ;
        $requete -> closeCursor();
    }

    else {
        $DB = ConnexionDB();
        $requete = $DB->prepare("UPDATE categorie SET libelle = :libelle, active = :active, image = :image WHERE id = :id");
        $requete -> bindValue (":libelle" , $libelle, PDO::PARAM_STR) ;
        $requete -> bindValue (":active" , $active, PDO::PARAM_STR) ;
        $requete -> bindValue (":image" , $image, PDO::PARAM_STR) ;
        $requete -> bindValue (":id" , $id, PDO::PARAM_STR) ;
        $requete -> execute() ;
        $requete -> closeCursor();
    }

}

// requête update plat

function update_plat($libelle, $active, $image, $id, $id_categorie, $description, $prix) {
    if ($image == Null) {
        $DB = ConnexionDB();
        $requete = $DB->prepare("UPDATE plat SET libelle = :libelle, active = :active, prix = :prix, description = :description, id_categorie = :id_categorie WHERE id = :id");
        $requete -> bindValue (":libelle" , $libelle, PDO::PARAM_STR) ;
        $requete -> bindValue (":active" , $active, PDO::PARAM_STR) ;
        $requete -> bindValue (":id" , $id, PDO::PARAM_STR) ;
        $requete -> bindValue (":id_categorie" , $id_categorie, PDO::PARAM_STR) ;
        $requete -> bindValue (":description" , $description, PDO::PARAM_STR) ;
        $requete -> bindValue (":prix" , $prix, PDO::PARAM_STR) ;
        $requete -> execute() ;
        $requete -> closeCursor();
    }

    else {
        $DB = ConnexionDB();
        $requete = $DB->prepare("UPDATE plat SET libelle = :libelle, active = :active, image = :image, prix = :prix, description = :description, id_categorie = :id_categorie WHERE id = :id");
        $requete -> bindValue (":libelle" , $libelle, PDO::PARAM_STR) ;
        $requete -> bindValue (":active" , $active, PDO::PARAM_STR) ;
        $requete -> bindValue (":image" , $image, PDO::PARAM_STR) ;
        $requete -> bindValue (":id" , $id, PDO::PARAM_STR) ;
        $requete -> bindValue (":id_categorie" , $id_categorie, PDO::PARAM_STR) ;
        $requete -> bindValue (":description" , $description, PDO::PARAM_STR) ;
        $requete -> bindValue (":prix" , $prix, PDO::PARAM_STR) ;
        $requete -> execute() ;
        $requete -> closeCursor();
    }

}

?>
