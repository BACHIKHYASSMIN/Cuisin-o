<?php
require_once "C:\wamp64\www\Projet\user\profil.php";
class ProfilCo{
    public function COntrole(){
        $model=new modele;
        $r=$model->Get_admin();
  return $r;
    }
    public function Afficher_site(){
        $site=new ProfilView;
        $site->Afficher_contet();
    }
}
?>