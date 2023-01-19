<?php
require "C:\wamp64\www\Projet\user\pagenews.php";
class controllernewspage{
    public function Afficher_site($ID){
        $l=new modele;
        $cadre=$l->Cadre_News($ID);
        foreach($cadre as $X){
             $r=$X['id_recette']; 
            $n=$X['id_news'];
        }
        if($r==null){
            $ty=$l->News($n);
            $site=new pagenews();
            $site->site_vue($ty);
        }
        elseif($n==null){
            $ty=$l->Recete($r);
            require_once "C:\wamp64\www\Projet\user\pagerecette.php";
            $site=new pagerecetteview;
            $site->site_vue($ty,"","","","");
        }

          
        
}
}
?>