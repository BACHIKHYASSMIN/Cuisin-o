<?php
require "C:\wamp64\www\Projet\user\healthypage.php";
class chealthypage{
    public function Afficher_site(){
        $site=new healthy();
        $site->site_vue();
}
}
?>