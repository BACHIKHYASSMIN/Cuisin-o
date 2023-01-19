<?php
require_once "C:\wamp64\www\Projet\controller\homeadmin.php";
require_once "C:\wamp64\www\Projet\user\AdminHome.php";
class GestionRecette {


    private function Formulaire_Ajouter(){
?>
 
<?php
    }
    private function Formulaire_Supprimer(){
?>
<form action="indexadmin.php" method="GET" class="main-form">
<input type="number" name="id"  value="ID"  class="gt-input">
  <input type="submit" class="gt-button" name="delete2" value="Supprimer">
</form> 
<?php
    }
    private function Formulaire_Modifier(){
?>
<form  action="indexadmin.php" method="GET" class="main-form">
       <input type="text" name="name" id="name" value="Nom_recette" class="gt-input" ><br>
 <input type="submit"  class="gt-button" name="edit1" value="Modifier">
</form>
<?php
    }
    public function Affiche_content(){
        ?>
        <html>
         <head>
            <title>Gestion Recette Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="style2.css"/>
            <link rel="stylesheet" href="database.css"/>
            <style>
                td.highlight {
        font-weight: bold;
        color: blue;
    }
            </style>
            <script src="jquery.js"></script>
            <script src="database.js"></script>
            <script>
                $(document).ready(function () {
    $('#example').DataTable({
        createdRow: function (row, data, index) {
            if (data[5].replace(/[\$,]/g, '') * 1 > 150000) {
                $('td', row).eq(5).addClass('highlight');
            }
        },
    });
});
            </script>
    </head>
    <body class="body3">
        <?php
        $site=new AdminHome;
        $site->menu();
        ?>
        
        <div class="forms">
                
                <a href="indexadmin.php?object=1">Ajouter</a>
                
                           </div>
        
      
        
       
        <table class="recette_tab" id="example">
            <thead>
                <th>id recette</th>
                <th>Nom recette</th>
                <th>difficulté</th>
                <th>temps de préparation</th>
                <th>temps de cuisson</th>
                <th>Calories</th>
                <th>Notation</th>
               
                <th>Modification</th>
                <th>Suppression</th>
                
            </thead>
            <tbody>
        
    <?php
    $o=new homeadmin;
    $p=$o->Controle();
    foreach($p as $i){
        ?>
        <tr>
        <td><?php echo $i['id_recette'] ?></td>
        <td><?php  echo $i['nom_recette']?></td>
        <td><?php echo $i['diff'] ?></td>
        <td><?php echo $i['prepare_time'] ?></td>
        <td><?php echo $i['cuisss_time'] ?></td>
        <td><?php echo $i['calories'] ?></td>
        <td><?php echo $i['notation'] ?></td>
        
        <td><a href="indexadmin.php?idmod=<?php echo $i['id_recette'] ?>&nom=<?php echo $i['nom_recette'] ?>&tpp=<?php echo $i['prepare_time'] ?>&tc=<?php echo $i['cuisss_time'] ?>&tr=<?php echo $i[''] ?>&cal=<?php echo $i['calories'] ?>">Modifier</a></td>
        <td><a href="indexadmin.php?id=<?php echo $i['id_recette'] ?>">Supprimer</a></td>
        
        
        </tr>
        <?php
    }
    ?>
            </tbody>
        </table>
    </body>
        </html>
        <?php




        
        

    

    
}
}

?>