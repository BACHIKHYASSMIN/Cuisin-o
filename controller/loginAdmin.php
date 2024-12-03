<?php
require_once  "user\loginAdmin.php";
class logAdmin{
    public function Afficher_site(){
        $site=new login();
        $site->site_vue();
}
}
?>