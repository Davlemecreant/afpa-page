<?php
      try{
              // On se connecte à la BDD
              $servname = "localhost"; $dbname = "afpa-page"; $user = "root"; $pass = "";
              $bdd = new PDO("mysql:host=$servname;dbname=$dbname",$user,$pass);
              $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
              }
      catch(PDOException $e){
              echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
              }
?>