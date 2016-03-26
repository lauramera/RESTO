<?php
include 'include/connect.php';
$sql = "DELETE from news WHERE id=".$_GET['idnews'];
mysqli_query($bdd, $sql);
$nbligne=mysqli_affected_rows($bdd);
echo $nbligne;
if ($nbligne==0) {
    echo ' pas de donnée';
}

//var_dump($requete);
       
      
        
        ?>