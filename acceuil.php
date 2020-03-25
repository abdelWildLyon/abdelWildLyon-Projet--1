<!DOCTYPE html> 
<html lang = "fr"> 

<head> 
    <meta charset = "UTF-8"> 
    <title> Game of throne </title> 
    <meta name = "author" content = "Vianney Bouault"> 
    <meta name = "description" content = "Accueil"> 
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no"> 
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity = "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin = "anonymous"> 
    <link rel = "stylesheet" href = "style.css"> 
 </head> 

<body> 

    <!-- ----------------------Header---------------------------- --> 

    <header class = "menu"> 
        <div class = "header"> 
            <img src = "images.png" alt = "image"> 
            <div class = "title"> 
                <h1> Got Travel Agency</h1> 
             </div> 
            <div class = "burger" onclick = "drop()"> 
                <div class = "fa-bars">  </div> 
                <div class = "fa-bars">  </div> 
                <div class = "fa-bars">  </div> 
             </div> 
         </div> 
     </header> 

    <!-- ----------------------Nav---------------------------- --> 

    <nav class = "dropdown"> 
        <img src="ico.ico" alt="Exit" onclick = "drop()">
        <a href = "acceuil.php"> Accueil </a> 
        <a href = "index_reservation.php"> Reservation </a> 
        <a href = "contact.php"> Contact </a> 
     </nav> 

    <!-- ----------------------Main---------------------------- --> 

    <section class = "headAcceuil"> 
        <div id = "conteneurimgSlide"> 
            <img id = "imgSlide" src = "https://static.hitek.fr/img/actualite/2017/01/13/fb_the-wall-from-the-south.jpg" alt = "image slider" /> 
        </div>
        <div class = "conteneurLigne"> 
            <div class = "conteneurFiltre"> 
                <select name = "destination" id = "select"> 
                    <option value = ""> Choisissez votre destination </option> 
                    <option value = "0"> Winterfell </option> 
                    <option value = "1"> Port Real </option> 
                </select> 
                <button type = "button" class = " boutonAcc btn btn-dark" onclick = "go()"> GO ! </button> 
                <p id ="rappel"></p>
            </div> 
        </div> 
     </section> 

    <section class = "phraseAcceuil">
        <h2>Voyage à Westeros</h2>
        <article> Choisissez votre déstination , puis partez à la conquète de Westeros en quelques clics, 
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe quo rerum illo architecto 
            inventore ratione quaerat eius culpa, unde rem officiis assumenda aut sint modi distinctio 
            obcaecati sunt iure laboriosam! </article> 
     
     </section> 
    <div class = "carte-Throne"> 
      
    </div> 

    <!-- ----------------------Footer---------------------------- --> 
    <footer> 
        <ul> 
            <li><a href = "#" title = "Non Ne Faites pas ça SVP" > </span>Annulation &#x1F614;</a></li>
            <li><a href = "#" title = "Venez Voir"> Vente Flash <span class = "color-point"> ... </span></a></li>
            <li><a href = "#">Nos Conditions<span class = "color-point"> ... </span></a></li>
        </ul>  
     </footer> 

    <!-- ----------------------Script---------------------------- --> 

    <script src = "img-deroulante.js">  </script> 
    <script src = "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity = "sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin = "anonymous">  </script> 
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous">  </script> 
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity = "sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin = "anonymous">  </script> 

 </body> 

 </html> 