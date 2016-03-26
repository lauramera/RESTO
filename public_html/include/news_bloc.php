<?php
include'connect.php';


$sql = "SELECT `id`,`titre`,datenews ,texte,image  FROM `gondola`.`news`
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

            </h3>
        <p>
                        <?php echo utf8_encode($result['texte']); 
                        ?>
            
        </p>
        
        <img src ="img/<?php echo $result['image'];?>">
             
        <?php
        }
        ?>
        
        
        

    </div>

  
</div>                