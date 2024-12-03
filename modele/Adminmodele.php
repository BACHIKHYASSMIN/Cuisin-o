<?php 
require_once  "controller\homeadmin.php";
require_once  "controller\AcceuilController.php";
require_once  "controller\corecette.php";
require_once  "controller\gestionrecette.php";
require_once  "controller\purr.php";

 class Adminmodele{
  
  private  $host = "localhost";  
private $username = "root";  
private $password = "";  
private $database = "couzinty";  
private $message = ""; 

 private function connection($host,$username,$password,$database){
  $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password,
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
  return $connect;
 }

 private function deconexion($connect){
  $connect=null;
 }
 private function GetRequete ($connect,$requet){
    $stmt=$connect->prepare($requet);    
 $stmt->execute();
 return $stmt;
 }
 /* Partie Admin **/
 public function admin($nom,$mdp){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "SELECT * from admin where nom_admin=$nom AND mdp_admin=$mdp ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Get_admin(){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "SELECT  from admin "; 
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function user($email,$mdp){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "SELECT * from utilisateur where Email='$email' AND Mdp='$mdp' ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Get_user(){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "SELECT * from utilisateur ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function Get_userAccept(){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "SELECT * from acceptuser ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function RemoveUser($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "DELETE  FROM  utilisateur where id_user=$ID";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function RefuseUser($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "DELETE  FROM  acceptuser where id_user=$ID";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function RemoveNut($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "DELETE  FROM  ingrediant where Id_ingrediant=$ID";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function add_user($nom,$prenom,$email,$mdp,$sexe,$img){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO acceptuser (Nom_user,image_user) VALUES ('$nom',$img) ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function add_admin($nom,$email,$mdp){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO admin ( nom_admin,mdp_admin,Email) VALUES ('$nom','$mdp','$email) ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Accept_user($nom,$prenom,$email,$mdp,$sexe,$img){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO utilisateur ( Nom_user,Prenom_user,Email,Mdp,sexe,Image_user) VALUES ('$nom','$prenom','$email','$mdp','$sexe',$img) ";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Get_recette(){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "SELECT * from recette ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }

 public function Ajouter_recette($nom,$type,$tpp){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO recette (nom_recette,type_recette,prepare_time) VALUES ('$nom','$type','$tpp')";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Ajouter_recettewait($nom){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO recettewait (nom_recette,prepare_time,cuisss_time,total,calories,) VALUES ('$nom')";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }

 public function Ajouter_news($nom){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO news (titre_news) VALUES ('$nom')";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function AjouterCadrRecette($id,$nom){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO  cadre_news (id_news,nom_news) VALUES ($id,'$nom')";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function AjouterCadreRecette($id,$nom){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query = "INSERT INTO  cadre_news (id_recette,nom_news) VALUES ($id,'$nom')";
  $r=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $r;
 }
 public function Remove_recette($ID){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "DELETE  FROM  recette where id_recette=$ID";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
  
   public function Remove_news($ID){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "DELETE  FROM  cadre_news where id_cadre_news=$ID";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Removenews($ID){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "DELETE  FROM  cadre_news where  (id_recette=$ID)";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }

  
   public function Modifier_news($ID,$name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "UPDATE news SET titre_news='$name'  WHERE  id_news=$ID ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Modifier_Cadrenews($ID,$name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "UPDATE cadre_news SET nom_news='$name'  WHERE  id_news=$ID ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Modifier_CadrenewsRecette($ID,$name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "UPDATE cadre_news SET nom_news='$name'  WHERE  id_recette=$ID ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Modifier_recette($ID,$name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "UPDATE recette SET nom_recette='$name'  WHERE  id_recette=$ID ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Modifier_ingrediant($ID,$name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "UPDATE  ingrediant SET Nom_ingrediant='$name'  WHERE  Id_ingrediant=$ID ";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
   public function Ajouter_ingrediant($nom){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query = "INSERT INTO ingrediant (Nom_ingrediant) VALUES ('$nom')";
    $r=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $r;
   }
}