<?php
class Ing{
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
    <label for="exampleInputEmail1" class="form-label">Nom Ingrédiant</label>
    <input type="text" class="form-control" name="nom_ing" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="<?php echo $_GET['nom']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Glucides</label>
    <input type="number" class="form-control" name="type" id="exampleInputPassword1"  placeholder="<?php echo $_GET['type']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lipides</label>
    <input type="number" class="form-control" name="tpp" id="exampleInputPassword1"  placeholder="<?php echo $_GET['tpp']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Minéraux</label>
    <input type="number" class="form-control" name="tc" id="exampleInputPassword1" placeholder="<?php echo $_GET['tc']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Vitamines</label>
    <input type="text" class="form-control"  name="tr" id="exampleInputPassword1" placeholder="<?php echo $_GET['tr']?>"> 
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Healthy_prop</label>
    <input type="number" class="form-control" name="cal" id="exampleInputPassword1" placeholder="<?php echo $_GET['cal']?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ajouter une Image</label>
    <input type="file" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $_GET['']?>">
<?php if($_GET['nm']!=""){ ?></div>
  <button type="submit" name="mn" class="btn btn-primary">Modifier</button>
</form>
</div>
<?php
} 
else{
?>  </div>
  <button type="submit" name="add" class="btn btn-primary">Ajouter</button>
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