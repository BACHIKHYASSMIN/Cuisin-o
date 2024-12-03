<?php
require_once  "user\contact.php";
class cont{

    public function SendMessage(){
        $model=new modele;
       $set=$model->Get_admin();
        foreach($set as $row){
            $k=$row['Email'];
        }
       // mail($k,"From User",$_GET['textarea']);
       // $this->Afficher_site();
    }
    public function Afficher_site(){
        $site=new contact;
        $site->site_vue();
    }
}
?>