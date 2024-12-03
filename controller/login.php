<?php
require  "user\login.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class loginpage{
    public function Controle_user($email,$mdp){
$mode=new modele();
$e=$mode->user($email,$mdp);
if(isset($e)){
  return $e['id_user'];
}
    }
   /* 
    public function Add_user(){
        $modl=new modele;
        $r=$modl->add_admin($nom,$email,$mdp);
        return $r;

    }
    */
    public function Afficher_site(){
        $site=new login();
        $site->site_vue();
}
}
?>