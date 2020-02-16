<?php
// READ FILES FROM THE GALLERY FOLDER
$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png,svg}", GLOB_BRACE); //add / remove any file format you want to count on. 

// DRAW HTML ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Salman Hossain Saif | App Icons Portfolios</title>
    <!-- cdnjs -->
    <!----script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/lazyload/lazyload.js"></script----->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
            
  </head>
  <body>
  <style>
    
  /* [SITE] */
  body, html {

padding: 30px;
margin: 0;
background: url('bg.png') fixed;

}

/* [GALLERY] */
#gallery {
  max-width: 1200px;
  margin: 0 auto;
}

#gallery img {
    box-sizing: border-box;
    width: 150px;
    height: 150px;
    margin: 10px;
    object-fit: cover;
    border-radius: 30px;
    box-shadow: 3px 10px 14px 
    rgba(0, 0, 0, 0.25);
    background: white;
}

/* [RESPONSIVE GALLERY] */
/* @media screen and (max-width: 850px) {
  #gallery img {
    width: 33%;
  }
}

@media screen and (max-width: 640px) {
  #gallery img {
    width: 50%;
  }
} */


  </style>
    <!-- [THE GALLERY] -->
    <div id="gallery"><?php
    foreach ($images as $i) {
      printf("<img class='lazyload' src='load.gif' data-src='gallery/%s'/>", basename($i));
    }
    ?></div>



<script>
  lazyload();

           </script>  
  </body>
</html>
