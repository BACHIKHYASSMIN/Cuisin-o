<?php

use Addform as GlobalAddform;

require_once "C:\wamp64\www\Projet\user\Ajouternews.php";
require_once "C:\wamp64\www\Projet\controller\gestionrecette.php";
class Add{

    public function Afficher(){
    $site=new Addform;
    $site->Afficher_site();
    }

  
}
?>