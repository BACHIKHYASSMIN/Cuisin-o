<?php
    require_once "C:\wamp64\www\Projet\controller\controllernewspage.php";
require_once "C:\wamp64\www\Projet\controller\corecette.php";
  class pagerecetteview {
    
private function head(){
        ?>
         <head>
            <title>Recette Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="style.css"/>
            
    </head>
        <?php
    }
    private function body($id,$m,$q,$e){
    
        
         
      $ty=$id;
      $td=$m;
      $tq=$q;
      $te=$e;
       
            
    
?> 
        
<body class="body2">
            
<div class="csslider">
        <input type="radio" name="slides" id="slides_1" checked />
        <input type="radio" name="slides" id="slides_2" />
        
        <ul>
   <li>
            <div class="contenu" style="height:1200px;">

                <div class="centre categorie">
                    <p class="categorie">Recette</p>
                    
                </div>
                <?php
                
                foreach($ty as $r)
        { 
            ?>
            <h1> <?php echo $r['nom_recette'] ?> </h1>
            <?php
               
            
        ?>

                <div class="separateur"></div>

                <div class="centre">
                    <p class="description">"Cette recette facile au chocolat est un grand classique. Elle fera plaisir aux plus gourmands."</p>
                </div>
                <div class="info">
                
                    <?php  echo '<img src="data:image;base64,'.base64_encode($r['image_recette'] ).'" style="width:600px" >';      ?>
                    
                    <table class="info">
                        <tr>
                            <th>Difficulte</th>
                            <th>Preparation</th>
                            <th>Cuisson</th>
                            <th>Temps total</th>
                            <th>Calories</th>
                        </tr>
                        <tr>
                            
                       
                            <td><?php echo $r['diff'] ?></td>
                            <td><?php echo $r['prepare_time'] ?></td>
                            <td><?php echo $r['cuisss_time'] ?></td>
                            <td><?php echo $r['total'] ?></td>
                            <td> <?php echo $r['calories'] ?> </td>
            
            <?php
        }
        
   
        ?>
                              
                        </tr>
                    </table>
                </div>

                <div>
                    <div class="colonne1 colonne">
                        <h2>Ingredients</h2>
                            <div class="ingredients">
                               
                                <?php
                                for($i=0;$i<count($td);$i++){ 
                                    ?>
                                    <p><?php echo $td[$i] ?>  Quantité:<?php echo $tq[$i] ?> </p>
                                    <?php
                                }
                                
                                ?>
                                
                            </div>
                    </div>
                    <div class="colonne2 colonne">
                            <h2>Preparation</h2>
                        <table class="preparation">
                        <?php
                                for($i=0;$i<count($te);$i++){ 
                                    ?>
                                     <tr>
                                <td><p class="numero"><?php echo $i ?></p></td>
                                <td class="preparation_etape"><?php  echo $te[$i]?></td>
                            </tr>
                                    <?php
                                }
                                
                                ?>
                            
                        </table>
                    </div>
                </div>
            </div> 
   </li>
   <li>
   <div class="vid">
                <div class="centre categorie">
                    <p class="categorie">Video</p>
                </div>
                <h1><?php echo $r['nom_recette'] ?></h1>
<div class="separateur"></div>
<div class="centre">
                    <p class="description">"Cette recette facile au chocolat est un grand classique. Elle fera plaisir aux plus gourmands."</p>
                </div>
                <div class="info">
                <?php  echo '<video src="data:image;base64,'.base64_encode($r['video'] ).'" style="width:600px; height:600px" preload="audio"  controls autoplay ></video>' ;      ?>
                
                </div>
                </div>
   </li>
                
            </ul>
            <div class="arrows">
            <label for="slides_1"></label>
            <label for="slides_2"></label>
            
        </div>
        <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                
            </div>
</div>
                            </div>

        
       

        </body>
        <?php
    
}
    private function end(){
        ?>
         </html>
        <?php
    }
    private function begin(){
        ?>
        <!DOCTYPE html>
        <html>
        <?php
    }
    public function site_vue($id,$m,$q,$e){
       $this->begin();
       $this->head();
       $this->body($id,$m,$q,$e);
       $this->end();
      }

}
?>