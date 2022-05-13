<!DOCTYPE html>
<?php


session_start() ;
if ( !isset($_SESSION['notes'])) {
    $_SESSION['notes'] = [] ;
}

else if (isset($_POST['title']) && isset($_POST['content']))
    $_SESSION['notes'] += [$_POST['title'] => $_POST['content']];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top: 100px ; margin-bottom: 100px">

    <form action="" method="post" >
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" class="form-control" id="Title" name="title">
        </div>
        <div class="mb-3">
            <label for="Content" class="form-label" >Content</label>
            <textarea class="form-control" id="Content" name="content" rows="3"></textarea>
        </div>
        <input type="submit">
    </form>

    <div>
        <h1>Notes :</h1>
        <div class="container"></div>
        <div class="d-flex flex-row bd-highlight mb-3 d-flex justify-content-between flex-wrap">
        <?php
            foreach ($_SESSION['notes'] as $title => $content ) {
              echo "
                
                <div class='card border-primary mb-3  bd-highlight' style='max-width: 18rem;'>
                  <div class='card-header'>$title </div>
                  <div class='card-body text-primary'>
                    <p class='card-text'>$content</p>
                  </div>
                </div>
              ";
            }

        ?>
    </div></div>
</div>


</div>

</body>
</html>