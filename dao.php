<?php
require ("db.php");
// requête pour tous 
function get_id (){
    if(isset($_get["id"])){
        $id=$_GET["id"] ;
    }
    else{
        $id=null ;
    }
    return $id;
}
// requête index
function indexcat (){
    $DB = DB() ;
    $requete= $DB->query("SELECT libelle, image, id from categorie where active='Yes' LIMIT 6") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}


function indexplat (){
    $DB = DB() ;
    $requete=$DB->query("SELECT libelle, image, id from plat where active='Yes' LIMIT 3") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}

// requete catégorie

function categorie (){
    $DB = DB() ;
    $requete=$DB->query("SELECT libelle, image, id from categorie where active='Yes'") ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}
//requête catspe
function platcatspe($id){
    $DB = DB() ;
    $requete=$DB->prepare("SELECT libelle, image, description, prix FROM plat WHERE id_categorie= :id ") ;
    $requete->bindValue(":id",$id,PDO::PARAM_INT);
    $requete->execute() ;
    $array=$requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor() ;
    return $array;

}



?>
