<?php
//session_start($utilisateur);
 require_once "C:\wamp64\www\Projet\controller\AcceuilController.php";
//session_start();
require_once "C:\wamp64\www\Projet\controller\homeadmin.php";
//$tr=$_GET['subject'];
//$ty=$_GET['prep'];
//$tu=$_POST['request']
                if(isset($_GET['search_submit'])){
                    require_once "C:\wamp64\www\Projet\controller\pageide.php";
                    $t=new ide_con;
                    $t->search($_GET['search_input']);
                }
                elseif(isset($_GET['object'])){
                $_SESSION['object']=$_GET['object'];
                require_once "C:\wamp64\www\Projet\controller\AcceuilController.php";
                $site=new AcceuilController;
                $site->Afficher_site($_SESSION['object']);
                }
                
                elseif(isset($_GET['id'])){
                    require_once "C:\wamp64\www\Projet\controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['id']);
                }
               
                elseif(isset($_GET['susu'])){
                    require_once "C:\wamp64\www\Projet\controller\usercon.php";
                    $t=new UserInt;
                    $t->Afficher("");
                }
                elseif(isset($_GET['Nom'])){
                    require_once "C:\wamp64\www\Projet\controller\signup.php";
                    require_once "C:\wamp64\www\Projet\controller\login.php";
                    $site=new signuppage;
                    $img = base64_decode($_GET['image']);
                   $site->AddUser($_GET['Nom'],$_GET['Prenom'],$_GET['email'],$_GET['mdp'],$_GET['sexe'],file_put_contents('image.jpg', $img));
                   $site=new loginpage;
                   $site->Afficher_site();

                }
                elseif(isset($_GET['idr'])){
                    require_once "C:\wamp64\www\Projet\controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['idr']);
                }
                elseif(isset($_GET['idrr'])){
                    require_once "C:\wamp64\www\Projet\controller\corecette.php";
                    $t=new corecette;
                    $t->Afficher($_GET['idrr']);
                }
                elseif(isset($_GET['idrn'])){
                    require_once "C:\wamp64\www\Projet\controller\controllernewspage.php";
                    $t=new controllernewspage;
                    $t->Afficher_site($_GET['idrn']);
                }
        
                elseif(isset($_GET['subject'])){
                if($_GET['subject']=='idee'){
                    require_once "C:\wamp64\www\Projet\controller\pageide.php";
                    $tr=new ide_con;
                    $tr->Afficher_site("");
                }
                elseif($_GET['subject']=='saison'){
                    require_once "C:\wamp64\www\Projet\controller\saison.php";
                    $site=new saisonpage;
                    $site->Afficher_site();
                }
                elseif($_GET['subject']=='login'){
                    require_once "C:\wamp64\www\Projet\controller\login.php";
                    $site=new loginpage;
                    $site->Afficher_site();
                }
                elseif($_GET['subject']=='fete'){
                    require_once "C:\wamp64\www\Projet\controller\pagefete.php";
                    $site=new fete_con;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='nurr'){
                    require_once "C:\wamp64\www\Projet\controller\purr.php";
                    $site=new nurr_con;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='news'){
                    require_once "C:\wamp64\www\Projet\controller\controllernews.php";
                    $site=new controllernews;
                    $site->Afficher_site();
                }
                elseif($_GET['subject']=='healthy'){
                    require_once "C:\wamp64\www\Projet\controller\healthy.php";
                    $site=new healthy;
                    $site->Afficher_site("");
                }
                elseif($_GET['subject']=='acceuil'){
                    $c=new AcceuilController;
                    $c->Afficher_site('','');
                }
                elseif($_GET['subject']=='profil'){
                    require_once "C:\wamp64\www\Projet\controller\profiluser.php";
                    $site=new ProfilUserc;
                    $site->Afficher_site("");
                }
        }
        else{
            $c=new AcceuilController;
             $c->Afficher_site('','');
            
          }
          

   




      





?>