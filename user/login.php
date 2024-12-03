<?php
require_once  "user\home.php";
class login{


    private function body(){
?>
<body >
  <div class="login-box">
  <h2>Connexion</h2>
  <form action="index.php">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="mdp" required="">
      <label>Mot De Passe</label>
    </div>
    <div class="user-box">
      <p>Si vous n'avez pas un compte , alors je vous conseille de <a href="signup.php">Créer un compte</a>
    </div>
		<input type="submit" name="susu"  value="valider" /> 
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