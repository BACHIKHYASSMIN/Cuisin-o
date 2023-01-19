<?php
class vuenews{
   
        
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
                
     <a href="indexadmin.php?object=2">Ajouter</a>
     
                </div>
                <table class="recette_tab" id="example">
                    <thead>
                        <th>id news</th>
                        <th>Nom news</th>
                        <th>Image news</th>
                        <th>Description news</th>
                        <th>Video</th>
                     
                        <th>Modification</th>
                        <th>Suppression</th>
                    </thead>
                    <tbody>
                
            <?php
            
            $o=new conews;
            $i=$o->Controle();
            foreach($i as $p){
                if($p['id_recette']==""){
           ?>
                <tr>
                <td><?php echo $p['id_news'] ?></td>
                <td><?php echo $p['nom_news'] ?></td>
                 <?php echo '<td><img src="data:image;base64,'.base64_encode($p['image_news'] ).'" ></td>';?>
                 <td><?php echo $p['description_news'] ?></td>
                 <?php echo '<td><video src="data:image;base64,'.base64_encode($p['video_news'] ).'"></video></td>';?>
                <td><a href="indexadmin?idnm=<?php echo $p['id_news'] ?>">Modifier</a></td>
                <td><a href="indexadmin?idns=<?php echo $p['id_cadre_news'] ?>">Supprimer</a></td>
               
                
                </tr>
                <?php
                 }
                }
                ?>
                </tbody>
     </table>
     <div class="form" >
                
     <a style="background-color:#6C829D;color:black;"href="indexadmin.php?object=3">Ajouter</a>
     
                </div>
                <table class="recette_tab" id="example1">
                    <thead>
                        <th>id recette</th>
                        <th>Nom news</th>
                        <th>Image news</th>
                        <th>Description news</th>
                        <th>Video</th>
                        <th>Modification</th>
                        <th>Suppression</th>
                    </thead>
                    <tbody>
                        
                
            <?php
                $o=new conews;
                $i=$o->Controle();
                foreach($i as $p){
                if($p['id_recette']!=""){
            ?>
                 
             <tr>
                <td><?php echo $p['id_recette'] ?></td>
                <td><?php echo $p['nom_news'] ?></td>
                 <?php echo '<td style="text-align: center;"><img  style="width:50%;"src="data:image;base64,'.base64_encode($p['image_news'] ).'" ></td>';?>
                <td><?php echo $p['descr'] ?></td>
                <?php echo '<td><video src="data:image;base64,'.base64_encode($p['video_news'] ).'"></video></td>';?>
                
                <td><a href="indexadmin?idrm=<?php echo $p['id_recette'] ?>">Modifier</a></td>
                <td><a href="indexadmin?idns=<?php echo $p['id_cadre_news'] ?>">Supprimer</a></td>
               
                
            </tr>
                <?php
                }
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