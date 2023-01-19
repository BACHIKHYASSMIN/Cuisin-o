<?php
require_once  'C:\wamp64\www\Projet\modele\modeAcceuil';
require_once "C:\wamp64\www\Projet\user\gestionrecette.php";
require_once "C:\wamp64\www\Projet\controller\saison.php";


class vue{

          public  function Header()
          {
              ?>
              <head>
              
              
              
              <link rel="stylesheet" href="style.css">
              <title> CouZinty </title>
              </head>
              <?php
                }
                
                public function Nav_header() 
                {
                  ?>
                
                  <div class="nav-header">
                <a href="index.html" class="nav-logo">
                    <img src="logo.png" alt="simply recipes">
                </a>
            
            
                   
                    </div>
                  <?php
    
                }
                public  function menuUser(){
                  ?>
                <div class="nav_bar" >
                   <a class="nav-link" href="index.php?subject=acceuil">Acceuil</a>
                   <a  class="nav-link" href="index.php?subject=news" >News</a>
                   <a class="nav-link" href="index.php?subject=idee"> Idées De Recette</a>
                   <a class="nav-link" href="index.php?subject=healthy">Healthy</a>
                    <a class="nav-link" href="index.php?subject=saison">Saisons</a>
                    <a class="nav-link" href="index.php?subject=fete">Fêtes</a>
                    <a class="nav-link" href="index.php?subject=nurr">Nutrition</a>
                    <a class="nav-link" href="">Contact</a>
                 <a href="index.php?subject=profil" class="nav-link">Profil</a>
                 
                 </div>
                
                  <?php
                }
                
                public  function menu(){
                    ?>
                  <div class="nav_bar" >
                     <a class="nav-link" href="index.php?subject=acceuil">Acceuil</a>
                     <a  class="nav-link" href="index.php?subject=news" >News</a>
                     <a class="nav-link" href="index.php?subject=idee"> Idées De Recette</a>
                     <a class="nav-link" href="index.php?subject=healthy">Healthy</a>
                      <a class="nav-link" href="index.php?subject=saison">Saisons</a>
                      <a class="nav-link" href="index.php?subject=fete">Fêtes</a>
                      <a class="nav-link" href="index.php?subject=nurr">Nutrition</a>
                      <a class="nav-link" href="">Contact</a>
                   <a href="index.php?subject=login" class="nav-link">Connexion</a>
                   
                   </div>
                  
                    <?php
                  }

    public function CadreSimple($o,$m,$i,$f,$l){
$r=$o;
      foreach($r as $row){
        ?>
         <div class="recette">
         <h3> <?php echo $row[$m] ?> </h3>
         <?php echo '<img src="data:image;base64,'.base64_encode($row[$i] ).'" >';?>
         <p><?php echo $row[$f]?></p> 
         <a href="index.php?id=<?php echo $row[$l];?>">Afficher la suite</a>
          </div>
        <?php
                         }
                         

                        }
                        public function CadreNews($o,$m,$i,$f,$l){
                          $r=$o;
                                foreach($r as $row){
                                  ?>
                                   <div class="recette">
                                   <h3> <?php echo $row[$m] ?> </h3>
                                   <?php echo '<img src="data:image;base64,'.base64_encode($row[$i] ).'" >';?>
                                   <p><?php echo $row[$f]?></p> 
                                   <a href="index.php?idrn=<?php echo $row[$l]?>">Afficher la suite</a>
                                    </div>
                                  <?php
                                                   }
                                                  }
                        public function CadreHome($o,$m,$i,$f,$l){
                          $r=$o;
                                foreach($r as $row){
                                  ?>
                                   <div class="recette">
                                   <h3> <?php echo $row[$m] ?> </h3>
                                   <?php echo '<img src="data:image;base64,'.base64_encode($row[$i] ).'" >';?>
                                   <p><?php echo $row[$f]?></p> 
                                   <a href="index.php?subject=recette$id=<?php echo $row[$l];?>">Afficher la suite</a>
                                    </div>
                                  <?php
                                                   }
                          
                                                  }

              public function CadreIng($o){
                          $r=$o;
                          foreach($r as $row){
                            ?>
                        <div class="recette">
                        <h3> <?php echo $row['Nom_ingrediant'] ?> </h3>
                         <?php echo '<img src="data:image;base64,'.base64_encode($row['image_ing'] ).'" >';?>
                        <ul>
                          <li>glucides: <?php echo $row['glucides']?></li>
                          <li>lipides:<?php echo $row['lipides']?></li>
                          <li>minéraux:<?php echo $row['minéraux']?></li>
                          <li>vitamines<?php echo $row['vitamines']?></li>
                          <li>healthy_prop<?php echo $row['healthy_prop']?>%</li>
                        </ul>
                        <a></a>
                        </div>
                        <?php
                        }
                          
                                                  }

   

                        
   




    public function end(){
      ?>
      </body>
       </html>
      <?php
  }
  public function begin(){
      ?>
      <!DOCTYPE html>
      <html>
      <?php
  }
    public function head(){
      ?>
       <head>
          <title>Recette Page</title>
          <meta charset="utf-8">
          <link rel="stylesheet" href="style.css"/>
          
  </head>
      <?php
    
  }
  
    

    public  function Footer()
    {
      ?>
      
      <footer>
       <div class="footer">
      <a  href="index.php?subject=acceuil">Acceuil</a>
                     <a   href="index.php?subject=news" >News</a>
                     <a  href="index.php?subject=idee"> Idées De Recette</a>
                     <a  href="index.php?subject=healthy">Healthy</a>
                      <a  href="index.php?subject=saison">Saisons</a>
                      <a  href="index.php?subject=fete">Fêtes</a>
                      <a  href="index.php?subject=nurr">Nutrition</a>
                      <a  href="">Contact</a>
       </div>
       <div class="contact">
                  <a  href="www.facebook.com"><img src="facebook.png"/></a> 
                  <a ><img src="instagram.png"/></a>
                  <a ><img src="youtube.png"/></a>
                 <a ><img src="twitter.png"/></a>
             
       </div>
       </footer>
        <?php

     
    }
}
?>
