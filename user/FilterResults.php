<?php
require_once  "user\home.php";
class Results{
    private  function Header()
    {
        ?>
        <head>
        
        <script  src=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"> </script>
        
        <link rel="stylesheet" href="styleacceuil.css">
        <title> CouZinty </title>
        </head>
        <?php
          }
   
   
   public function categorie(){
    ?>
     <form class="filter" method="POST" >
        <p>Rechercher Votre recette <?php echo $_SESSION['object'] ?> Par :</p><br>
        <input  type="text" name="Nom_recette" placeholder="Nom Recette"/>
        <input type="text" name="prepare_time"  placeholder="Temps de preparation"/>
        <input type="text" name="cuisss_time" placeholder="Temps de cuisson "/>
        <input type="text" name="calories" placeholder="Nombre de Calories"/>
        <select name="diff">
        <option value="">Selectionner la difficulté</option>
          <option value="facile">Facile</option>
          <option value="difficile">Difficile</option>
          <option value="moyenne">Moyenne</option>
        </select>
        <input type="submit" name="val" value="Chercher" />
      </form>

     <div class="catégorie">
       <h1>Results</h1> 
      <div class="slide">
        <div class="cove">
        <?php
            $cadre=new Resllts;
            $r=$cadre->Get_Filter();
            $k=new vue;
           for($x=0;$x<count($r);$x++){
          $k->CadreSimple($r[$x],'titre_cadre','image_cadre','descroption_cadre','id_recette');

           }
            
        ?>
      </div>
        
      </div>
    </div>
    <?php
   }
   
public function site_vue(){
?>
<!DOCTYPE html>
<html>
<?php
$site=new vue;
$this->Header()
?>
<body>
<?php 
$site->Nav_header();
$site->menu();
$this->categorie("Results");
?>
</body>
<?php
$site->Footer();
?>
</html>
<?php
}
}
?>