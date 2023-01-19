<?php
class gnutr{
    private function Formulaire_Ajouter(){
        ?>
         <form id="add" action="indexadmin.php" method="GET" class="main-form">
               <input type="text" name="nom_recette" id="nom_recette" value="nom_recette"  width="100%" class="gt-input"><br>
         <input type="submit"  class="gt-button" name="ajout" value="Ajouter">
        </form>
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
                    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
                    <style>
                        td.highlight {
                font-weight: bold;
                color: blue;
            }
                    </style>
                    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                    <script>
                        $(document).ready(function () {
            $('#example').DataTable({
                createdRow: function (row, data, index) {
                    if (data[5].replace(/[\$,]/g, '') * 1 > 150000) {
                        $('td', row).eq(5).addClass('highlight');
                    }
                },
            });
            $('#example1').DataTable({
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
               <a href="indexadmin.php?object=4">Ajouter</a>
                </div>
                <table class="recette_tab" id="example">
                    <thead>
                        <th>Id Ingrediant</th>
                        <th>Nom_ingrediant</th>
                        <th>Glucides</th>
                        <th>Lipides</th>
                        <th>Minéraux</th>
                        <th>Vitamines</th>
                        <th>Proportion Healthy</th>
                        <th>Image Ingrediant</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </thead>
                    <tbody>
                
            <?php
            $site=new nutco;
            $l=$site->Controle();
            foreach($l as $r){

            
           ?>
                <tr>
                <td><?php echo $r['Id_ingrediant']?></td>
                <td><?php echo $r['Nom_ingrediant']?></td>
                <td><?php echo $r['glucides']?></td>
                <td><?php echo $r['lipides']?></td>
                <td><?php echo $r['minéraux']?></td>
                <td><?php echo $r['vitamines']?></td>
                <td><?php echo $r['healthy_prop']?></td>
                <?php echo '<td><img src="data:image;base64,'.base64_encode($r['image_ing'] ).'" ></td>';?>
                <td><a href="indexadmin.php?nm=<?php echo $r['Id_ingrediant']?>">Modidifier</a></td>
                <td><a href="indexadmin.php?ns=<?php echo $r['Id_ingrediant']?>">Supprimer</a></td>
               
                
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