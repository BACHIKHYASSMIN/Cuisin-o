<?php
require_once  "user\logForm.php";
require_once  "controller\gestionrecette.php";
class loForm{
    public function Afficher(){
    $site=new LogForm;
    $site->Afficher_site();
    }

  
}
?>