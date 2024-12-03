<?php
require_once  "user\purr.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class nurr_con{

    public function Get_nurr(){
        $modele=new modele;
        $s=$modele->Get_Nurrition();

        return $s;
    }
    public function Afficher_site(){
        $site=new nurr_vue;
        $site->site();
    }
}
?>