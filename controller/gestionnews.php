<?php
require_once "C:\wamp64\www\Projet\user\gestionnews.php";
class conews{
public $idnews;
public $idrecette;
    public function add_recette($nom,$o,$p,$f,$g,$k){
        $model=new modele;
        $model->Ajouter_recette($nom);
        $id=$model->RecetteID($nom);
        foreach($id as $k){
            $o=$k['id_recette'];
        }
        $model->AjouterCadreRecette($o,$nom);
        $this->Afficher_site();
            }

            public function add_news($nom,$o,$p,$f,$g,$k){
                $model=new modele;
                $model->Ajouter_news($nom);
                $id=$model->NewsID($nom);
                foreach($id as $k){
                    $o=$k['id_news'];
                    echo $o;
                }
                $model->AjouterCadrRecette($o,$nom);
                $this->Afficher_site();
                    }

            public function get_idnews($id){
$this->idnews=$id;
            }
            public function get_idrecette($id){
                $this->idrecette=$id;
                            }
            public function Controle(){
                $mode=new modele();
                $u=$mode->Get_cadre_news();
                return $u;
                   }
        
            public function delete_news($id){
                $model=new modele;
                $model->Remove_news($id);
                $this->Afficher_site();
            }
    
    
        
            public function modifie_news($name){
                $model=new modele;
                $model->Modifier_news($this->idnews,$name);
                $model->Modifier_Cadrenews($this->idnews,$name);
                $this->Afficher_site();
            }
            public function modifie_recette($name){
                $model=new modele;
                $model->Modifier_recette($this->idrecette,$name);
                $model->Modifier_CadrenewsRecette($this->idrecette,$name);
                $this->Afficher_site();
            }
        
    public function Afficher_site(){
        $site= new vuenews;
        $site->Affiche_content();
    }
}
?>