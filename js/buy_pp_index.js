

$(document).ready(function () {
  showMedia();
  showMediaTypeWise();
  showMediaPopular();
  $("#logOutBtn").click(function (e) {
    // alert("logOut Click");
    indexlogout();
  });
});
//////////// Docuemnt  Close Here ////////////////////////////

function showMedia() {
  // alert("dfghj");
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: __URL_include_buy_pp_index_,
    type: "POST",
    headers: {token : token},
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("media  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      // $("#kkk").html("");
      var strsignlecard = "";
      if (data.length > 0) {
        // console.log(data);
        for (var i = 0; i < data.length; i++) {
          // console.log("fffghjk" + strsignlecard);
          strsignlecard =
            strsignlecard +
            "<div class='card'>" +
            "<img src='upload/images/" +
            data[i].md_media_url +
            "' alt='Animals' style='width:100%'>" +
            "<div class='container'>" +
            "<h4>" +
            "<b>"+data[i].pt_name+"</b>" +
            "</h4>" +
            "</div>" +
            "</div>";
        }
        $("#carouselItem").html(strsignlecard);
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

function indexlogout() {
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: "include/registration.php",
    type: "POST",
    dataType: "json",
    headers: {token : token},
    data: {
      key: "logout",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    success: function (data, status, xhr) {
      window.location.href = "../index.php";
    },
    error: function (data, status, xhr) {
      console.log("registration id data error  :error " + data);
    },
    complete: function () {
      console.log("registration id data complte  :complete ");
      // localStorage.setItem("registrationid",NaN);
    },
  });
}
function showSingleProduct(id) {
  window.location.href = __URL_singleproductpage_;
}

function showMediaTypeWise() {
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: __URL_include_buy_pp_index_,
    type: "POST",
    headers: {token : token},
    data: {
      key: "loadMediaPriceWise",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("property id data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      var strsignlecard = "";
      data = JSON.parse(data1["data"]);
      console.log("data.length" + data.length);
      if (data.length > 0) {
        console.log("data" + data);
        for (var i = 0; i <= data.length-1; i++) {
          if (i == 0) {
            strsignlecard =
            strsignlecard +
            "<div class='container'>"+
            "<div class='row'>"+
              "<div class='col-md-6'>"+
                "<div class='movie_card' id='bright'>"+
                  "<div class='info_section'>"+
                    "<div class='movie_header'>"+
                      "<img class='locandina'"+
                        "src='upload/images/"+data[i].md_media_url +"'/>"+
                      "<h1>&#8377;"+data[i].pp_price+"</h1>"+
                      "<h4>"+data[i].pt_name+"</h4>"+
                      "<span class='minutes'>"+data[i].pt_name+"</span>"+
                      "<p class='type'> near "+data[i].pp_city+"</p>"+
                    "</div>"+
                    "<div class='movie_desc'>"+
                      "<p class='text'>"+
                        ""+data[i].pp_plot_no + " "+ data[i].pp_ward+ " "+ data[i].pp_bulding_name+ 
                        " "+ data[i].pp_street+ " "+ data[i].pp_landmark+ 
                        " "+ data[i].pp_city+ " "+ data[i].pp_district +""+
                      "</p>"+
                    "</div>"+
                    
                  "</div>"+
                  "<div class='blur_back bright_back'></div>"+
                "</div>"+
              "</div>"+
            "</div>"+
          "</div>";
          }
          if (i == 1) {
            strsignlecard =
            strsignlecard +
            
          "<div class='container'>"+
            "<div class='row'>"+
              "<div class='col-md-6'>"+
              "</div>"+
              "<div class='col-md-6'>"+
                "<div class='movie_card' id='tomb'>"+
                  "<div class='info_section'>"+
                    "<div class='movie_header'>"+
                    "<img class='locandina'"+
                    "src='upload/images/"+data[i].md_media_url +"'/>"+
                  "<h1>&#8377;"+data[i].pp_price+"</h1>"+
                  "<h4>"+data[i].pt_name+"</h4>"+
                  "<span class='minutes'>"+data[i].pt_name+"</span>"+
                  "<p class='type'> near "+data[i].pp_city+"</p>"+
                "</div>"+
                "<div class='movie_desc'>"+
                  "<p class='text'>"+
                    ""+data[i].pp_plot_no + " "+ data[i].pp_ward+ " "+ data[i].pp_bulding_name+ 
                    " "+ data[i].pp_street+ " "+ data[i].pp_landmark+ 
                    " "+ data[i].pp_city+ " "+ data[i].pp_district +""+
                  "</p>"+
                    "</div>"+
                    
                  "</div>"+
                  "<div class='blur_back tomb_back'></div>"+
                "</div>"+
              "</div>"+
            "</div>"+
          "</div>";
          }
          if (i == 2) {
            strsignlecard =
            strsignlecard +
            
          "<div class='container'>"+
            "<div class='row'>"+
              "<div class='col-md-6'>"+
                "<div class='movie_card' id='ave'>"+
                  "<div class='info_section'>"+
                    "<div class='movie_header'>"+
                    "<img class='locandina'"+
                    "src='upload/images/"+data[i].md_media_url +"'/>"+
                  "<h1>&#8377;"+data[i].pp_price+"</h1>"+
                  "<h4>"+data[i].pt_name+"</h4>"+
                  "<span class='minutes'>"+data[i].pt_name+"</span>"+
                  "<p class='type'> near "+data[i].pp_city+"</p>"+
                "</div>"+
                "<div class='movie_desc'>"+
                  "<p class='text'>"+
                    ""+data[i].pp_plot_no + " "+ data[i].pp_ward+ " "+ data[i].pp_bulding_name+ 
                    " "+ data[i].pp_street+ " "+ data[i].pp_landmark+ 
                    " "+ data[i].pp_city+ " "+ data[i].pp_district +""+
                  "</p>"+
                    "</div>"+
                    
                  "</div>"+
                  "<div class='blur_back ave_back'></div>"+
                "</div>"+
              "</div>"+
            "</div>"+
          "</div>";
          }
          
          // console.log(data[i]);
        }
        $("#threePageContainer").html(strsignlecard);

      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      localStorage.setItem("propertyid", NaN);
    },
  });
}

function showMediaPopular() {
  const token = $('meta[name="token"]').attr("content");
  $.ajax({
    url: __URL_include_buy_pp_index_,
    type: "POST",
    headers: {token : token},
    data: {
      key: "loadMediaCategoryWise",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("loadMediaCategoryWise data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      console.log("loadMediaCategoryWise data.length" + data.length);
      if (data.length > 0) {
        var strsignlecard = "";
        for (var i = 0; i < data.length; i++) {
          strsignlecard =
            strsignlecard +
            "<div class='col-md-3'>"+
            "<div class='card'>"+
              "<div class='card-body'>"+
                "<h4 class='card-title'>"+
                "<img src='upload/images/"+data[i].md_media_url +"'/></h4>"+
                "<p class='card-text'>&#8377;"+data[i].pp_price+"</p>"+
                "<a href='#' class='card-link'>See More</a>"+
              "</div>"+
            "</div>"+
          "</div>";
          
          // console.log(data[i]);
        }
        
        $("#fourStaticCards").html(strsignlecard);
      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      localStorage.setItem("propertyid", NaN);
    },
  });
}


