<?php
require_once "C:\wamp64\www\Projet\controller\guser.php";
 class uservue{
    
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
                <?php
                
        
                
                
                ?>
                </div>
                <table class="recette_tab" id="example">
                    <thead>
                        <th>Image utilisateur</th>
                        <th>id Utilisateur</th>
                        <th>Nom Utilisateur</th>
                        <th>Prénom Utilisateur</th>
                        <th>Email</th>
                        <th>Accepter</th>
                        <th>Refuser</th>
                        
                    </thead>
                    <tbody>
                
            <?php
            $o=new userco;
            $p=$o->Controle2();
            foreach($p as $i){
                ?>
                <tr>
                <?php echo '<td><img src="data:image;base64,'.base64_encode($i['image_user'] ).'" ></td>';?>
                <td><?php echo $i['id_user'] ?></td>
                <td><?php  echo $i['Nom_user']?></td>
                <td><?php echo $i['Prenom_user'] ?></td>
                <td><?php echo $i['Email_User'] ?></td>
                <td><a href="indexadmin.php?ua=<?php echo $i['id_user'] ?>">Accepter</a></td>
                <td><a href="indexadmin.php?ur=<?php echo $i['id_user'] ?>">Refuser</a></td>
               
               
                
                </tr>
                <?php
            }
            ?>
                    </tbody>
                </table>




                <table class="recette_tab" id="example1">
                    <thead>
                        <th>Image Utilisateur</th>
                        <th>id Utilisateur</th>
                        <th>Nom Utilisateur</th>
                        <th>Prénom Utilisateur</th>
                        <th>Email</th>
                        <th>Mot de passe</th>
                        <th>Sexe Utilisateur</th>
                        <th>Supprision</th>
                        
                    </thead>
                    <tbody>
                
            <?php
            $o=new userco;
            $p=$o->Controle();
            foreach($p as $i){
                ?>
                <tr>
       <?php echo '<td><img src="data:image;base64,'.base64_encode($i['Image_user'] ).'" ></td>';?>
                <td><?php echo $i['id_user'] ?></td>
                <td><?php  echo $i['Nom_user']?></td>
                <td><?php echo $i['Prenom_user'] ?></td>
                <td><?php echo $i['Email'] ?></td>
                <td><?php echo $i['Mdp'] ?></td>
                <td><?php echo $i['sexe'] ?></td>
                <td><a href="indexadmin.php?ud=<?php echo $i['id_user'] ?>">Supprimer</a></td>
               
               
                
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
    