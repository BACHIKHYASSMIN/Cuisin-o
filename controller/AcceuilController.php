<?php

require "C:\wamp64\www\Projet\user\Acceuil.php";
require_once 'C:\wamp64\www\Projet\modele\modeAcceuil';
class AcceuilController{
    protected $try;
    public $clnNAme;
    private $Name;
    
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
public function Get_Filter(){
    ?>
    <h1><?php echo $_SESSION['request']; echo $_SESSION['object'] ?></h1>
    <?php
    
    $cadre=new modele;
    $set=$cadre->FilterRecette($_SESSION['object'],$_SESSION['request']);
    foreach($set as $d){
        $set=$d['nom_recette'];
    }
    return $set;
   

}
    public function Afficher_site($name){
        $site=new UserView();
        $site->site_vue($name);
        
}
}
?>