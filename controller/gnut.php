<?php
require_once "C:\wamp64\www\Projet\user\gnut.php";
class nutco{
public $id;
    public function add_Ing($nom){
        $model=new modele;
        $model->Ajouter_ingrediant($nom);
        $this->Afficher_site();
            }
public function get_id($id){
$this->id=$id;
}
            public function Controle(){
                $mode=new modele();
                $u=$mode->Get_Nurrition();
                return $u;
                   }
        
            public function delete_nut($id){
                $model=new modele;
                $model->RemoveNut($id);
                $this->Afficher_site();
            }
            
        
            public function modifie_nut($name){
                $model=new modele;
                $model->Modifier_ingrediant($this->id,$name);
                $this->Afficher_site();
            }
        
    public function Afficher_site(){
        $site= new gnutr;
        $site->Affiche_content();
    }
}
?>