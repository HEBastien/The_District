<?php 
if (($_SESSION['login']="True")){ 
    include "header.php";
    include "assets/content/admin/update_content.php";
    include "footer.php";
}

else {
    header("acceuil.php");
    exit();
}
?>