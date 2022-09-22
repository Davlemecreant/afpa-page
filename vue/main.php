<!-- main -->

<?php
session_start();
include_once 'modèle/ConnexionBDD.php';
?>

<?php



?>

<main>

<!-- colonne gauche -->
<section>
<article class="grid-container">
  <article class="col1">
    <?php
    require('./modèle/affArticles.php');
    ?>

    <article class="bloc">

    </article>
   
  </article>

  <!-- colonne droite -->

  
<article class="col2">
    <article class="bloc3">

    <?php if(!isset($_SESSION['user'])) { ?>
      <form action="./vue/connexion.php" method="post">
        <article class="mb-3">
          <label for="Email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" required="required" autocomplete="off" />
        </article>
        <article class="mb-3">
          <label for="Password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="mot_de_passe" id ="mot_de_passe" required="required" autocomplete="off" />
        </article>
        <article class="d-flex justify-content-between">
          <button type="submit" class="btn btn-outline-light">Connection</button>
          <button type="submit" class="btn btn-outline-light"> <a href="./vue/inscription.php" id="text-reg2">Inscription</a> </button>
        <?php } else if(isset($_SESSION['user'])) { ?>
          <button class="btn btn-outline-light"><a href="modèle/deconnection.php" id="text-reg2">Deconnection</a></button>
        <?php } ?>

        </article>
      </form>

      <article class="bloc3">
      <video controls playsinline autoplay muted loop>
        <source src="./video/zen.mp4" type="video/mp4">
      </video>
    </article>
      <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                                
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
    </article>

    <!-- video -->

  
  </article>
</section>
</main>
  

