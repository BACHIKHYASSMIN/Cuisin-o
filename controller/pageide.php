<?php
require_once  "user\pageide.php";
require_once 'C:\xampp\htdocs\BACHIKH_YASSMIN_SIL1\TDW\Projet\modele\modeAcceuil';
class ide_con{
public function search($tr){
    $cpt=1;
    for($i=0;$i<strlen($tr);$i++){
        if($tr[$i]==','){
            $cpt++;
        }
    }
    $cherche=(int)(($cpt*70)/100);
    
    $t=0;
    $cpt=0;
    $mot="";
    while($cpt<$cherche){
        if($tr[$t]==','){
            $mot=$mot.$tr[$t];
            $cpt++;
            

        }
else{
       $mot=$mot.$tr[$t];
}
$t++;
        }
    
     
$modl=new modele;
$p=$modl->search_recette($mot);
$i=0;
foreach($p as $t){
    $o[$i]=$t['id_recette'];
    echo  $o[$i];
    $k[$i]=$modl->Recette($o[$i]);
    $i++;
}
$this->Afficher_site($k);


}
    public function Get_nurr(){
        $modele=new modele;
        $s=$modele->Get_Nurrition();
        return $s;
    }

    public function Afficher_site($ide){
        $site=new ide_vue;
        $site->site($ide);
    }
}
?>