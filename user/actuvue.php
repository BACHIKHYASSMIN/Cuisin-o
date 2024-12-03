<?php
require_once  "user\home.php";

class news{
  private  function Header()
        {
              ?>
              
              <link rel="stylesheet" href="stylenews.css">
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
         <div class="catégorie">
          <h1><?php echo $Name ?></h1> 
          <div class="slide">
            <div class="cover">
            <?php
                $cadre=new controllernews;
                $r=$cadre->sset_cadre();
                $k=new vue;
                $k->CadreNews($r,'nom_news','image_news','description_news','id_cadre_news');
                            
            
            /*
            for ($x = 0; $x <10; $x++) {
            
            }
            */
            
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
$this->categorie('news');
$site->end();

}

}
?>
