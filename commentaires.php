  <div class="col-lg-12">
    <?php
    $req = $bdd->query('SELECT * FROM commentaires ORDER BY id DESC');
    $req2 = $bdd->query('SELECT COUNT(id) as nbComs FROM commentaires');
    $donnees = $req2->fetch();
    $req2->closeCursor();
    
    $msgparpage = 5;
    $nombre = $donnees['nbComs'];
    $nombreDePages = ceil($nombre / $msgparpage);
    
      
      
    if (isset($_POST['message']))
    {
        $query = $bdd->prepare('INSERT INTO commentaires(auteur, datepost, comm) VALUES(:auteur, NOW(), :comm)');

        $query->execute(array(
            'auteur' => $_POST['nom'],
            'comm' => $_POST['message']
        ));
    }
    echo '<ul id="menu" class="list-group collapse in text-center">
    <li class="list-group-item"><span class="glyphicon glyphicon-comment"></span> 
        <a class="text" href="#comme" data-toggle="collapse">Commentaires</a><span class="badge">'.$nombre.'</span></li><div id="comme" class="collapse">';

    $i = 0;
    while ($rep = $req->fetch())
    {

        echo '<p class="talkbubble"> Le <i>'.$rep['datepost'].'</i> Par <b>'.$rep['auteur'].'</b><br /><br />'.nl2br(htmlspecialchars ($rep['comm'])).'<br /><br /></p>';
        $i++;
    }
    $req->closeCursor();   
    if ($i == 0)
    {
        echo '<div class="comm text-center"><p>Il n\'y a pas encore de commentaire... Postez-en un !</p></div>';
    }
    echo '<form class="col-lg-12" method="post">
         <fieldset>
         <legend>Laisser un message : </legend>
            <label for="nom">Votre nom:</label>
            <input type="text" name="nom" id="nom" />
            <label for="message">Votre message:</label>
            <textarea name="message" id="message">
            </textarea>
        </fieldset> 
        <p><input type="submit" value="Envoyer" id="envoi"/></p>
        </form>'; 



    echo '</ul></div>';
    ?>



  </div>