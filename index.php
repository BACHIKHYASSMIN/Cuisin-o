<?php
//session_start($utilisateur);
 require_once "controller\AcceuilController.php";
session_start();
require_once "controller\homeadmin.php";
//$tr=$_GET['subject'];
//$ty=$_GET['prep'];
//$tu=$_POST['request']val

                if(isset($_GET['search_submit'])){
                    require_once "controller\pageide.php";
                    $t=new ide_con;
                    $t->search($_GET['search_input']);
                }

                elseif(isset($_GET['object'])){
                    if($_GET['object']=="ETE"){
                        $_SESSION['object']=$_GET['object'];
                        require_once "controller\saison.php";
                        $t=new saisonpage;
                        $t->Afficher_site( $_SESSION['object']);
                    }
                    elseif($_GET['object']=="Printemp"){
                        $_SESSION['object']=$_GET['object'];
                        require_once "controller\saison.php";
                        $t=new saisonpage;
                        $t->Afficher_site( $_SESSION['object']);
                    }
                    elseif($_GET['object']=="Hiver"){
                        $_SESSION['object']=$_GET['object'];
                        require_once "controller\saison.php";
                        $t=new saisonpage;
                        $t->Afficher_site( $_SESSION['object']);
                    }
                    elseif($_GET['object']=="Automn"){
                        $_SESSION['object']=$_GET['object'];
                        require_once "controller\saison.php";
                        $t=new saisonpage;
                        $t->Afficher_site( $_SESSION['object']);
                    }
                    
                  else{
                $_SESSION['object']=$_GET['object'];
                require_once "controller\AcceuilController.php";
                $site=new AcceuilController;
                $site->Afficher_site( $_SESSION['object']);
                }
                }
                elseif(isset($_GET['sub'])){
                    require_once "controller\profiluser.php";
                    $t=new ProfilUserc;
                    $t->Addreceioe();
                }
                elseif(isset($_GET['subm'])){
                    require_once "controller\contact.php";
                    $t=new cont;
                    $t->SendMessage();
                }
                elseif(isset($_GET['id'])){
                    require_once "controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['id']);
                }
                elseif(isset($_GET['iduser'])){
                    require_once "controller\loform.php";
                    $t=new loForm;
                    $t->Afficher();
                }
                elseif(isset($_GET['val'])){
                    require_once "controller\Filterresults.php";
                    $t=new Resllts;
                    $t->get_Values($_GET['Nom_recette'],$_GET['prepare_time'],$_GET['cuisss_time'],(int)($_GET['calories']),$_GET['diff']);
                    $t->Afficher_site();
                }
                elseif(isset($_GET['susu'])){
                    $_SESSION['usermail']=$_GET['email'];
                    $_SESSION['usermdp']=$_GET['mdp'];
                    require_once "controller\usercon.php";
                    $t=new UserInt;
        
                    $t->Afficher("");
                }
                elseif(isset($_GET['Nom'])){
                    require_once "controller\signup.php";
                    require_once "controller\login.php";
                    $site=new signuppage;
                    $img = base64_decode($_GET['image']);
                   $site->AddUser($_GET['Nom'],$_GET['Prenom'],$_GET['email'],$_GET['mdp'],$_GET['sexe'],file_put_contents('image.jpg', $img));
                   $site=new loginpage;
                   $site->Afficher_site();

                }
                elseif(isset($_GET['idr'])){
                    require_once "controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['idr']);
                }
                
                elseif(isset($_GET['idrr'])){
                    require_once "controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['idrr']);
                }
                elseif(isset($_GET['idrn'])){
                    require_once "controller\controllernewspage.php";
                    $t=new controllernewspage;
                    $t->Afficher_site($_GET['idrn']);
                }
        
                elseif(isset($_GET['subject'])){
                if($_GET['subject']=='idee'){
                    require_once "controller\pageide.php";
                    $tr=new ide_con;
                    $tr->Afficher_site("");
                }
                elseif($_GET['subject']=='saison'){
                    require_once  "controller\saison.php";
                    $site=new saisonpage;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='login'){
                    require_once "controller\login.php";
                    $site=new loginpage;
                    $site->Afficher_site();
                }
                elseif($_GET['subject']=='fete'){
                    require_once "controller\pagefete.php";
                    $site=new fete_con;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='nurr'){
                    require_once "controller\purr.php";
                    $site=new nurr_con;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='news'){
                    require_once "controller\controllernews.php";
                    $site=new controllernews;
                    $site->Afficher_site();
                }
                elseif($_GET['subject']=='healthy'){
                    require_once "controller\healthy.php";
                    $site=new healthy;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='acceuil'){
                    $c=new AcceuilController;
                    $c->Afficher_site('','');
                }
                elseif($_GET['subject']=='profil'){
                    require_once "controller\profiluser.php";
                    $site=new ProfilUserc;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='contact'){
                    require_once "controller\contact.php";
                    $site=new cont;
                    $site->Afficher_site("");
                  
               
                }
        }
        else{
            $c=new AcceuilController;
             $c->Afficher_site('','');
            
          }
        

   




      





?>