<?php
require_once "C:\wamp64\www\Projet\controller\gestionrecette.php";
require_once "C:\wamp64\www\Projet\controller\homeadmin.php";
class homepage {

 
    
    public function Affiche_content(){
        ?>
        <html>
         <head>
            <title>Admin Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="style2.css"/>
            <script  src="sript.js"></script>
            
    </head>
    <body class="body3">
    
        <div class="icons">
            <div class="btn">
            <a href="indexadmin.php?subject=grec" ><img src="a.jpg"/></a>
            <h4>Gestion Recette</h4>
            </div>
            <div class="btn">
            <a href="indexadmin.php?subject=gnews" ><img src="b.png"/></a>
                <h4>Gestion News</h4>
            </div>
            <div class="btn">
            <a href="indexadmin.php?subject=guser" ><img src="c.png"/></a>
                <h4>Gestion Utilisateur</h4>
            </div>
            <div class="btn">
            <a href="indexadmin.php?subject=gnur" ><img src="d.jpg"/></a>
                <h4>Gestion de la nutrition</h4>
            </div>
            <div class="btn">
            <a href="indexadmin.php?subject=parm" ><img src="e.jpg"/></a>
                <h4>Paramétres</h4>
            </div>
            

        </div>
    </body>
        </html>
        <?php




        
        

    

    
}
}

?>