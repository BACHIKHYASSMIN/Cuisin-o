<?php
require_once "C:\wamp64\www\Projet\user\home.php";
class saison {
    public  function Ingrediant(){
        
           
               $site=new nurr_vue;
               $site->Ingrediants('nurr');
            
            
            
    }
    private  function Header()
        {
            ?>
            <head>
            
            <script  src=".js"></script>
            <script src=".js"> </script>
            
            <link rel="stylesheet" href="style2.css">
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
         
          <div class="slide">
          <a href="index.php?object=<?php echo $Name?>"> <h1 ><?php echo $Name ?></h1> </a>
            <div class="cover">
            <?php
                $cadre=new saisonpage;
                $r=$cadre->Get_result($Name);
                echo count($r);
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
public function site_vue(){
    $site=new vue();
    $site->begin();
    $this->header();
$this->body();
$site->Nav_header();
$site->menu();
$this->categorie("ETE");
  $this->categorie("Printemp");
  $this->categorie("Hiver");
  $this->categorie("Automn");
  
$site->end();

}

}
?>
