<?php

require  "user\Acceuil.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class AcceuilController{
    protected $try;
    public $clnNAme;
   
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
        $site=new UserView();
        $site->site_vue($name);
        
}
}
?>