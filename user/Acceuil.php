
<?php
require_once  "controller\AcceuilController.php";
require_once  "user\home.php";
       class UserView {


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
       

      <form class="filter" method="GET" >
        <p>Rechercher Votre recette <?php echo $_SESSION['object'] ?> Par :</p><br>
        <input  type="text" name="Nom_recette" placeholder="Nom Recette"/>
        <input type="text" name="prepare_time"  placeholder="Temps de preparation"/>
        <input type="text" name="cuisss_time" placeholder="Temps de cuisson "/>
        <input type="text" name="calories"  placeholder="Nombre de Calories"/>
        <select name="diff">
          <option value="">Selectionner la difficulté</option>
          <option value="facile">Facile</option>
          <option value="difficile">Difficile</option>
          <option value="moyenne">Moyenne</option>
        </select>
        <input type="submit" name="val" value="Chercher" />
      </form>
  <?php 
       $this->categorie($nom);
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
  $site->menu();
  if($name!=''){ 
    
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