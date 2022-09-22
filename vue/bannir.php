<?php
    
    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        $sth = $bdd->prepare("DELETE FROM utilisateur WHERE id_utilisateur = $id");
        $sth->execute();
        
    }
?>
