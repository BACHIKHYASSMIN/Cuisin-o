<?php

function generateHTMLHeader($title, $cssfile){
    // on ecrit HTML
    echo <<<CHAINE_DE_FIN
    <!DOCTYPE html>
    <html>
    <head>
      <title>$title</title>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <link rel="stylesheet" type="text/css" href="$cssfile" />
      <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="js/code.js"></script>
      <script type="text/javascript" src="js/jquery.autocomplete.js"></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
      <link rel="stylesheet" href="/resources/demos/style.css" />
    </head>
    <body>
    CHAINE_DE_FIN;}  
    
global $Pages;
$Pages = array(
  array(
    "name"=>"acceuil",
    "title"=>"Acceuil",),
  array(
    "name"=>"nurr",
    "title"=>"Nuttrition",),
  array(
    "name"=>"news",
    "title"=>"News",
),
  array(
    "name"=>"idee",
    "title"=>"Idee de Recette",
    ),
  array(
    "name"=>"saison",
    "title"=>"Saison",
    ),
    array(
    "name"=>"fete",
    "title"=>"Fete",
   ),   
);


/*
function checkPage($askedPage){
    global $Pages;
      foreach($Pages as $page){
    if($page('name')==$askedPage){
        return true;
    }  
  return false;
}
}
*/
function getPageTitle ($askedPage){
    global $Pages;
    foreach ($Pages as $page){
        if ($page('name')==$askedPage){
            return $page('title');
        }
    }
}
?>