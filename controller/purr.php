<?php
require_once "C:\wamp64\www\Projet\user\purr.php";
require_once 'C:\wamp64\www\Projet\modele\modeAcceuil';
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