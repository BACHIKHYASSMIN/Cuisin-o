<?php
require_once"C:\wamp64\www\Projet\user\saison.php";
require_once "C:\wamp64\www\Projet\user\home.php";
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
    public function Afficher_site(){
        $site=new saison();
        $site->site_vue();
}
}
?>