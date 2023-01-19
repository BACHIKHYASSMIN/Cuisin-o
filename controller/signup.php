<?php
require "C:\wamp64\www\Projet\user\signup.php";
class signuppage{


    public function AddUser($nom,$prenom,$email,$mdp,$sexe,$img){
             $modl=new modele;
            $r=$modl->add_user($nom,$prenom,$email,$mdp,$sexe,$img);
    }
    public function Afficher_site(){
        $site=new signup();
        $site->site_vue();
}
}
?>