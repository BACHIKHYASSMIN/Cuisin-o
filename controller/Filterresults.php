<?php
require_once  "user\FilterResults.php";
require_once  "user\home.php";
class Resllts{

    private $Name_recette;
    private $Temps_preparation;
    private $Temps_cuisson;
    private $calories;
    private $diff;
    private $name;
    public function get_Name($name){
$this->name=$name;
    }
    public function get_Values($nom,$tps,$tcs,$cal,$dif){
        $this->Name_recette=$nom;
        $this->Temps_cuisson=$tcs;
        $this->Temps_preparation=$tps;
        $this->calories=$cal;
        $this->diff=$dif;
        }
    public function Get_Filter(){
        $cadre=new modele;
        
        if($_SESSION['object']=="ETE"){ 
            $set=$cadre->FilterRecetteH($_SESSION['object'],$_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);
         }
         elseif($_SESSION['object']=="printemp"){ 
                $set=$cadre->FilterRecetteH($_SESSION['object'],$_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);
             }
             elseif($_SESSION['object']=="Automn"){ 
                $set=$cadre->FilterRecetteH($_SESSION['object'],$_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);
             }
             elseif($_SESSION['object']=="hiver"){ 
                $set=$cadre->FilterRecetteH($_SESSION['object'],$_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);
             }
         
        else{ $set=$cadre->FilterRecette($_SESSION['object'],$_GET['Nom_recette'],$this->Temps_cuisson,$this->Temps_preparation,($this->calories),$_GET['diff']);}
    
        $i=0;

foreach($set as $p){
    $o[$i]=$p['id_recette'];
   
    $k[$i]=$cadre->Recette($o[$i]);
    $i++;
}
        return $k;
    
    }

        public function Afficher_site(){
            $site=new Results();
            $site->site_vue();
            
    }


}
?>