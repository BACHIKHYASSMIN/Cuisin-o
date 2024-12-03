<?php
require_once  "user\pagefete.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class fete_con{

    public function Get_Fete($non){
        $modele=new modele;
        $tr=$modele->GetFete($non);
        return $tr;
    }
    public function Get_FetName(){
        $modele=new modele;
        $s=$modele->GetFeteName();
    return $s;
    }
    public function Afficher_site(){
        $site=new fete_vue;
        $site->site();
    }
}
?>