<?php
class contact{
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
       
            <div class="contenu" style="height:200px;">
    
                <div class="centre categorie">
                    <p class="categorie">Contact</p>
                    
                </div>
                <?php
               
                ?>
                <div class="separateur"></div>
    
                <div class="centre">
                    <p class="description">Vous Pouvez Nous envoyer un mail Ici</p>
                </div>
              
                <div class="info">
                    <center>
                <form class="box-mail" type="GET" >
                    <input type="text" name="text"  placeholder="entrez vous mail"/>
                    <textarea name="textarea" style="margin-top:2%;"cols="70" rows="5">Entrer vous Contenu de mail</textarea><br>
                    <input type="submit" name="subm" value="Envoyer"/>
                </form>
                    </center>
            <div>
              
                
        
       
    
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