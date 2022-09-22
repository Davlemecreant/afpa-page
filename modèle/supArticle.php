
<?php
    
    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        $sth = $bdd->prepare("DELETE FROM article WHERE id_article = $id");
        $sth->execute();
        echo "<meta http-equiv='refresh' content='0;./index.php'>";
    }
?> 