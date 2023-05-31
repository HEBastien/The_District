<?php
    $id=get_id() ;
    $plat=platcatspe($id) ;
    ?> 
<!-- plats -->
<div class='row no-gutters m-5 justify-content-center'>  
    <?php foreach ($plat as $plat): ?>
    <div class='col-md-5 mx-2'>
        <div class='row no-gutters bg-light'>
            <div class='col-md-5'>
               <img src="assets\images\food\<?=$plat->image ?>" alt="X" class='w-100'> 


            </div>
            <div class='col-md-7 p-4 text-center mt-4'>
                <p><?=$plat->libelle ?></p>
                <p><?=$plat->description ?></p>
                <p><?=$plat->prix ?> €</p>
                <a class="btn btn-dark" href="commande.php?id=<?=$plat->id ?>" role="button">Commander</a>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>
</div>