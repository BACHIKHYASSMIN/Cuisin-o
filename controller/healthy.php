<?php
require_once "C:\wamp64\www\Projet\user\healthy.php";
class healthy{
    public function sset_cadre(){
        $c=new modele();
        $s=$c->Get_cadre_healthy();
        $i=0;
        foreach($s as $l){
               $o[$i]=$l['id_recette'];
               $m[$i]=$c->Recette($o[$i]);
               $i++;
        }
      
        return $m;
    }
    public function Afficher_site(){
        
       $site=new healthy_view;
       $site->site_vue();
}
}
?>