<?php
require_once "C:\wamp64\www\Projet\user\profileuser.php";
class ProfilUserc{
    public function ControleUser(){
        $model=new modele;
        $r=$model->Get_admin();
  return $r;
    }
    public function Afficher_site(){
        $site=new Profil_user;
        $site->Afficher_contet();
    }
}
?>