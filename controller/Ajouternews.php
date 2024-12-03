<?php

use Addform as GlobalAddform;

require_once  "user\Ajouternews.php";
require_once  "controller\gestionrecette.php";
class Add{

    public function Afficher(){
    $site=new Addform;
    $site->Afficher_site();
    }

  
}
?>