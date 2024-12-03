<?php
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
require_once  "user\homeadminpage.php";
class homeadmin{

   
    
   
    public function Controle(){
 $mode=new modele();
 $u=$mode->Get_recette();
 return $u;
    }
    
    public function site(){
        $one=new homepage();
        $one->Affiche_content();
    }

    
    public function set_cadre($ID){
        $cadre=new modele();
        $cadre->Get_cadre($ID);
    }
}

?>