<?php
include'connect.php';
?>

<form role="form" enctype="multipart/form-data" action="savenews.php" method="post">
    
  <div class="form-group">
    <label for="titre">Insérez le titre de votre news:</label>
    <input type="text" class="form-control" id="titre" name="titre" value="titre" value="$titre">
  </div>
 
  <div class="form-group">
    <label for="date">Insérez la date d ajout:</label>
    <input type="text" class="form-control" id="datenews" name="datenews" value="$datenews">
  
  </div>
  
    <div class="form-group">
    <label for="texte">Insérez votre texte:</label>
<textarea class="form-control" rows="10" name="texte" value="$"></textarea>

       </div>
    
    
       <div class="form-group">
    <label for="texte">Uploadez votre image:</label>
       <div class="col-sm-10"> 
    <input type="file" class="form-control" id="fileToUpload" name='fileToUpload'>
    
       </div>

      <button type="submit" class="btn btn-default">Insérez votre news ! </button>


  </div>

</form>

<?php
