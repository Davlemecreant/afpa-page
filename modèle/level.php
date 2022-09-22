<?php 

    if(isset($_POST['levelUser'])){
        if($_SESSION['level'] == 2){
            $valueUser = $_POST['selectUser'];
            $idUser = $_POST['levelUser'];
            $sth = $bdd->prepare("UPDATE utilisateur SET level_U = '$valueUser' WHERE id_utilisateur = $idUser");
            $sth->execute();
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }

?>