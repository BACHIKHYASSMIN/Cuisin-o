<?php
require_once "C:\wamp64\www\Projet\user\usercon.php";
class UserInt{
    public function Afficher($name){
        $site=new user_connection;
        $site->site_vue($name);
    }
}
?>