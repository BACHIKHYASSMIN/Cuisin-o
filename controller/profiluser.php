<?php
require_once  "user\profileuser.php";
class ProfilUserc{
    public function ControleUser(){
        $model=new modele;
        $r=$model->Get_admin();
  return $r;
    }
 
    public function Addreceioe(){
        $model=new modele;
        $model->Ajouter_recettewait($_POST['nom']);
        $this->Afficher_site();
    }

    public function get_userData(){
        $model=new modele;
       $r=$model->user($_SESSION['usermail'],$_SESSION['usermdp']);
    
        return $r;
    }
    public function Afficher_site(){
        $site=new Profil_user;
        $site->site_vue();
    }
}
?>