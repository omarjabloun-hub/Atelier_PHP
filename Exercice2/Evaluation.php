

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Evaluation Cours PHP</title>
</head>
<body>
<div class="container" style="margin-top: 100px ; margin-bottom: 100px">
    <form action="sondage.php" method="post">

        <h1>Notez le cours du PHP :</h1>
        <div class="container"style="margin-top: 10px ; margin-bottom: 10px">
            <input type="radio" class="btn-check" name="vote" id="Bon" autocomplete="off" checked value="Bon">
            <label class="btn btn-secondary" for="Bon">Bon</label>
            <input type="radio" class="btn-check" name="vote" id="Moyen" autocomplete="off" value="Moyen">
            <label class="btn btn-secondary" for="Moyen">Moyen</label>
            <input type="radio" class="btn-check" name="vote" id="Mauvais" autocomplete="off" value="Mauvais">
            <label class="btn btn-secondary" for="Mauvais">Mauvais</label>

        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-light mb-3">Confirmer</button>
        </div>
    </form>
</div>
</body>
</html>