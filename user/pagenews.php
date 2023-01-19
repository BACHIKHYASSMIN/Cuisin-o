<?php
class pagenews{


    private function head(){
        ?>
         <head>
            <title>News Page</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="style.css"/>
            
    </head>
        <?php
    }
    private function body($id){
        $ty=$id;
        foreach($ty as $td){
        ?>
<body class="body2">
            
<div class="csslider">
        <input type="radio" name="slides" id="slides_1" checked />
        <input type="radio" name="slides" id="slides_2" />
        <ul>
        <li>
            <div class="contenu" >

                <div class="centre categorie">
                    <p class="categorie">News</p>
                </div>

                <h1><?php echo $td['titre_news']?></h1>

                <div class="separateur"></div>

                <div class="centre">
                    <p class="description"><?php echo $td['description']?></p>
                </div>
                <div class="info">
                    
                <?php echo '<img style="width:500px;"src="data:image;base64,'.base64_encode($td['image_news'] ).'" >';?>
                    
                </div>

            </div> 
        </li>
        <li>
                    <div class="vid">
                <div class="centre categorie">
                    <p class="categorie">Video</p>
                </div>
                <<h1><?php echo $td['titre_news']?></h1>
<div class="separateur"></div>
<div class="centre">
                    <p class="description"></p>
                </div>
                <div class="info">
                <video src="https://www.youtube.com/watch?v=Rz-nlJyR7Nk" style="display: block;" preload="audio"  controls autoplay></video>
                </div>
                </div>
            
                
                </li>
        </ul>
        <div class="arrows">
            <label for="slides_1"></label>
            <label for="slides_2" ></label>
                </div>
                <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                
            </div>
</div>
</div>
        </body>
        <?php
        }
    }
    private function end(){
        ?>
         </html>
        <?php
    }
    private function begin(){
        ?>
        <!DOCTYPE html>
        <html>
        <?php
    }
    public function site_vue($id){
       $this->begin();
       $this->head();
       $this->body($id);
       $this->end();
      }

}
?>
