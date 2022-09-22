<?php
   
        include 'connexionBDD.php';
            try{
                 /*Sélectionne toutes les valeurs dans la table users*/
                 $sth = $bdd->prepare("SELECT DATE_FORMAT(datation,'%d %M %Y %H:%i:%S') AS datation,id_article,titre,auteur,contenu, id_utilisateur FROM article order by id_article DESC");
                 $sth->execute();
                 /*Retourne un tableau associatif pour chaque entrée de notre table
                  avec le nom des colonnes sélectionnées en clefs*/
                 $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
             }                 
            catch(PDOException $e){
                echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
            }
            // affichage des articles de la BDD
            $lignes = count($resultat);
            include 'supArticle.php';
            for($i=0;$i<$lignes;$i++){

               
                $idArticle = $resultat[$i]['id_article'];
                $dateFormated = date('d F Y', strtotime($resultat[$i]["datation"]));
                $idArtClient = $resultat[$i]['id_utilisateur'];
                $pseudoClient = $resultat[$i]["auteur"];
                $valueTitre = stripslashes($resultat[$i]['titre']);
                $valueCorp = stripslashes($resultat[$i]['contenu']);

                include 'article-bloc.php';
            }

?>
