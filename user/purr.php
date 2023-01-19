<?php
require_once "C:\wamp64\www\Projet\user\home.php";

class nurr_vue{
    public function Ingrediants($Name){
        ?>
<div class="cat">
    <h1>Nuttrition</h1>
          <div class="cove">
            
          <?php
           $cadre=new nurr_con;
           $r=$cadre->Get_nurr();
          $k=new vue;
            $k->CadreIng($r);
            ?>
          </div>
</div>
          <?php
    }
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