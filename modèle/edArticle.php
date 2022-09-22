<?php

    require 'ConnexionBDD.php';
            
        
        $valueTitre = stripslashes($resultat[$i]['titre']);
        $valueCorpText = stripslashes($resultat[$i]['contenu']);

        $aremplacer = array("<br />", "<br/>", "<br>", "<u>", "</u>");
        $valueCorp = str_replace($aremplacer, "", $valueCorpText);

        $id = $resultat[$i]["id_article"];
        

        echo "<article class='bloc bloc-article editBloc'>";

        echo '<form method="POST" action="" class="editForm"><input type="text" class="titre2" name="titreArticleEdit" value="'.$valueTitre.'">';

        echo '<textarea type="textarea" class="article2" name="corpArticleEdit" maxlength="2000">'.$valueCorp.'</textarea>';

        echo '<div class="editCancel">
                    <button class="btn btn-outline-secondary" name="editerArt" value="'.$id.'">Editer</button>
                    <button class="btn btn-outline-secondary" name="annuler" value="'.$id.'">Annuler</button>
                </div></form>';

    echo "</article>";
    
?>