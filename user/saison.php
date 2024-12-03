<?php
require_once  "user\home.php";
class saison {
    public  function Ingrediant(){
        
           
               $site=new nurr_vue;
               $site->Ingrediants('nurr');
            
            
            
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
    
    
     
     
    private  function Header()
        {
            ?>
            <head>
            
            <script  src=".js"></script>
            <script src=".js"> </script>
            
            <link rel="stylesheet" href="saisonstyle.css">
            <title> CouZinty </title>
            </head>
            <?php
              }
    private function body(){
?>
<body>
<?php
    }
    public function categorie($Name){
        ?>
       
         <div class="cat">
         <h1></h1>
          <div class="slide">
          <a href="index.php?object=<?php echo $Name?>"> <h1 ><?php echo $Name ?></h1> </a>
            <div class="cover">
            <?php
                $cadre=new saisonpage;
                $r=$cadre->Get_result($Name);
                for($j=0;$j<count($r);$j++){
                  $y=$r[$j];
                  $k=new vue;
                  for ($x = 0; $x <10; $x++) {
                    $k->CadreSimple($y,'titre_cadre','image_cadre','descroption_cadre','id_recette');
                  }
                }
               
          
          
            ?>
          </div>
          </div>
        </div>
        <?php
       }
public function site_vue($name){
    $site=new vue();
    $site->begin();
    $this->header();
$this->body();
$site->Nav_header();
$site->menu();
if($name!=''){ 
    
  ?>
  <h1><?php   ?></h1> 
  <?php
   $this->Rcts($name);
   
}
else{
$this->categorie("ETE");
  $this->categorie("Printemp");
  $this->categorie("Hiver");
  $this->categorie("Automn");
}

$site->end();

}

}
?>
