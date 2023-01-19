<?php
require_once "C:\wamp64\www\Projet\user\loginAdmin.php";
class logAdmin{
    public function Afficher_site(){
        $site=new login();
        $site->site_vue();
}
}
?>