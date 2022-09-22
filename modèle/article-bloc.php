<article class='bloc bloc-article'>

<?php

require 'ConnexionBDD.php';

                if($_SESSION){
                    if($_SESSION['level'] == 2 OR  $idArtClient == $_SESSION['id']){
                     include './vue/bouton-admin.php';
                    }
                }

                if(isset($_POST['edit'])){

                    if($idArticle == $_POST['edit']){
                        
                        include 'edArticle.php';
                        
                        
                    } else {
                            echo "<p class='titre'>";
                                echo ($resultat[$i]["titre"]); //récupération du contenu dans la bdd...
                            echo "</p>";

                            echo "<p class='contenu'>";
                                echo ($resultat[$i]["contenu"]); //récupération du contenu dans la bdd...
                            echo "</p>";
                            echo "<div class='info'>";
                            echo "<p class='auteur'>";
                            echo ($resultat[$i]["auteur"]); //récupération du contenu dans la bdd...
                        echo "</p>";

                            echo "<p>";
                                echo ($resultat[$i]["datation"]); //récupération du contenu dans la bdd...
                            echo "</p>";
                            echo'</div>';
                        
                    }

                }  else if (!isset($_POST['edit'])){
                            echo "<p class='titre'>";
                            echo ($resultat[$i]["titre"]); //récupération du contenu dans la bdd...
                        echo "</p>";

                        echo "<p class='contenu'>";
                            echo ($resultat[$i]["contenu"]); //récupération du contenu dans la bdd...
                        echo "</p>";
                        echo '<div class="info">';
                        echo "<p class='auteur'>";
                        echo ($resultat[$i]["auteur"]); //récupération du contenu dans la bdd...
                    echo "</p>";

                        echo "<p>";
                            echo ($resultat[$i]["datation"]); //récupération du contenu dans la bdd...
                        echo "</p>";
                        echo'</div>';
                    
                }  

                if(isset($_POST['annuler'])){

                    unset($_POST['edit']);
            
                
                }

                if(isset($_POST['editerArt'])){
        
                    $titreEdit = htmlspecialchars(addslashes($_POST['titreArticleEdit']));
                    $messageEdit = nl2br(htmlspecialchars(addslashes($_POST['corpArticleEdit']))) .  '<br/><br/><u><strong>Édité par ' .$_SESSION['nom']. ' le ' . $dateFormated . '</strong></u>';
                    $idEdit = $_POST['editerArt'];
                
                    if(!empty($titreEdit)){
                        if(!empty($messageEdit)){
                        
                            $sth2 = $bdd->prepare("UPDATE article SET titre = '$titreEdit', contenu = '$messageEdit' WHERE id_article = $idEdit");
                            $sth2->execute();
            
                            echo '<meta http-equiv="refresh" content="0;URL=./index.php">';
                        
                        } else {
                            $erreurArt = "L'article ne peut pas être vide !";
                        }
                    } else {
                        $erreurArt = "Vous devez écrire un titre !";
                    }
                }
            
            ?>
            
            </article>

        