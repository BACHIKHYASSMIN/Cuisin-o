<?php
require  "user\actuvue.php";

require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class controllernews{
   
    public function sset_cadre(){
        $c=new modele();
        $s=$c->Get_cadre_news();
        return $s;
    }
    public function Afficher_site(){
        
       $site=new news;
       $site->site_vue();
}
}
?>