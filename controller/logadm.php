<?php
require "C:\wamp64\www\Projet\user\logadm.php";
require_once 'C:\wamp64\www\Projet\modele\modeAcceuil';
class loginadmpage{
    public function Controle_admin($nom,$mdp){
$mode=new modele();
$e=$mode->admin($nom,$mdp);
if(isset($e)){
  $r=new homeadmin;
  $r->site();
}
    }
    
    public function Add_admin(){

    }
    
    public function Afficher_site(){
        $site=new logadm();
        $site->site_vue();
}
}
?>