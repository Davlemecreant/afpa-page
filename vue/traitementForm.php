<?php
  session_start() ;
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require ("../modèle/ConnexionBDD.php");


if (isset($_POST['submit'])) {
  $titre = !empty($_POST["titre"]) ? $_POST["titre"] : NULL;
  $auteur = !empty($_POST["auteur"]) ? $_POST["auteur"] : NULL;
  $contenu = !empty($_POST["contenu"]) ? $_POST["contenu" ] : NULL;
  $idUser = $_SESSION['id'];


$insert1 = $bdd->prepare("INSERT INTO article(titre, auteur, contenu, id_utilisateur) VALUES (:titre, :auteur, :contenu, $idUser)") or die(print_r($conn->errorInfo()));

$insert1->bindParam(':titre',$titre);
$insert1->bindParam(':auteur',$auteur);
$insert1->bindParam(':contenu',$contenu);
// $insert1->bindParam(':int',$id);
$insert1-> execute();

header("location: ../index.php");
} else {
   header("location: ^../index2.php");
}

?>