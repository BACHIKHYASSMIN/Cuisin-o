<?php
require_once  "user\home.php";

class ide_vue{
    public function Formulaire(){
        ?>
        <form  class="search-group" method="GET" action="index.php">
  <label class="form-label" for="form1">Rechercher des Recette conteneant:</label><br>
    <input name="search_input" type="text" class="form-control" />
    <input  type="submit" value="Rechercher" name="search_submit"/>
    </form>
</div>
<?php
    }


    private  function Header()
    {
        ?>
        <script>
            const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById('search-input');
searchButton.addEventListener('click', () => {
  const inputValue = searchInput.value;
  alert(inputValue);
});
        </script>
        <link rel="stylesheet" href="style2.css">
        <title> Idee De Recette page </title>
        </head>
        <?php
          }
          private function body(){
            ?>
            <body>
            <?php
                }

                public function categorie($id,$Name){
                    $r=$id;
                    ?>
       <p >Rechercher des Recette conteneant:</p>              
        <form  class="search-group" method="GET" action="index.php">
    <input name="search_input" type="text" class="form-control" />
    <input  type="submit" value="Rechercher" name="search_submit"/>
    </form>
        

                       <div class="ca">
                        <h1><?php echo $Name ?></h1> 
                        <div class="slide">
                          <div class="cove">
                          <?php
                              $k=new vue;
                              for($i=0;$i<count($r);$i++){
                              $k->CadreSimple($r[$i],'titre_cadre','image_cadre','descroption_cadre','id_recette');
                                          
                              }
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
                  
                  
public function site($ide){
    $site=new vue();
    $this->Header();
    $site->begin();
  //  $site->header();
  
$this->body();
$site->Nav_header();
$site->menu();
if($ide==""){
$this->Formulaire();
}
else
{
    $this->categorie($ide,"Resultat :");
}
$site->Footer();
$site->end();
}
}

?>