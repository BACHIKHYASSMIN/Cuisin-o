<?php
require  "user\logadm.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
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