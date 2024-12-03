<?php
class user_connection{
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
   
    
    private function diaporama(){
      $dt=new AcceuilController;
      $dr=$dt->set_diaporama();
      ?>
       <div class="csslider">
    <ul class="slider">
      <?php
    foreach($dr as $row){
      ?>
    <li><a href="index.php?subject=news&idrn=<?php echo $row['id_cadre_news']?>"><?php echo '<img src="data:image;base64,'.base64_encode($row['image_news'] ).'">';?></a></li>
    <?php 
    }
    ?>   
    </ul>
       </div>
    

      <?php
    
  }

  public function Rcts($nom){
    ?>
       
    <div class="selectors">
    <div >
  <input type="hidden" id="filters" value="<?php $nom ?>">
<select name="fetchval" id="fetchval">
<option value="" disabled="" selected="" >Séléctionner un Filtres</option>
<option value="nom_recette" >Nom</option>
<option  value="Temps de Préparation" >Temps de Préparation </option>
<option value="Temps de Cuisson" >Temps de Cuisson </option>
<option value="Temps Total" >Temps Total </option>
<option value="Calories" >Calories </option>
<option value="Difféculté" >Difféculté </option>
<option value="Last Ajoutées" >Last Ajoutées </option>
</select>
    </div>
    </div>
    
<div class="cat">
    <div class="cove">
    <?php

    $site=new AcceuilController;
   $r=$site->set_cadre($nom);
      $this->Filtres($r);
    
      ?>
      
      </div>
</div>
<?php
    
  ?>
    
   
          <?php
            
  }
  public function Filtres($r){
    ?>
    <div class="cat">
    <div class="cove">
    <?php
    $k=new vue;
      $k->CadreSimple($r,'titre_cadre','image_recette','descroption_cadre','id_cadre');
      ?>
      
      </div>
</div>
    <?php
   }

   
   public function categorie($Name){
    ?>
     <div class="catégorie">
      <a href="index.php?object=<?php echo $Name?>"> <h1><?php echo $Name ?></h1> </a>
      <div class="slide">
        <div class="cover">
        <div class="limit">
        <?php
            $cadre=new AcceuilController;
            $r=$cadre->set_cadre($Name);
            $k=new vue;
           
                        
        
        
        for ($x = 0; $x <10; $x++) {
          $k->CadreSimple($r,'titre_cadre','image_recette','descroption_cadre','id_recette');
        }
      
        
        ?>
      </div>
        </div>
      </div>
    </div>
    <?php
   }
   
public function site_vue($name){
$title=$name;
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
$site->menuUser();
if($name!=''){ 

?>
<h1><?php   ?></h1> 
<?php
 $this->Rcts($name);
 
}
else{
$this->diaporama();
$this->categorie("entree");
$this->categorie("plats");
$this->categorie("desert");
$this->categorie("boissants");
}


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