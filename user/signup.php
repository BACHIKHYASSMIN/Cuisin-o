<?php
require_once  "user\home.php";
class signup{


    private function body(){
?>
<body >
  <div class="login-box">
  <h2>S'inscrire</h2>
  <form method="GET" action="index.php">
    <div class="user-box">
      <input type="text" name="Nom" required="">
      <label>Nom</label>
    </div>
    <div class="user-box">
      <input type="text" name="Prenom" required="">
      <label>Prénom</label>
    </div>
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="mdp" required="">
      <label>Mot De Passe</label>
    </div>
    <div class="user-box">
      <input type="file" name="image" required="">
    </div>
    <div class="select-box">
      <select id="sexe" name="sexe">
        <option value="" selected >Sexe</option>
      <option value="Féminin">Féminin</option>
      <option value="Masculin">Masculin</option>
    </select>
    </div>
    <input type="submit" name="submit" value="Valider" />
    

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
        <title> Sign Up </title>
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