<?php
require_once  "user\home.php";

class nurr_vue{
    public function Ingrediants($Name){
        ?>
<div class="cat">
  <div class="slide">
    <h1>Nuttrition</h1>
          <div class="cover">
            
          <?php
           $cadre=new nurr_con;
           $r=$cadre->Get_nurr();
          $k=new vue;
            $k->CadreIng($r);
            ?>
          </div>
  </div>
</div>
          <?php
    }
    private  function Header()
    {
        ?>
        
        <link rel="stylesheet" href="saisonstyle.css">
        <title> News page </title>
        </head>
        <?php
          }
          private function body(){
            ?>
            <body>
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
$this->Ingrediants('nurr');
$site->end();
}
}
?>