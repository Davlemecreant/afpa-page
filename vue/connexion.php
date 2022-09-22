<?php 
    session_start();
    require_once '../modèle/ConnexionBDD.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['mot_de_passe'])) // Si il existe les champs email, password et qu'il sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['mot_de_passe']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT *  FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data["mot_de_passe"]))
                {   
                    
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['token'];
                    $_SESSION['level'] = $data['level_U'];
                    $_SESSION['nom'] = $data['nom'];
                    $_SESSION['id'] = $data['id_utilisateur'];
                    $_SESSION['email'] = $data['email'];
                    
                    header('Location: ../index.php');
                    
                    die();
                }else{ header('Location: ../index.php?login_err=password'); die(); }
            }else{ header('Location: ../index.php?login_err=email'); die(); }
        }else{ header('Location: ../index.php?login_err=already'); die(); }
    }else{ header('Location: ../index.php'); die();} // si le formulaire est envoyé sans aucune données

?>