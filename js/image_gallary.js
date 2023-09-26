

$(document).ready(function () {
  showMedia();
  showVideo();
  
});
//////////// Docuemnt  Close Here ////////////////////////////

function showMedia() {
  const token = $('meta[name="token"]').attr("content");
  var md_id = $('#mdid').val();
  $.ajax({
    url: __URL_include_image_gallary_,//"../include/image_gallary.php",
    type: "POST",
    headers: {token : token},
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
      md_id: md_id,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("media  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      // $("#kkk").html("");
      
      var strsignlecard = "";
      if (data.length > 0) {
        
        for (var i = 0; i < data.length; i++) {
          console.log("media  :successssss " + data[i].md_media_url);
          if (i==0) {
            if(data[i].md_media_type == 'Image'){
              strsignlecard= strsignlecard+"<input type='radio' checked='checked' name='select' id='img-tab-"+(i+1)+"'> "+
              "<label for='img-tab-"+(i+1)+"' "+
                  "style='background-image: url("+__URL_IMAGE_ + data[i].md_media_url +");'></label> "+
              "<img src='"+ __URL_IMAGE_ + data[i].md_media_url +"' "+
                  "border='0'>";
            }
            
           
          } else {
            if(data[i].md_media_type == 'Image'){
              strsignlecard= strsignlecard+"<input type='radio' name='select' id='img-tab-"+(i+1)+"'> "+
              "<label for='img-tab-"+(i+1)+"' "+
                  "style='background-image: url("+ __URL_IMAGE_+ data[i].md_media_url +");'></label> "+
              "<img src='"+ __URL_IMAGE_+ data[i].md_media_url +"' "+
                  "border='0'>";
            }
            
            
          }
        }
        $("#gallery").html(strsignlecard);
      }
    },
    error: function (data) {
      console.log("media  :error " + data.responseText);
    },
    complete: function () {
      console.log("media  :complete ");
      // localStorage.setItem("propertyid", NaN);
    },
  });
}

function showVideo() {
  const token = $('meta[name="token"]').attr("content");
  var md_id = $('#mdid').val();
  // alert("video");
  // alert(md_id);
  $.ajax({
    url: __URL_include_image_gallary_,//"../include/image_gallary.php",//,
    type: "POST",
    headers: {token : token},
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
      md_id: md_id,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("media  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      // $("#kkk").html("");
      
      var strsignlecard = "<input type='radio' value='1' name='video-list' id='video-1' checked='checked' /><label for='video-1'>Video 1</label> "+
                          "<input type='radio' value='2' name='video-list' id='video-2' /><label for='video-2'>Video 2</label>";
      if (data.length > 0) {
        
        for (var i = 0; i < data.length; i++) {
          console.log("media video :successssss " + data[i].md_media_url);
          // if (i==0) {
            if(data[i].md_media_type == 'Video'){
              strsignlecard = strsignlecard + "<div class='video video-1'> "+
                      "<iframe width='560' height='315' src='"+__URL_VIDEO_+ data[i].md_media_url +"' frameborder='0' allowfullscreen></iframe> "+
                    "</div>";
            }           
           
          // } else if (i==1) {           
            if(data[i].md_media_type == 'Video'){
              strsignlecard = strsignlecard + "<div class='video video-2'> "+
                      "<iframe width='560' height='315' src='"+__URL_VIDEO_+ data[i].md_media_url +"' frameborder='0' allowfullscreen></iframe> "+
                    "</div>";
            }
            
          // }x
        }
        // alert(strsignlecard);
        $(".video-gallery").html(strsignlecard);
      }
    },
    error: function (data) {
      console.log("media  :error " + data.responseText);
    },
    complete: function () {
      console.log("media  :complete ");
      // localStorage.setItem("propertyid", NaN);
    },
  });
}
