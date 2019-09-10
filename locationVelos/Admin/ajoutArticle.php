<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
<h1>Ajouter un Article</h1>
<form class="form-group" action="ajoutArticlePHP.php" method="post">
    <label for="nomArticle">Nom de l'article</label>
    <input type="text" class="form-control mb-3" name="nomArticle" id="nomArticle">
    <label for="descriptionArticle">Description</label>
    <textarea class="form-control mb-3" name="descriptionArticle" id="descriptionArticle" cols="30" rows="10" placeholder="Description de l'article"></textarea>
    <label for="photoArticle">Lien de photo</label>
    <input class="form-control-file mb-3" type="file" name="photoArticle" id="photoArticle">
    <div class="row">
    <div class="col"><button class="btn btn-primary btn-block" type="submit">Enregistrer</button></div>
    <div class="col"><button class="btn btn-danger btn-block" type="reset">Annuler</button></div>
    </div>
</form>
</div>
</body>

</html>