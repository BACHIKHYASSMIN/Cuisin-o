<?php
require "C:\wamp64\www\Projet\user\Acceuil.php";
require_once 'C:\wamp64\www\Projet\modele\modeAcceuil';

class ReceteeGestion{
    protected $try;
public function set_cadre($nom){
  
    $cadre=new modele;
    $set=$cadre->Get_cadre($nom);
    $this->try=$set;
    return $set;

}

public function set_diaporama(){
    $c=new modele();
        $s=$c->Get_cadre_news();
        return $s;
}

    public function Afficher_site($name){
        $site=new RecetteView();
        $site->site($name);
}
}
?>