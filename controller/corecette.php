<?php
require  "user\pagerecette.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';


class corecette{

    public function Afficher($ID){
        $model=new modele;
$Result1=$model->Recete($ID);
$IngRecette=$model->IngrediantRecette($ID);
$EtpRecette=$model->EtapeRecette($ID);
$i=0;
$j=0;
foreach($IngRecette as $ing){
    $IngIds[$i]=$ing['id_ingrediant'];
    
    
    $Quantity[$i]=$ing['quantity'];
    $i++;
}

foreach($EtpRecette as $etape){
    $EtapIds[$j]=$etape['id_etape'];
    $Desc[$j]=$etape['descr'];
    $j++;
}
$i=0;
$j=0;
while($i<count($IngIds)){
$Ings=$model->Ingredianr($IngIds[$i]);
foreach($Ings as $ing2){
    $Ingrediants[$i]=$ing2['Nom_ingrediant'];
}
$i++;
}




        $site=new pagerecetteview;
       
    
       
        $site->site_vue($Result1,$Ingrediants,$Quantity,$Desc);
}
        
        
}



?>