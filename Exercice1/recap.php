
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

</head>
<body >
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="resa.html">Passer une Commande</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="container">
    <?php
    $nbSand = 0 ;
    if (isset($_POST['nbSand']) && $_POST['nbSand'] > 0)
        $nbSand = $_POST['nbSand'] ;
    $price = $nbSand * 4 ;
    if ($nbSand > 10) {
        $price = $price *0.9 ;
    }
    ?>
    <div class="card" style="width: 50rem; height: auto">
        <div class="card-body">
            <h5 class="card-title">Les details de la commande</h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php
                if (isset($_POST['nom']))
                    echo "Mr.".htmlspecialchars($_POST['nom']) ;
                if (isset($_POST['prenom']))
                    echo " ".strip_tags($_POST['prenom']) ;
                ?></h6>
            <p class="card-text">
                <?php

                    echo $nbSand." sandwich(s) " ;
                if (isset($_POST['listeSand']) && $_POST['listeSand'] != 'Choisir Ingrédients')
                    echo $_POST['listeSand']."<br>" ;
                echo "<br>Supplements: <br>" ;
                if (isset($_POST['mayo']))
                    echo "-".$_POST['mayo']."<br>"  ;
                if (isset($_POST['harissa']))
                    echo "-".$_POST['harissa']."<br>"  ;
                if (isset($_POST['salade']))
                    echo "-".$_POST['salade']."<br>"  ;
                ?>
            </p>
            <?php
            $target_file = explode('.',$_FILES['cin']['name']) ;
            $file_extension = strtolower(end($target_file));

            $num= rand(1,1000) ;
            while (file_exists(basename($num.".".$file_extension)) ){
                    $num= rand(1,1000) ;
                    echo $num ;
            } ;
            if (file_exists(basename("10.".$file_extension)) )
                echo "TRUE" ;
            $target = "./uploads/".$num.".".$file_extension ;
            if (move_uploaded_file($_FILES["cin"]["tmp_name"] , $target)){

                echo "Votre Carte d'identite est bien recu" ;
            }

            else
                echo "Error Upload" ;

            ?>
            <p class="card-text"><?="Prix de la commande : ".$price." DT"   ?></p>
            <img src='<?=$target?>'>

        </div>
    </div>

</div>
</body>
</html>
