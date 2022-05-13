

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
        <a class="navbar-brand" href="Evaluation.php">Home Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="container">
    <?php

if (isset($_COOKIE['visite'])) {
    echo "
                <div class='alert alert-danger' role='alert'>
                  Vous avez deja voté Pour ".$_COOKIE['visite']."
        </div>" ;
}else{

    setcookie('visite' , $_POST['vote'], time()+120 );
    echo "
                <div class='alert alert-success' role='alert'>
                  Votre vote est enregistré avec succes
                </div>" ;
}

?>
</div>
</body>
</html>
