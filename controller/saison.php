<?php
require_once  "user\saison.php";
require_once  "user\home.php";
class saisonpage{
    public function Get_result($saison){
    $modl=new modele;
    $ty=$modl->Get_Ingrediant($saison);
    $i=0;
    foreach($ty as $r){
$o[$i]=$r['id_recette'];
$m[$i]=$modl->Recette($o[$i]);
$i++;
 
    }
    
return $m;
   
}
    public function Afficher_site($name){
        $site=new saison();
        $site->site_vue($name);
}
}
?>