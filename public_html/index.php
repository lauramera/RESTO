

    <?php include'include/header.php'; ?>

    <body>


        <?php include'include/nav.php'; ?>

        <header class="text-center" name="home">
            <div class="intro-text">
                <h1 class="wow fadeInDown">La <strong><span class="color">Gondola</span></strong></h1>
                <p class="wow fadeInDown">Un restaurant pour vos repas d'affaires</p> </header>


        <div class="container">

            <?php include'include/news_bloc.php'; ?>
 
        </div>

    </body>


    <footer>
         <div class="container">
             
        <div class="col-md-12">
            
            <div class="form-group">
                <label for="exampleInputEmail1"> Vous souhaitez être tenu au courant de nos derniers menus? 
                    <h2> Souscrivez à notre newsletter : </h2>
    
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
        </div>   
         </div>
        <br>
        <br>
        <br>
        
            <div class="col-md-6">
<h2>Contactez-nous pour une réservation:</h2> <br><br> <br>
         
                <form  action="cible.php" method="post">
                    <label for='name'>Nom:</label>
                <input id='name' name='name'
                       required placeholder='Entrez votre nom'/> <br><br>
                <label for='mail'>E-mail:</label>
                <input id='mail' name='mail' type='email'
                       required placeholder='Entrez votre E-mail'/> <br><br>
            <label for='phone'>Telephone:</label>
                <input id='mail' name='phone' type='text'
                       required placeholder='Entrez votre Numero de Phone'/> <br><br>
            
                 <label for='sujet'>Sujet:</label>
                <input id='name' name='sujet'
                       required placeholder='Entrez votre sujet'/> <br><br>
                <label for='message'>Votre message:</label>
                <textarea id='message' name='message'
                          required placeholder='Entrez votre message' 
                          cols='25' rows='5'></textarea> <br> <br>
                          <input type='submit' value='Envoyer'>
                </form> 
  </div>
        
            <div class="col-md-6">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81343.24017573336!2d4.35757036676374!3d50.42291402787283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c225f096ca39c9%3A0x40099ab2f4d6410!2sCharleroi!5e0!3m2!1sfr!2sbe!4v1453238823266" 
                        width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <br> <br>
                      

            
            </div>
      
    </footer>
</html>
