<?php
require_once "C:\wamp64\www\Projet\user\home.php";
class logadm{


    private function body(){
?>
<body >
  <div class="login-box">
  <h2>Connexion</h2>
  <form action="indexadmin.php">
    <div class="user-box">
      <input type="text" name="nom" required="">
      <label>Nom</label>
    </div>
    <div class="user-box">
      <input type="password" name="mdp" required="">
      <label>Mot De Passe</label>
    </div>
    
		<button > Valider  </button>
  </form>
</div>
  
  
  
  




<?php
    }
    private function head(){
        ?>
        <head>
        
        <script  src=".js"></script>
        <script src=".js"> </script>
        
        <link rel="stylesheet" href="login.css">
        <title> LogIn </title>
        </head>
        <?php
    }
    public function site_vue(){
        $site=new vue();
        $site->begin();
        $this->head();
$this->body();
        $site->end();
    }
}
?>