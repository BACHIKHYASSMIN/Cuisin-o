<?php
class Profil_user{
  private function head(){
    ?>
     <head>
        <title>Recette Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css"/>
        
</head>
    <?php
}
private function body(){

    
     
  
        

?> 
    
<body class="body2">
        
<div class="csslider">
   
        <div class="contenu" style="height:1200px;">

            <div class="centre categorie">
                <p class="categorie">Profil</p>
                
            </div>
            <?php
            $site=new ProfilUserc;
            
            $row=$site->get_userData();
            foreach($row  as $r){
              $k=$r['id_user'];
            ?>
            <div class="separateur"></div>

            <div class="centre">
                <p class="description">Bienvenu <?php echo $r['Nom_user']; echo $r['Prenom_user']?>Dans votre Profil</p>
            </div>
          
            <div class="info">
            <?php  echo '<img src="data:image;base64,'.base64_encode($r['Image_user'] ).'" style="width:600px" >';      ?>
            <table class="info">
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            
                        </tr>
                        <tr>
                            
                       
                            <td><?php echo $r['Nom_user'] ?></td>
                            <td><?php echo $r['Prenom_user'] ?></td>
                            <td><?php echo $r['Email'] ?></td>
                            
            
            <?php
        }
        
        ?>
                              
                        </tr>
                    </table>
            </div>
            
        <div>
        <table class="table">
  <thead class="table-dark">
 <th>Nom Recette</th>
 <th>Notation</th>
  </thead>
  <tbody>
<tr>
    <td></td>
</tr>
  </tbody>
</table>
            
    
   

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
public function site_vue(){
   $this->begin();
   $this->head();
   $this->body();
   $this->end();
  }

}
?>