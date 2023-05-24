<?php
require 'dao.php' ;
require  'db.class.php' ;
if (session_status() == PHP_SESSION_NONE) {session_start();}

$email= (isset($_POST['email']) && $_POST['email'] != "") ? $_POST['email'] : Null;
$mdp = (isset($_POST['mdp']) && $_POST['mdp'] != "") ? $_POST['mdp'] : Null ;

if ($email == Null || $mdp == Null) {
header("Location: login.php") ;
exit() ;

}

$DB = new DB('') ;

$requete = $DB->prepare("SELECT password FROM utilisateur WHERE email=:email LIMIT 1;");
$requete -> bindValue (":email" , $email, PDO::PARAM_STR) ;
$requete -> execute() ;
$arr = $requete-> fetchALL(PDO::FETCH_ASSOC);
$requete -> CloseCursor();
$mdpcrypte= $arr[0]["password"];

if (count($arr)>0 && $arr!=Null){
    if(password_verify($mdp, $mdpcrypte)==True){
        $_SESSION['connecter'] = True;
        header("Location: index.php");
        exit();
    }
else {
    header("Location: login.php");
    exit();
    }
}

else{
    header("Location: login.php");
    exit();
}

?>