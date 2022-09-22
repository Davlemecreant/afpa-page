

<div class="adminBtn">

    <?php
        $id = $resultat[$i]["id_article"];
    ?>

    <form method="POST" action="">
            <button class="btn btn-outline-secondary" name="edit" value="<?php echo $id ?>">Editer</button>
            <button class="btn btn-outline-secondary" name="delete" value="<?php echo $id ?>">Supprimer</button>
    </form>
</div>