<?php
require_once  "user\home.php";
class fete{
    private function body(){
?>
<body>
<?php
    }
public function site_vue(){
    $site=new vue();
    $site->begin();
    $site->header();
$this->body();
$site->Nav_header();
$site->menu();
$site->categorie("");
$site->end();

}

}
?>
