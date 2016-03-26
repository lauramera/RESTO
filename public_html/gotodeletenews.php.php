<?php
include'include/connect.php';


$sql = "SELECT `id`,`titre`  FROM `gondola`.`news`
ORDER BY datenews";



$requete = mysqli_query($bdd, $sql);
//var_dump($requete);
?>


<div class="row">
    <div class="col-md-9">
        <h2>Nouveautés</h2> 
        <?php
        while ($result = mysqli_fetch_array($requete, MYSQLI_ASSOC)) {
            ?>
            <h3>
                <?php echo utf8_encode($result['titre']);
                ?>
           

            <a onClick="return confirm('Delete This news?')" href ="delete.php?idnews=<?php echo $result['ik="return confirm('Delete This news?')" href ="delete.php?idnews=<?php echo $resud']?>">Supprimer</a>  
             </h3>

        <?php } ?>
    </div>





