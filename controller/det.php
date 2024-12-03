<?php
require  "user\det.php";
class fetepage{
    public function Afficher_site(){
        $site=new fete();
        $site->site_vue();
}
}
?>