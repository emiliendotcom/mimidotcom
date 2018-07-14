<?php $nbPage = 0; ?>
<?php include ('header.php');?>

<div class="container">
    <section>
        <div class="col-xs-12 col-lg-4 col-sm-12 col-md-12">
            <h1>Qui suis-je?</h1>

            <blockquote><img class="col-xs-4 col-lg-6 col-sm-4 col-md-4" src="images/moi.png" alt="Qui suis-je?" />
                <br />Passionné depuis l'adolescence par l'informatique et plus particulièrement par le web, j'ai développé mon premier site internet lors de mes années lycées.<br /><br /> Après ces débuts modestes et à la suite de mes études en développement informatique, j'avais dans l'idée de trouver un emploi dans le monde du web qui me plaît beaucoup, mais je me suis rapidement rendu compte que je n'avais pas suffisamment confiance en mes compétences pour briller lors d'éventuels entretiens.<br/><br /> J'ai donc décidé d'utiliser le temps à ma disposition pour perfectionner mes compétences et développer un site web. <br /><br /> L'une de mes plus grandes passions est le dessin, plus particulièrement le digital art, c'est pourquoi j'ai choisi de partager en toute modestie certaines de mes créations ici. Ce site web est donc une vitrine, un portfolio et un bac à sable me permettant de perfectionner mes connaissances.<br /><br /> En espérant que la visite vous soit agréable, en cas d'interrogations, je répondrais à toutes vos questions avec grand plaisir.<br /><br /></blockquote>
            <p class="textedroite"><strong>Emilien Triau</strong></p>

        </div>
    </section>
    <section>
        <div class="col-xs-12 col-lg-8 col-sm-12 col-md-12">
            <h1>Actualités</h1>
            <div class="petitpad">
                <?php
                $reponse = $bdd->query('SELECT * FROM actu ORDER BY id DESC LIMIT 6');
                    while ($donnees = $reponse->fetch())
                        {
                            ?>
                    <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
                        <div class="actu">
                            <h4><i class="fa fa-arrow-right" aria-hidden="true"></i>
                                <?php echo $donnees['titre']; ?>
                            </h4>
                            <p class="dateactu">
                                <i>le <?php echo $donnees['date'];?> </i><br /><br />
                                <?php echo $donnees['contenu']; ?><br />
                            </p>
                        </div>
                    </div>
                    <?php

                        }
                    $reponse->closeCursor(); ?>
            </div>
        </div>

    </section>

</div>

<?php include ('footer.php');?>
