<?php 
require_once  "controller\homeadmin.php";
require_once  "controller\AcceuilController.php";
require_once  "controller\corecette.php";
require_once  "controller\gestionrecette.php";
require_once  "controller\purr.php";

 class Usermodele  {
  
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


public function Cadre($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT id_recette from cadre_recette where id_cadre='$ID'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
}
public function Cadre_News($ID){
  echo $ID;
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT id_news,id_recette from cadre_news where id_cadre_news='$ID'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
}
public function News($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT titre_news,image_news,description from  news where id_news='$ID'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }
 public function Recete($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT * from recette where id_recette=$ID";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }

 public function Recette($ID){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT DISTINCT * from cadre_recette where id_recette=$ID LIMIT 10";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }
 public function RecetteID($name){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT id_recette from recette where nom_recette='$name'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }
 public function NewsID($name){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT id_news from news where titre_news='$name'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }
 public function IngID($name){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT Id_ingrediant from ingrediant where Nom_ingrediant='$name'";
  $rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
 }
   public function Get_cadre($name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT * FROM  recette INNER JOIN cadre_recette  ON recette.id_recette = cadre_recette.id_recette where cadre_recette.type_cadre='$name'";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }

   public function Get_cadre_news(){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT * from cadre_news ";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }


   public function Get_cadre_healthy(){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT DISTINCT id_recette FROM ingrediant WHERE IsHealthy=1";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }
   public function Get_latest_recette($month){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT * FROM recette WHERE MONTH(date_added) = '$month'";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }
   

   public function Get_Nurrition(){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT * from ingrediant ";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }

public function FilterRecette($name,$nom,$tps,$tcs,$cal,$dif){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT * FROM recette where (type_recette='$name')and((nom_recette='$nom')or(prepare_time='$tps')or(cuisss_time='$tcs')or(calories='$cal')or(diff='$dif')) ";
  $p=$rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
}
   public function search_recette($name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
   $tr=str_replace(",","' or Nom_ingrediant='",$name,$ct);
    $query="SELECT DISTINCT id_recette from ingrediant where Nom_ingrediant='$tr' ";
    $rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
  
   }

   public function Get_Ingrediant($saison){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT DISTINCT id_recette from ingrediants where saison='$saison'";
    $p=$rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }
   public function Ingredianr($id){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT  id_recette,Nom_ingrediant from ingrediant where Id_ingrediant='$id'";
    $p=$rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }
   
   public function IngrediantRecette($id){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT id_ingrediant,quantity from ingrediants where id_recette=$id";
    $p=$rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }
   public function EtapeRecette($id){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT id_etape,descr from etape where id_recette=$id";
    $p=$rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
   }

public function GetFeteName(){
  $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
  $query="SELECT DISTINCT occasion from cadre_fete ";
  $p=$rows=$this->GetRequete($connect,$query);
  $this->deconexion($connect);
  return $rows;
}
  public function GetFete($name){
    $connect=$this->connection($this->host,$this->username,$this->password,$this->database);
    $query="SELECT *  from cadre_fete where occasion='$name'";
    $p=$rows=$this->GetRequete($connect,$query);
    $this->deconexion($connect);
    return $rows;
}
 }