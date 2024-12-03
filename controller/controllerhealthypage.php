<?php
require  "user\healthypage.php";
class chealthypage{
    public function Afficher_site(){
        $site=new healthy();
        $site->site_vue();
}
}
?>