<?php
require_once  "user\gestionrecette.php";
class gestion{
    public $id;
    public function affiche_site_cue(){
        $site=new GestionRecette();
        $site->Affiche_content();
    }
    
        public function Ajouter($nom,$type,$tp,$tc,$tr,$cal,$dif){
  $model=new modele;
            $model->Ajouter_recette($nom,$type,$tp,$_GET['tc'],$tr,$cal,$dif);
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
    public function delete($id){
        $model=new modele();
        $model->Remove_cadrerecette($id);
        $model->Remove_recette($id);
        $this->affiche_site_cue();
    }

    public function modifie_recette($name,$type,$tp,$tc,$tr,$cal,$dif){
        $model=new modele();
        $model->Modifier_recette((int)($_SESSION['id']),$name,$type,$tp,$tc,$tr,$cal,$dif);
        $this->affiche_site_cue();
    }

}
?>
