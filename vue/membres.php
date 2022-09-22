<?php 
session_start();
require_once './modèle/ConnexionBDD.php';
include 'bannir.php';
include './modèle/level.php';
if(empty($_SESSION)){
    echo "<meta http-equiv='refresh' content='0;./index.php'>";
}
if($_SESSION['level'] < 2){
    echo "<meta http-equiv='refresh' content='0;./index.php'>";
} 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les membres</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<!-- Afficher les membres -->
    
    <h1 class="liste-mbre">Administration membres</h1>
    <?php
        $recupUsers = $bdd->query('SELECT * FROM utilisateur');
        $recupUsers->fetchAll();

        $sth = $bdd->prepare("SELECT * FROM utilisateur order by id_utilisateur DESC");
        $sth->execute();
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        $line = count($resultat);
        for($i = 0; $i < $line; $i++){
    ?>

<?php
        $id = $resultat[$i]["id_utilisateur"];
?>
            <div class="container-admin">
            <div class="list-mbre">
            <p class="mbre"><?= $resultat[$i]["nom"]; ?> </p>
            <p class="mbre"><?= $resultat[$i]["email"]; ?> </p>
            <p class="mbre"><?= $resultat[$i]["level_U"]; ?> </p>
            
            <div class="adminBtn">
    <form method="POST" action=""> 
            
            <button class="btn btn-outline-secondary btn-adm" name="delete" value="<?php echo $id ?>">Bannir</button>
    </form>


</div>
</div>
<form method='POST' action='' class='adminOptions'>
                        <div class='levelSelect'>
                            <select name='selectUser'>
                                <option value='0'>0 - utilisateur</option>
                                <option value='1'>1 - Modérateur</option>
                                <option value='2'>2 - Administrateur</option>
                            </select>
                            <button class="btn btn-outline-secondary btn-adm" name="levelUser" value="<?php echo $id ?>">Appliquer level</button>
                        </div>
                        
                    </div>
        </form>


            
            <?php
        }
   
    ?>

<!-- fin d'affichage de membres -->
</body>
</html>