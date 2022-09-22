<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- bootstrap 5 css link -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <title>Article</title>

      <!-- CSS-->
      
      <link rel="stylesheet" href="../style.css">
      <!-- Javascript -->
  <script defer src="script.js"></script>


</head>

<body>

 

<section class="vh-100 w-100 row d-flex justify-content-center align-items-center" style="background-color: #eee; margin-left:0 !important";>
<form action="vue\traitementForm.php" method="post">
  <div class="container  h-100">
    <div class="row d-flex justify-content-center align-items-center  h-100">
      <div class="col-lg-12 col-xl-10">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-3">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <div class="mb-3 d-flex justify-content-center align-items-center flex-column">
              
                    <h1 class="article-title mb-2">Tapez votre article</h1>
              </div>

              <div class="title mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" id="titre" placeholder="Entrez votre titre" required="required" autocomplete="off">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Auteur</label>
                <input type="text" class="form-control" name="auteur" id="auteur" placeholder="Entrez votre nom" required="required" autocomplete="off">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Article</label>
                <textarea type="text" class="form-control" name="contenu" id="contenu" rows="5" placeholder="Tapez votre article" required="required" autocomplete="off"></textarea>
              </div>
              <div class=" mb-3 mb-lg-2 d-flex justify-content-center align-items-center">
               <button type="submit" name="submit" class="btn btn-outline-secondary btn-lg">Envoyer</button>
                  </div>

              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>


  <!-- JavaScript with Popper bootstrap 5 link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>
</html>