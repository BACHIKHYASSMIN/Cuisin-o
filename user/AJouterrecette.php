<?php
class Addrecette{
    public function Afficher_site()
    {
        ?>
        <html>
            <head>
                <title>Formulaire d'ajout</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            </head>
            <body>
<div class="container">
        <form methode="POST" action="index.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom Recette</label>
    <input type="text" class="form-control" name="nom" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Type de Recette</label>
    <input type="text" class="form-control" name="type" id="exampleInputPassword1"  placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Temps de Préparatoion</label>
    <input type="text" class="form-control" name="tpp" id="exampleInputPassword1"  placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Temps de Cuisson</label>
    <input type="text" class="form-control" name="tc" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Temps de Repos</label>
    <input type="text" class="form-control"  name="tr" id="exampleInputPassword1" placeholder=""> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Calories</label>
    <input type="number" class="form-control" name="cal" id="exampleInputPassword1" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Les Ingrediants:Quantity</label>
    <input type="text" name="ings"class="form-control" name="" id="exampleInputPassword1" placeholder="">
    <div id="emailHelp" class="form-text">Les Ingrediants sont séparer par ","</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Les Etapes</label>
    <input type="text" name="etapes"class="form-control" id="exampleInputPassword1" placeholder="">
    <div id="emailHelp" class="form-text">Les Etapes sont séparer par un saut de ligne</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ajouter une Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <button type="submit" name="sub" class="btn btn-primary">Ajouter</button>
</form>
</div>
<?php

?>
    </body>
    </html>
<?php

    }
}


?>