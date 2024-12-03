<?php
class Addform{
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
        <form methode="GET" action="indexadmin.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom News </label>
    <input type="text" class="form-control" name="nom_news" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description News</label>
    <input type="text" class="form-control" name="desc" id="exampleInputPassword1" placeholder="">
    <div id="emailHelp" class="form-text">Les Ingrediants sont séparer par ","</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ajouter une Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ajouter un Video</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
<?php if(isset($_GET['idnm'])!=""){ ?></div>
  <button type="submit" name="mod_news" class="btn btn-primary">Modifier</button>
</form>
</div>
<?php
} 
elseif(isset($_GET['idrm'])!=""){
  ?></div>
  <button type="submit" name="mod_recette" class="btn btn-primary">Modifier</button>
</form>
</div>
<?php
}
else{
  ?>  </div>
  <button type="submit" name="submit1" value="ss" class="btn btn-primary">Ajouter</button>
</form>
</div>
<?php
}
?>
    </body>
    </html>
<?php

    }
}
?>