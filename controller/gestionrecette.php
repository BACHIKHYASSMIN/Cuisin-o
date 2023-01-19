<?php
require_once "C:\wamp64\www\Projet\user\gestionrecette.php";
class gestion{
    public $id;
    public function affiche_site_cue(){
        $site=new GestionRecette();
        $site->Affiche_content();
    }
    
        public function Ajouter($nom,$type,$tp,$tc,$tr,$cal){
  $model=new modele;
            $model->Ajouter_recette($nom,$type,$tp,$tc,$tr,$cal);
            $this->affiche_site_cue();
            
        }
    
        public function get_ID($id){
             $this->id=$id;
        }

    public function delete_recette($id){
        $model=new modele();
        $model->Remove_news($id);
        $model->Remove_recette($id);
        $this->affiche_site_cue();
    }
    

    public function modifie_recette($name,$type,$tp,$tc,$tr,$cal){
        $model=new modele();
        $model->Modifier_recette($this->id,$name,$type,$tp,$tc,$tr,$cal);
        $this->affiche_site_cue();
    }

}
?>
