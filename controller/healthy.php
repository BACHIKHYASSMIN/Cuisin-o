<?php
require_once  "user\healthy.php";
class healthy{


    private $Name_recette;
    private $Temps_preparation;
    private $Temps_cuisson;
    private $calories;
    private $diff;
    private $name;

    public function get_Values($nom,$tps,$tcs,$cal,$dif){
        $this->Name_recette=$nom;
        $this->Temps_cuisson=$tcs;
        $this->Temps_preparation=$tps;
        $this->calories=$cal;
        $this->diff=$dif;
        }
        
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

    public function Get_Filter(){
        $cadre=new modele;
       $set=$cadre->Get_cadre_healthy();
        foreach($set as $row){
            $k=$row['id_recette'];
        }
        $ret=$cadre->FilterRecetteH($_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);
$i=0;

foreach($ret as $p){
    $o[$i]=$p['id_recette'];
   
    $k[$i]=$cadre->Recette($o[$i]);
    $i++;
}
        return $k;
    
    }
    public function Afficher_site(){
        
       $site=new healthy_view;
       $site->site_vue();
}
}
?>