<?php
class AdminHome{
public  function menu(){
    ?>
  <div class="nav_bar" >
     <a class="nav-link" href="indexadmin.php?subject=acceuil">Acceuil</a>
     <a  class="nav-link" href="indexadmin.php?subject=grec" >Gestion Recette</a>
     <a class="nav-link" href="indexadmin.php?subject=gnews"> Gestion News</a>
     <a class="nav-link" href="indexadmin.php?subject=guser">Gestion Utilisateur</a>
      <a class="nav-link" href="indexadmin.php?subject=gnur">Gestion Nutrition</a>
      <a class="nav-link" href="indexadmin.php?subject=parm">Paramétre</a>
      <a class="nav-link" href="indexadmin.php?subject=profil">Profil</a>

   
   </div>
  
    <?php
  }
}
?>