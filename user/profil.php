<?php
class ProfilView{

    public Function Afficher_contet(){
        ?>
        <html>
<head>
  <title>Profil</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body class="body5">
<?php
        $site=new AdminHome;
        $site->menu();
        ?>
<!-- Navbar -->
<div class="nav">
    <?php
    $get=new ProfilCo;
    $p=$get->COntrole();
    foreach($p as $i){

    
    ?>
  <div class="container">
    <h1>Bienvenu <?php  echo $i['nom_admin'] ?> Sur Votre Profil</h1>
  </div>
</div>

<!-- Content -->
<div class="content">

  <!-- Profile Section -->
  <div class="profile-section">
    <div class="container">
    <?php echo '<img class="profile-photo"src="data:image;base64,'.base64_encode($i['image'] ).'" >';?>
      <p class="profile-name"><?php echo $i['nom_admin']?></p>
      <p class="profile-detail"></p>
      <button class="button profile-follow">Contact</button>
    </div>
  </div>

  <!-- Detail Section -->
  <div class="detail-section">
    <div class="container">

      <div class="card">
        <div class="container">
          <div class="card-title"></div>
          <div class="card-body">
           Votre Nom: <?php echo $i['nom_admin']?> 
          </div>
        </div>
      </div>

      <div class="card">
        <div class="container">
          <div class="card-title"></div>
          <div class="card-body">
          Votre Email:<?php echo $i['Email']?>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="container">
          <div class="card-title"></div>
          <div class="card-body">
           Votre Mot de Passe:<?php echo $i['mdp_admin']?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


</body>
</html>
        <?php
    }
}
}
?>