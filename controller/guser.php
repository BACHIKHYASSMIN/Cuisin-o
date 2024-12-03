<?php
require_once  "user\guser.php";
class userco{
    public function add_recette($nom){
        $model=new modele;
        $model->Ajouter_recette($nom);
        $this->Afficher_site();
            }

            public function accept_user($id){
                $model=new modele;
                $ty=$model->Get_userAccept();
                foreach($ty as $t){
    $model->Accept_user($t['Nom_user'],$t['Prenom_user'],$t['Email_User'],$t['Mdp'],$t['sexe'],$t['image_user']);
    $model->RefuseUser($t['id_user']);
                }               
              
                $this->Afficher_site();
                    }

            public function Controle(){
                $mode=new modele();
                $u=$mode->Get_user();
                return $u;
                   }
        
                   public function Controle2(){
                    $mode=new modele();
                    $u=$mode->Get_userAccept();
                    return $u;
                       }
            public function delete_user($id){
                $model=new modele;
                $model->RemoveUser($id);
                $this->Afficher_site();
            }
            public function Refuse_user($id){
                $model=new modele;
                $model->RefuseUser($id);
                $this->Afficher_site();
            }
        
            public function modifie_recette($name){
                $model=new modele;
                $ID=$model->RecetteID($name);
                foreach($ID as $p){
                    $o=$p['id_recette'];
                }
                $model->Modifier_recette($o,$name);
                $this->Afficher_site();
            }
        
    public function Afficher_site(){
        $site= new uservue;
        $site->Affiche_content();
    }
}
?>