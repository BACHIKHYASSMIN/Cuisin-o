<?php
require_once "C:\wamp64\www\Projet\user\home.php";
class RecetteView{
    public function Header(){
        ?>
        <
        <link rel="stylesheet" href="style2.css">
        <title> All Recette page </title>
        </head>
        <?php
          }
          private function body(){
            ?>
            <body>
            <?php
    }
    public function AllRecette($Name){
        ?>
<div class="cat">
          <div class="cove">
            
          <?php
          $k=new vue;
            $k->Cadre($Name);
            ?>
          </div>
</div>
          <?php
    }


public function site($Name){
$this->Header();
    $site=new vue();
    $site->begin();
    $this->header();
$this->body();
$site->Nav_header();
$site->menu();
$this->AllRecette($Name);
$site->end();
}

}
?>