<?php require("header.php") ?>

<div class="container single-etudiant">
  <div class="row text-uppercase">

    <div class="col-12 col-lg-6">
      <h4 class="titre-page nom-etudiant">Tatiana Olivier</h4>
      <p class="mail-etudiant">tatianaolivier@contact.com</p>
    </div><!--nom et mail-->
    
    <div class="col-4 col-lg-6 d-flex justify-content-end icon-media">
        <a href="#" class="fab fa-behance"></a>
        <a href="#" class="fab fa-dribbble"></a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="picto-cv"><img src="img/picto-cv.svg" class="picto-cv" alt="cv"></a>
    </div><!--icon media-->

    <div class="col-8 col-lg-6 etu-single">
      <div class="col-6 etu-picto-white">
          <img src="img/picto-logo-color.svg" alt="pictogramme">
          <input type="image" id="modif-picto" alt="modification" src="img/picto-modif.png">
      </div><!--etu picto-->
      <div class="col-6 d-flex flex-column align-self-center etu-section">
          <h5>WEB</h5><br>
          <h5>BAC 2</h5>
      </div><!--etu section-->
    </div><!--picto et section-->
          
    <div class="col-12 col-lg-6 d-flex flex-column description-etudiant">
        <p class="description-etu align-bottom mt-auto">J’adore les pandas et les grands palmiers. Les lasanges sont vraiment cool. J’aime l’illustration et le design.</p>
        <input type="image" id="modif-description" alt="modification" src="img/picto-modif.png">
    </div><!--paragraph description-->

  </div><!--row-->
</div><!--container single etudiant-->



<div class="container portfolio-etudiant">
  <div class="row text-uppercase">
    <div class="col-12 col-lg-5 show-creation">
      <div class="show-img">
          image
      </div>
      <h5 class="nom-etudiant">nom</h5>
      <svg width="450" height="550" class="rect1">
          <rect class="rect-1" width="450" height="550" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
        </svg> 
      <svg width="400" height="500" class="rect2">
        <rect class="rect-2" width="400" height="500" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
      </svg>
    </div><!--show creation-->

    <div class="col-12 col-lg-7 creations">
      <div class="row recherche">
        <div class="col filtre-random"><a>Randomize</a><input type="image" id="random" alt="random" src="img/picto-randomize.png"></div>
        <div class="col filtre cat">récents</div>
        <div class="col filtre cat">projet</div>
        <div class="col filtre cat">#</div>
      </div><!--row-->

      <div class="row">
          <div class="container all-travaux">
              <div class="row justify-content-around travaux">
                <div class="col-7 col-lg-4">
                  1
                </div>
                <div class="col-4 col-lg-3">
                  2
                </div>
                <div class="col-6 col-lg-4">
                  3
                </div>
              
                <div class="col-5 col-lg-3">
                  4
                </div>
                <div class="col-3 col-lg-5">
                  5
                </div>
                <div class="col-8 col-lg-3">
                  6
                </div>
            
                <div class="col-5 col-lg-5">
                  7
                </div>
                <div class="col-6 col-lg-3">
                  8
                </div>
                <div class="col-7 col-lg-3">
                  9
                </div>
                <div class="col-4 col-lg-3">
                  10
                </div>
                <div class="col-3 col-lg-3">
                  11
                </div>
                <div class="col-8 col-lg-5">
                  12
                </div>
              </div><!--row-->
            </div><!--container  travaux-->
      </div><!--row-->

      <div class="row d-flex flex-column pictogrammes">
        <div class="col-2">
          <img src="img/picto-modif.png" alt="modification">
        </div>
        <div class="col-2">
          <img src="img/picto-plus.png" alt="ajouter">
        </div>
      </div><!--row-->

    </div><!--creations-->

  </div><!--row-->
</div><!--portfolio etudiant-->


<?php require("footer.php") ?>