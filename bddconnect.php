<?php
    try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=id2995274_mimicom;charset=utf8', 'id2995274_emilientriau', '1NJ4LLK4D4J');
        }

    catch(Exception $error)

        {
            die('Erreur : '.$error->getMessage());
        }
?>
