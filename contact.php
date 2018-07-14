<?php $nbPage = 3; ?>
<?php include ('header.php');?>
<div class="container">
    <section class="row">
        <div class="contact col-xs-12 col-lg-8 col-sm-12 col-md-12">
            <h3> Formulaire de contact </h3>
            <?php if (!isset($_POST['Cnom']) and !isset($_POST['email']) and !isset($_POST['objet']) and !isset($_POST['Cmessage']))
                {       
                    ?> 
                    <form action="contact.php" method="post">
                        <fieldset>
                        <legend>Vos coordonnées:</legend>
                            <label for="Cnom">Votre nom:</label>
                            <input type="text" name="nom" id="nom" />
                            <label for="email">Votre adresse mail:</label>
                            <input type="email" name="email" id="email" />
                            <br /><br />
                        </fieldset>
                        <fieldset>
                            <legend>Votre message:</legend>
                            <label for="objet">Objet de votre message:</label>
                            <input type="text" name="objet" id="objet" /><br /><br />
                            <label for="Cmessage">Votre message:</label>
                            <textarea name="Cmessage" id="contact">
                            </textarea>
                        </fieldset> 
                        <p><input type="submit" value="Envoyer" id="envoi"/></p>
                    </form> <?php
                }
                else
                {
                    $mel = "triau.emilien@gmail.com";
                    $headers = 'From:'. $_POST['email'] . "\r\n" .
                    'Reply-To:'.$_POST['email'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                    mail($mel, $_POST['objet'], $_POST['message'], $headers);
                    echo 'Votre message a bien été envoyé. Je reprends contact avec vous dès que possible.';
                }
                ?>
        </div>
        <div class="col-xs-12 col-lg-4 col-sm-12 col-md-12">
            <h3>Mes réseaux</h3>
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12"> <p><a href="http://www.twitter.com/emiliendotcom"><img class="col-xs-4 col-lg-6 col-sm-4 col-md-4" src="images/reseau/twitter.png" alt="twitter"/></a>
                Twitter est un outil que j'utilise beaucoup dans le cadre de ma veille technologique, vous pouvez m'y contacter par DM, je réponds sous 24 heures.<br /><br /></p></div>
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12"> <p><a href="http://www.instagram.com/mimilafrappe"><img class="col-xs-4 col-lg-6 col-sm-4 col-md-4" src="images/reseau/instagram.png" alt="instagram"/></a>
                J'utilise Instagram pour poster régulièrement mes dessins (numériques ou non). J'y suis globalement plutôt actif.<br /><br /><br /><br /></p></div>
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12"> <p><a href="https://www.linkedin.com/in/emilien-triau-0b96b0149/"><img class="col-xs-4 col-lg-6 col-sm-4 col-md-4" src="images/reseau/linkedin.png" alt="LinkedIn"/></a>
                J'ai créé un profil LinkedIn il y a encore très peu et je ne maîtrise pas encore totalement ce réseau mais vous pouvez également m'y trouver.<br /><br /><br /><br />
                
                </p></div>
        </div>   
    </section>
</div>

<?php include ('footer.php');?>
