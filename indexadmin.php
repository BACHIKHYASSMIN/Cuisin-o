<?php

use PSpell\Config;

session_start();

require_once  "controller\logadm.php";



if(isset($_GET['submit1'])=="ss"){
    require_once  "controller\gestionnews.php";
    $c=new conews;
    $c->add_news($_GET['nom_news'],$_GET['desc']);  
}


elseif(isset($_GET['submit'])){
    require_once  "controller\gestionrecette.php";
    $c=new gestion;
    $c->Ajouter($_GET['nom'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal'],$_GET['diff']);
   
}
elseif(isset($_GET['add'])){
    require_once  "controller\gnut.php";
    $c=new nutco;
    $c->add_Ing($_GET['nom_ing'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal']);
   
}
elseif(isset($_GET['submit2'])){
    require_once  "controller\gestionnews.php";
    $c=new conews;
    $c->add_recette($_GET['nom'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal']);
   
}

elseif(isset($_GET['mod_news'])){
    require_once  "controller\gestionnews.php";
    $c=new conews;
    $c->get_idnews($_SESSION['idnews']);
    $c->modifie_news($_GET['nom_news'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal']);
   
}
elseif(isset($_GET['mod_recette'])){
    require_once  "controller\gestionnews.php";
    $c=new conews;
    $c->get_idrecette($_SESSION['idrecette']);
    $c->modifie_recette($_GET['nom'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal'],$_GET['diff']);
   
}

elseif(isset($_GET['modifier'])){
    require_once  "controller\gestionrecette.php";
    $c=new gestion;
    $c->get_ID($_SESSION['id']);
    $c->modifie_recette($_GET['nom'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal'],$_GET['diff']);
   
}
elseif(isset($_GET['mn'])){
    require_once  "controller\gnut.php";
    $c=new nutco;
    $c->get_id($_SESSION['nut']);
    $c->modifie_nut($_GET['nom_ing'],$_GET['type'],$_GET['tpp'],$_GET['tc'],$_GET['tr'],$_GET['cal']);
   
}
elseif(isset($_GET['idrm'])){
    $_SESSION['idrecette']=$_GET['idrm'];
    require_once  "controller\loform.php";
    $c=new loForm;
    $c->Afficher();
}
elseif(isset($_GET['idnm'])){
    $_SESSION['idnews']=$_GET['idnm'];
    require_once  "controller\Ajouternews.php";
    $c=new Add;
    $c->Afficher();
}
elseif(isset($_GET['idmod'])){
    $_SESSION['id']=$_GET['idmod'];
    require_once  "controller\loform.php";
    $c=new loForm;
    $c->Afficher();
}
elseif(isset($_GET['nm'])){
    $_SESSION['nut']=$_GET['nm'];
    require_once  "controller\FormIng.php";
    $c=new ConIng;
    $c->Afficher();
}
elseif((isset($_GET['nom']))and(isset($_GET['nom'])) ){
    $ty=new loginadmpage;
    $ty->Controle_admin($_GET['nom'],$_GET['mdp']);
    
}
elseif(isset($_GET['id'])){
    require_once  "controller\gestionrecette.php";
    $ty=new gestion;
    $ty->delete($_GET['id']);
}
elseif(isset($_GET['idns'])){
    require_once  "controller\gestionnews.php";
    $ty=new conews;
    $ty->delete_news($_GET['idns']);
}

elseif(isset($_GET['object'])){
    if($_GET['object']=='1'){
        require_once  "controller\loform.php";
        $c=new loForm;
        $c->Afficher();
        }
        elseif($_GET['object']=='2'){
            require_once  "controller\Ajouternews.php";
            $c=new Add;
            $c->Afficher();
            }
            elseif($_GET['object']=='3'){
                require_once  "controller\loform.php";
                $c=new loForm;
                $c->Afficher();
                }
                elseif($_GET['object']=='4'){
                    require_once  "controller\FormIng.php";
                    $c=new ConIng;
                    $c->Afficher();
                    }

}

elseif(isset($_GET['ur'])){
    require_once  "controller\guser.php";
    $c=new userco;
    $c->Refuse_user($_GET['ur']);
    }
    elseif(isset($_GET['ua'])){
        require_once  "controller\guser.php";
        $c=new userco;
        $c->accept_user($_GET['ua']);
        }    
    
    elseif(isset($_GET['ud'])){
                require_once  "controller\guser.php";
                $c=new userco;
                $c->delete_user($_GET['ud']);
                }

                elseif(isset($_GET['ns'])){
                    require_once  "controller\gnut.php";
                    $c=new nutco;
                    $c->delete_nut($_GET['ns']);
                    }
    elseif((isset($_GET['name'])) ){
        require_once  "controller\gestionrecette.php";
        echo "false";
        $ty=new gestion;
        $ty->delete_recette($_GET['name']);
        
    
    }
    elseif(isset($_GET['subject'])){
        if($_GET['subject']=='gnews'){
            require_once  "controller\gestionnews.php";
    $ctr=new conews;
    $ctr->Afficher_site();
        }
        elseif($_GET['subject']=='gnur'){
            require_once  "controller\gnut.php";
    $ctr=new nutco;
    $ctr->Afficher_site();
        }


        elseif($_GET['subject']=='guser'){
            require_once  "controller\guser.php";
    $ctr=new userco;
    $ctr->Afficher_site();
        }
        elseif($_GET['subject']=='grec'){
            require_once  "controller\gestionrecette.php";
            $ty=new gestion;
            $ty->affiche_site_cue();
            
        } 
        elseif($_GET['subject']=='acceuil'){
            require_once  "controller\homeadmin.php";
            $c=new homeadmin();
            $c->site();
            
        } 
    }
    
    else{
        $c=new loginadmpage();
         $c->Afficher_site();
    }


?>