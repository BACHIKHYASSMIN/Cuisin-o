<?php
require_once  "user\home.php";
class LoginAdmin{
    
    private function body(){
        ?>
        <body translate="no" data-new-gr-c-s-check-loaded="14.1019.0" data-gr-ext-installed="">
          <div class="login-box">
          <h2>Login</h2>
          <form>
            <div class="user-box">
              <input type="text" name="" required="">
              <label>Username</label>
            </div>
            <div class="user-box">
              <input type="password" name="" required="">
              <label>Password</label>
            </div>
            <div class="user-box">
              <a href="signup.php">Créer un compte</a>
            </div>
                <a href="">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Submit
            </a>
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