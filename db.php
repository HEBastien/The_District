<?php
function DB(){
    $servername = "localhost" ;
    $username = "root" ;
    $password = "Caline1998!" ;
    $dbnom =  "the_district" ;

    try {
        $pdo = new PDO("mysql:host=$servername;dbnom=$dbnom", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(PDOException $e){
        echo "Impossible de se connecter a la base de donnée " . $e->getMEssage();
    }
    return $pdo;

}
?>