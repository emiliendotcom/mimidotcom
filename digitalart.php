<?php $nbPage = 1; ?>
<?php include ('header.php');?>
<?php include ('galerieDigitalArt.php');?>
    <div class="container">
      <div class="row">
          <div class="col-xs-12 col-lg-4 col-sm-12 col-md-12">
            <h3>Mes réalisations</h3>
            
                <blockquote><img class="col-xs-4 col-lg-6 col-sm-4 col-md-4" src="images/moi.png" alt="Qui suis-je?"/>
                <br />Je dessine depuis ma plus tendre enfance et ça a commencé avec des Pokémon... puis, des Simpsons, beaucoup, beaucoup, beaucoup de Simpsons. Je passais littéralement mes journées à reproduire les scènes du canapé qu'il y a au générique du dessin animé! Enfin, à l'adolescence, j'ai commencé à dessiner des manga, et puis au fil des années, j'ai fini par abandonner...<br /><br />
                Il y a quelques années, quand j'ai découvert Photoshop, j'ai retrouvé cette passion sous une forme qui me correspondait plus et qui alliait mon amour (incommensurable) pour mon ordinateur et celui que j'avais pour le dessin, je vous en partage donc une partie ici.<br /> <br />
                Beaucoup de dessins se trouvent sur mon compte Instagram, je vous invite à y jeter un oeil et pourquoi pas donner votre avis ici et là ! <br />
                </blockquote>
                <p class="bouton"><a class="bouton" href="http://www.instagram.com/mimilafrappe"><button type="button" class="btn btn-primary"> -- Visiter mon profil Instagram </button></a></p>
            
        </div>
        <div class="col-xs-12 col-lg-8 col-sm-12 col-md-12">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="#portrait" data-toggle="tab">Portraits</a></li>
                <li><a href="#paysages" data-toggle="tab">Paysages</a></li>
                <li><a href="#misc" data-toggle="tab">Divers</a></li>
                <li><a href="#insta" data-toggle="tab">Instagram</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="portrait">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><a href="image.php?dessin=digitalart/1.jpg"><img src="digitalart/1.jpg"/></a></div>
                            <?php 
                                galerieDigitalArt('portrait'); 
                            ?>
                        </div>
                        <a class="left carousel-control" href="#carousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    
                </div>
                <div class="tab-pane" id="paysages">
                    <div id="carousel2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><a href="image.php?dessin=digitalart/2.jpg"><img src="digitalart/2.jpg"/></a></div>
                            <?php
                                galerieDigitalArt('paysage'); 
                            ?>
     
                        </div>
                        <a class="left carousel-control" href="#carousel2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    
                </div>
                <div class="tab-pane" id="misc">
                    <div id="carousel3" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><a href="image.php?dessin=digitalart/3.jpg"><img src="digitalart/3.jpg"/></a></div>
                            <?php 
                                galerieDigitalArt('divers'); 
                            ?>
     
                        </div>
                        <a class="left carousel-control" href="#carousel3" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel3" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    
                </div>
                <div class="tab-pane" id="insta">
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/381551" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
                    <p class="instagram text-center"><a href="http://www.instagram.com/mimilafrappe">Follow @mimilafrappe</a></p>
                </div>
            </div>
          </div>
      </div>  
    </div>
<?php include ('footer.php');?>
