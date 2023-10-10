<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type='text/javascript' src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/js/jquery-11.0.min.js'></script>
<script type='text/javascript' src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/js/unitegallery.min.js'></script>
<link rel='stylesheet' href='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/css/unite-gallery.css' type='text/css' />
<script type='text/javascript' src='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/themes/default/ug-theme-default.js'></script>
<link rel='stylesheet' href='https://www.jqueryscript.net/demo/Fully-Functional-jQuery-Image-Video-Gallery-Plugin-Unite-Gallery/unitegallery/themes/default/ug-theme-default.css' type='text/css' />

<script src="../js/config.js"></script>
  <title><?php echo __WEBSITE__TITLE__ ;?></title>
</head>
<body>
  <style>
    body, select {
  font-family: "Source Sans Pro", Calibri, sans-serif;
  font-size: 16px;
  color: #414042;
}
.ug-gallery-wrapper.ug-theme-default {
  min-width: 310px !important;
}
  </style>
  <script>
    
    jQuery(document).ready(function(){
       var  path= localStorage.getItem(_SELECTED_IMAGE_FOR_VIEW_);
       $('#showmedia').prop("src","../upload/images/"+path);
       $('#showmedia').attr("data-image","../upload/images/"+path);
       $('#showmedia').attr("alt","Preview Image"+path);


  jQuery("#gallery").unitegallery();

});
  </script>

<div id="gallery" style="display:none; margin-left: 12rem; margin-top: 5rem;">

  <img id="showmedia" alt="Preview Image 1"
       src=""
       data-image=""
       data-description="Preview Image 1 Description">

 
</div>
</body>
</html>