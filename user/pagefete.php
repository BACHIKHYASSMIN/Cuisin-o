<?php
require_once "C:\wamp64\www\Projet\user\home.php";

class fete_vue{
    private  function Header()
    {
        ?>
        <
        <link rel="stylesheet" href="style2.css">
        <title> News page </title>
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
                     <div class="catégo">
                      <a href="index.php?ob=<?php echo $Name ?>"> <h1 ><?php echo $Name ?></h1> </a>
                      <div >
                      <div class="limit">
                        <div class="cover">
                        <?php
                                $site=new fete_con;
                                $u=$site->Get_Fete($Name);
                                 $k=new vue;
                              for ($x = 0; $x <10; $x++) {
                                $k->CadreSimple($u,'nom_recette','image_recette','description_cadre','id_recette');
                              }
                            
                           
                
                      
                        ?>
                      </div>
                      </div>
                      </div>
                    </div>
                    <?php
                   }

                   
public function site(){

    $this->Header();
    $site=new vue();
    $site->begin();
    $this->header();
$this->body();
$site->Nav_header();
$site->menu();
$site=new fete_con;
$t=$site->Get_FetName();
foreach($t as $p){
    $k=$p['occasion'];
    $this->categorie($k);
}
$site=new vue();

$site->end();
}
}
?>