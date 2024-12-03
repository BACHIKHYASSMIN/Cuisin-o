<?php
require_once  "user\usercon.php";
class UserInt{
    public function Afficher($name){
        $site=new user_connection;
        $site->site_vue($name);
    }
}
?>