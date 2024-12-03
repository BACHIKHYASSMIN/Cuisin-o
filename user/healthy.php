<?php

class healthy_view{
    private  function Header()
        {
              ?>
              
              <link rel="stylesheet" href="HethyStyle.css">
              <title> Healthy page </title>
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
         <div class="catégorie">
          <h1><?php echo $Name ?></h1> 
          <div class="slide">
            <div class="cover">
            <?php
                $cadre=new healthy;
                $r=$cadre->sset_cadre();
                for($i=0;$i<count($r);$i++){
                $k=new vue;
                $k->CadreSimple($r[$i],'titre_cadre','image_cadre','descroption_cadre','id_recette');
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
$this->categorie("Healthy");
$site->Footer();
$site->end();

}
}
?>